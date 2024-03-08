<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'title',
        'description',
        'amount',
        'payment_method',
        'redirect_url',
        'success_url',
        'cancel_url',
        'expiry_date',
        'max_attempts',
        'status',
        'type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
