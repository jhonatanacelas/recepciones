<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */

	public function up(){

			Schema::table('locations', function( $table)
		{
			// se crea la tabla lugares
			$table->create();
			// se agregan las columnas de la tabla usuarios
			
			$table->increments('location_id'); //llave primaria 
			$table->string('location_name')->nullable(); //permite valores null
			$table->string('location_type')->nullable();// permite valores null
			
			$table->timestamps();
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
		Schema::drop('locations');
	}

}
