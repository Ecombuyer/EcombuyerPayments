<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aadhar_pan extends Model
{
    use HasFactory;

    protected $fillable = [

        'aadhar_no',
        'aadhar_front_page',
        'aadhar_back_page',
        'pan_no',
        'pan_image',
        'status'

    ];

}
