<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    use HasFactory;
    protected $table = 'orders_details';
    protected $fillable = [
        'order_id',
        'product_id',
        'seller_id',
        'user_id',
        'user_name',
        'user_email',
        'user_number',
        'address',
        'order_status',
        'payment_status',
        'transaction_id',
        'payment_method',
        'product_price',
        'product_name',
        'type'

    ];
}
