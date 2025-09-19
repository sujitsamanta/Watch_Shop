<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Address extends Model
{
    protected $fillable = [
        'user_id',
        'address_type',
        'full_name',
        'phone_number',
        'street_address',
        'apartment_unit',
        'city',
        'state',
        'zip_code',
        'pin_number',
        'country',
        'is_default',
    ];

    // Relation: Each address belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
