<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class otp extends Model
{
     use HasFactory;

    protected $fillable = [
        'user_id',
        'otp_code',
        'expires_at',
    ];

    protected $dates = ['expires_at'];
}
