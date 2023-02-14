<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Models\OrderDetail;

class CheckOutController extends Controller
{
    //
    public function index()
    {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.checkout.index', compact('carts', 'total', 'subtotal'));
    }
    public function addOrder(Request $request)
    {
        if ($request->payment_type == 'pay_later') {
            //add order
            $order = Order::create($request->all());

            //order details
            $carts = Cart::content();

            foreach ($carts as $cart) {
                $data = [
                    'order_id' => $order->id,
                    'product_id' => $cart->id,
                    'qty' => $cart->qty,
                    'amount' => $cart->price,
                    'total' => $cart->price * $cart->qty,
                ];

                OrderDetail::create($data);
            }
            //send email
            $total = Cart::total();
            $subtotal = Cart::subtotal();
            $this->sendEmail($order, $total, $subtotal);

            //delete cart
            Cart::destroy();

            //success
            return "Success !!!";
        } else {
            return "Online payment method is not supported.";
        }
    }
    private function sendEmail($order, $total, $subtotal)
    {
        $email_to = $order->email;

        Mail::send('front.checkout.email', compact('order', 'total', 'subtotal'), function ($message) use ($email_to) {
            $message->from('dauvietieu@gmail.com', '1321312312312');
            $message->to($email_to, $email_to);
            $message->subject('Order Notification');
        });
    }
}
