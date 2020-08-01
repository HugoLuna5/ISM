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
            $table->string('name')->default('ISM');
            $table->string('logo')->nullable();
            $table->string('email')->default('hugodariolc@gmail.com');
            $table->string('phone')->default('7891005104');
            $table->string('direction')->default('Quinta minero S/N Col. El Rastro. 92124 Tantoyuca, Ver. Mex.');
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
