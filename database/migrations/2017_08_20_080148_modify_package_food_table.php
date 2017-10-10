<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyPackageFoodTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('package_food', function (Blueprint $blueprint) {
            $blueprint->bigIncrements('id');
            $blueprint->integer('food_type_id')->comment('Food type fk');
            $blueprint->foreign('food_type_id')->references('food_type_id')->on('food_type')->onDelete('cascade');
            $blueprint->text('desc')->comment('Package details menu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        if (Schema::hasColumn('package_food', 'food_id')) {
            Schema::table('package_food', function (Blueprint $blueprint) {
                $blueprint->dropForeign('package_food_ibfk_2');
                $blueprint->dropColumn('food_id');
            });
        }
        Schema::table('package_food', function (Blueprint $blueprint) {
            $blueprint->dropForeign(['food_type_id']);
            $blueprint->dropColumn(['id', 'food_type_id', 'desc']);
        });
    }

}
