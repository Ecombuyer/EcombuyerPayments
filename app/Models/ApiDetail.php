<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiDetail extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'payment_api_name',
        'api_key',
        'api_secret',
        'api_endpoint',
        'api_image',
        'api_version',
        'api_data_1',
        'api_data_2',
        'api_data_3',
        'success_url',
        'failed_url',
        'status',
    ];
}
