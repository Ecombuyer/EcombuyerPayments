<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentlinksTable extends Migration
{

    public function up()
    {
        Schema::create('paymentlinks', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->decimal('amount', 10, 2);
            $table->string('payment_method');
            $table->string('redirect_url');
            $table->string('success_url')->nullable();
            $table->string('cancel_url')->nullable();
            $table->dateTime('expiry_date');
            $table->integer('max_attempts')->default(3);
            $table->tinyInteger('status')->default(0);
            $table->string('type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paymentlinks');
    }
}
