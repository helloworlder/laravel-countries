<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('countries', function(Blueprint $table) {
            $table->string('id_countries');
            $table->string('name');
            $table->string('iso_alpha2'); 
            $table->string('iso_alpha3');
            $table->unsignedInteger('iso_numeric');
            $table->string('currency_code');
            $table->string('currency_name');
            $table->string('currency_symbol');
            $table->string('flag');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
