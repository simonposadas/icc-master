<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColPackageIdRemoveFoodIdInReservationDetails extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('reservation_details', function (Blueprint $blueprint) {
            $blueprint->integer('package_id');
            $blueprint->foreign('package_id')->references('package_id')
                    ->on('package_details')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
         if (Schema::hasColumn('reservation_details', 'food_id')) {
            Schema::table('reservation_details', function (Blueprint $blueprint) {
                $blueprint->dropColumn('food_id');
            });
        }
        
        Schema::table('reservation_details', function (Blueprint $blueprint) {
            $blueprint->dropForeign(['package_id']);
            $blueprint->dropColumn('package_id');
        });
    }
}
