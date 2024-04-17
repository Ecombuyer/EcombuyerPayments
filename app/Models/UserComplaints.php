<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserComplaints extends Model
{
    use HasFactory;
    protected $fillable=[

        'user_id',
        'name',
        'email',
        'phone',
        'complaints',
        'status',
        'read_at',
        'type',

    ];
}
