<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clients', function( $table)
		{
			// se crea la tabla clientes
			$table->create();
			// se agregan las columnas de la tabla usuarios
			
			$table->increments('client_id'); //llave primaria 
			$table->string('first_name');
			$table->string('last_name');
			$table->string('identity_document');
			$table->date('birth_date');
			$table->string('profession')->nullable(); //permite valores null;
			$table->string('fixed_telephone')->nullable(); //permite valores null;
			$table->string('mobile_phone')->nullable(); //permite valores null;
			$table->string('email')->nullable(); //permite valores null;
			$table->integer('city_residence')->unsigned();
			$table->integer('nationality')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->timestamps();
		});
		Schema::table('clients', function($table) {
     		$table->foreign('city_residence')->references('location_id')->on('locations');
			$table->foreign('nationality')->references('location_id')->on('locations');
			$table->foreign('user_id')->references('id')->on('users');
			
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
		Schema::drop('clients');
	}

}