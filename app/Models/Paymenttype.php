<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymenttype extends Model
{
    use HasFactory;
    protected $table = 'paymenttypes';
    protected $fillable = [
       'user_id',
       'indicpay',
       'crizpay'


    ];

}
