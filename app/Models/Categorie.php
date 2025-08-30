<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{

    use HasFactory;
     protected $fillable = [
        'name',
        'slug',
        'description',
    ];


    // Category.php
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
