<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders_details extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'user_id',
        'user_name',
        'user_email',
        'user_number',
        'order_status',
        'payment_status',
        'transaction_id',
        'payment_method',
    ];
}
