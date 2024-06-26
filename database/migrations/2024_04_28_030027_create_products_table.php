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
            $table->foreignId('category_id')->constrained();
            $table->string('name');
            // $table->string('slug');
            // $table->unsignedBigInteger('price_old');
            // $table->unsignedBigInteger('price_now');
            // $table->unsignedBigInteger('stock');
            // $table->unsignedBigInteger('avalaible_stock');
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('stock');
            $table->unsignedBigInteger('rating');
            $table->string('desc');
            $table->string('image');
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
