<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableSchedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('doctor_id');
            $table->time('monday_start')->nullable();
            $table->time('monday_end')->nullable();
            $table->time('tuesday_start')->nullable();
            $table->time('tuesday_end')->nullable();
            $table->time('wednesday_start')->nullable();
            $table->time('wednesday_end')->nullable();
            $table->time('thursday_start')->nullable();
            $table->time('thursday_end')->nullable();
            $table->time('friday_start')->nullable();
            $table->time('friday_end')->nullable();
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
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
        //
    }
}
