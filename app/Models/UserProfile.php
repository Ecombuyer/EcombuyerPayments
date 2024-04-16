<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'name',
        'dob',
        'user_id',
        'profile_image',
        'aadhar_no',
        'pan_no',
        'country',
        'state',
        'city',
        'pin_code',
        'address',
        'business_category',
        'business_type',
        'company_name',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
