<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationDetailsRelation extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('reservation_details', function (Blueprint $blueprint) {
            $blueprint->foreign('event_id')->references('event_id')
                    ->on('event_details')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('reservation_details', function (Blueprint $blueprint) {
            $blueprint->dropForeign(['event_id']);
        });
    }

}
