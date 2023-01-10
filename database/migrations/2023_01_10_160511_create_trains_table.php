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
            $table->string('company', 50);
            $table->string('departing_from', 50);
            $table->string('arriving_at', 50);
            $table->string('departure_time');
            $table->string('arrival_time');
            $table->smallInteger('train_code', false, true);
            $table->smallInteger('number_of_cars');
            $table->boolean('is_on_time');
            $table->boolean('is_cancelled');
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
        Schema::dropIfExists('trains');
    }
};
