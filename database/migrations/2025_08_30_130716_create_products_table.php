<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); 
            $table->string('name'); // Product name
            $table->string('slug')->unique(); // SEO-friendly unique name
            $table->string('sku')->unique(); // Stock keeping unit
            $table->decimal('price', 10, 2); // Example: 999.99
            $table->integer('stock')->default(1); // Quantity available
            $table->text('description'); // Product details
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
