<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('orders_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_image')->nullable();
            $table->string('product_description')->nullable();
            $table->string('product_price')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->index('product_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
