<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class ShopController extends Controller
{
    //
    public function show($id){
        $product = Product::findOrFail($id);

        $avgRating = 0;
        $sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
        $countRating = count($product->productComments);
        if($countRating!=0){
        $avgRating = $sumRating/$countRating;
        }

        return view('front.shop.show',compact('product','avgRating'));
    }
}
