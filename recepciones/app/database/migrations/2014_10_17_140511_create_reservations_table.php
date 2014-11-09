<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reservations', function( $table)
		{
			// se crea la tabla reservations
			$table->create();
			
			
			$table->increments('reservation_id'); //llave primaria 
			$table->integer('client_id')->unsigned();
			$table->integer('room_id')->unsigned();
			$table->string('extend_reservation', 2);
			$table->date('start_date');
			$table->date('end_date');
			$table->string('move_bags', 2);
			$table->string('destination', 45)->nullable(); //permite valores null;
			$table->string('source', 45)->nullable();
			$table->integer('people_amount')->unsigned();
			$table->integer('advance')->unsigned();
			$table->integer('overcharge')->unsigned();
			$table->string('vehicle',2)->nullable();
			$table->string('additional_features',256);
			$table->integer('user_id')->unsigned();
			$table->timestamps();
		});
		Schema::table('reservations', function($table) {
      		$table->foreign('client_id')->references('client_id')->on('clients');
			$table->foreign('room_id')->references('room_id')->on('rooms');		
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
		Schema::table('reservations', function(Blueprint $table)
		{
			//
		});
	}

}
