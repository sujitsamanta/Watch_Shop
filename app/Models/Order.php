<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 
        'address_id',            
        'order_number',
        'subtotal',
        'shipping_cost',
        'total',
        'status',
        'payment_method',
        'shipping_address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function address() { 
        return $this->belongsTo(Address::class); 
    }
}
