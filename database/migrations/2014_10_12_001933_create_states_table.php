<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('states', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id');
            $table->string('state_name');
            $table->string('state_code')->nullable();
            $table->string('map_point_x')->nullable();
            $table->string('map_point_y')->nullable();
            $table->string('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('states');
    }

}
