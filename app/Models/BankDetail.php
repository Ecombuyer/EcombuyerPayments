<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'bank_name',
        'account_holder_name',
        'account_number',
        'routing_number',
        'swift_code',
        'branch_address',
        'branch_city',
        'branch_state',
        'branch_country',
        'branch_zip_code',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
