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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company', 64);
            $table->string('departure_station', 64);
            $table->string('arrival_station', 64);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 16);
            $table->smallInteger('number_of_carriages');
            $table->boolean('on_time')->default(true);
            $table->boolean('canceled')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
