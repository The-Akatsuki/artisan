<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCurrenciesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('currencies', function(Blueprint $table) {
            $table->increments('id');
            $table->string('country');
            $table->string('currency');
            $table->string('symbol')->collate('utf8_general_ci');
            $table->string('codeiso');
            $table->string('hexsymbol');
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
        Schema::drop('currencies');
    }

}
