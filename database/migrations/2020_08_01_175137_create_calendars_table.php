<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->dateTime('date_start');
            $table->dateTime('date_end')->nullable();
            $table->string('colorText', 20)->default('#FFF');
            $table->string('backgroundText', 20)->default('#000');
            $table->enum('status', ['Proximamente', 'En proceso', 'Cumplido']);
            $table->enum('relevance', ['Baja', 'Media', 'Alta']);
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
        Schema::dropIfExists('calendars');
    }
}
