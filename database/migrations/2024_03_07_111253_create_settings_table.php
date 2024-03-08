<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{

    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('software_name');
            $table->text('software_description');
            $table->string('software_logo')->nullable();
            $table->string('software_desktop_banners_1')->nullable();
            $table->string('software_desktop_banners_2')->nullable();
            $table->string('software_desktop_banners_3')->nullable();
            $table->string('software_mobile_banners_1')->nullable();
            $table->string('software_mobile_banners_2')->nullable();
            $table->string('software_mobile_banners_3')->nullable();
            $table->string('panel_color_1')->nullable();
            $table->string('panel_color_2')->nullable();
            $table->string('panel_color_3')->nullable();
            $table->tinyInteger('logintype')->default(0);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
