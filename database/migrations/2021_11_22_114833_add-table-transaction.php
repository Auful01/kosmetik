<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('reservation_id');
            $table->unsignedBigInteger('reservation_detail_id');
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->enum('status', [0, 1, 2])->default(0);
            $table->timestamps();
            $table->foreign('reservation_id')->references('id')->on('reservation')->onDelete('cascade');
            $table->foreign('reservation_detail_id')->references('id')->on('reservation_details')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
