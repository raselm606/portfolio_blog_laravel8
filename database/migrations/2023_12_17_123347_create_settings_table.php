<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('admin_title')->nullable();
            $table->string('site_title')->nullable();
            $table->string('site_logo')->nullable();
            $table->string('mobile_logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('hero_img')->nullable();
            $table->text('hero_text')->nullable();
            $table->text('hero_subtext')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('copyright')->nullable();
            $table->text('location')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
