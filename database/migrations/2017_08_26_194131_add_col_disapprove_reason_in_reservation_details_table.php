<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColDisapproveReasonInReservationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservation_details', function (Blueprint $blueprint){
            $blueprint->text('disapprove_reason')->nullable()->comment('The reason of admin for disapproving the reservation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservation_details', function (Blueprint $blueprint){
           $blueprint->dropColumn('disapprove_reason'); 
        });
    }
}
