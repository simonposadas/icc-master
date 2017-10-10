<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColPackageTypeInPackageDetailsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('package_details', function (Blueprint $blueprint) {
            $blueprint->unsignedInteger('package_type_id')->comment('Package type foreign key');
            $blueprint->foreign('package_type_id')->references('id')
                    ->on('package_type')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('package_details', function (Blueprint $blueprint) {
            $blueprint->dropForeign(['pacakge_type_id']);
            $blueprint->dropColumn(['package_type_id']);
        });
    }

}
