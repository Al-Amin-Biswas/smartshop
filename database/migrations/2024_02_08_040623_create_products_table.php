<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->text('description');
            $table->string('sku');
            $table->decimal('price', $precision = 8, $scale = 2);
            $table->boolean('status')->default(false);
            $table->tinyInteger('hit_count');
            $table->string('image');
            $table->foreignId('category_id');
            $table->foreignId('subcategory_id');
            $table->foreignId('inventory_id');
            $table->foreignId('productsize_id');
            $table->foreignId('discount_id');
            $table->tinyInteger('createby');
            $table->tinyInteger('updateby');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
