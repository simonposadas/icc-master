<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReservationEquipments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_equipments', function (Blueprint $blueprint){
           $blueprint->bigIncrements('id');
           $blueprint->integer('reserv_id')->comment('Reservation foreign key');
           $blueprint->foreign('reserv_id')->references('reserv_id')->on('reservation_details')->onDelete('cascade')
                   ->onUpdate('cascade');
           $blueprint->integer('equipment_id')->comment('Equipment foreign key');
           $blueprint->foreign('equipment_id')->references('equipment_id')->on('equipment')
                   ->onDelete('cascade')->onUpdate('cascade');
           $blueprint->integer('quantity')->comment('the number of quantity assigned in a event');
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
        Schema::dropIfExists('reservation_equipments');
    }
}
