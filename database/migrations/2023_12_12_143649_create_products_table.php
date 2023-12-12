<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('description')->max(300);
            $table->string('image_uri', 255)->nullable();
            $table->double('price');
            $table->integer('stock');
            $table->boolean('is_stock')->nullable()->default(true);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
