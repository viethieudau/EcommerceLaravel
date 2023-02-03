<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primarykey = 'id';
    protected $guarded = [];

    public function oderDetails()
    {
        return $this->hasMany(OderDetail::class, 'order_id', 'id');
    }
}
