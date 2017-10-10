<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_workers', function (Blueprint $blueprint){
           $blueprint->bigIncrements('id');
           
           $blueprint->integer('reserv_id')->comment('Reservation foreign key');
           $blueprint->foreign('reserv_id')->references('reserv_id')->on('reservation_details')->onDelete('cascade')
                   ->onUpdate('cascade');
           
           $blueprint->integer('worker_id')->comment('Worker foreign key');
           $blueprint->foreign('worker_id')->references('worker_id')->on('worker')
                   ->onDelete('cascade')->onUpdate('cascade');
           
           $blueprint->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_workers');
    }
}
