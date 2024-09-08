<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_variant_id',
        'name',
        'description',
        'price',
        'quantity',
        'amount_discount',
        'amount_subtotal',
        'amount_tax',
        'amount_total',
    ];

//    public function order()
//    {
//        return $this->belongsTo(Order::class);
//    }
}
