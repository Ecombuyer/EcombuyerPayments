<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('api_details', function (Blueprint $table) {
            $table->id();
            $table->string('payment_api_name');
            $table->string('api_key');
            $table->string('api_secret')->nullable();
            $table->string('api_endpoint')->nullable();
            $table->string('api_image')->nullable();
            $table->string('api_version')->nullable();
            $table->string('api_data_1')->nullable();
            $table->string('api_data_2')->nullable();
            $table->string('api_data_3')->nullable();
            $table->string('success_url')->nullable();
            $table->string('failed_url')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('api_details');
    }
};
