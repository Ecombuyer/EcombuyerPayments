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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('orders_id')->nullable();
            $table->string('product_id')->nullable();
            $table->string('user_name')->nullable();
            $table->string('user_email')->nullable();
            $table->string('user_number')->nullable();

            $table->string('payment_status')->nullable();
            $table->string('order_status')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('payment_method')->nullable();
            $table->tinyInteger('status')->default('1');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
