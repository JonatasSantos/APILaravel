<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCastTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cast', function (Blueprint $table) {
            $table->increment('id');
            $table->string('date');
            $table->string('text');
            $table->int('temperature_min');
            $table->int('temperature_max');
            $table->int('rain_probability');
            $table->int('rain_precipitation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cast');
    }
}
