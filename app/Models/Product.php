<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Wishlist;
use App\Models\User;


class Product extends Model
{

    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'sku',
        'price',
        'stock',
        'description',
        'photo_url',
        'photo_public_id',
    ];
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


    // Product.php
    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function wishlistedBy()
    {
        return $this->belongsToMany(User::class, 'wishlists')->withTimestamps();
    }
}
