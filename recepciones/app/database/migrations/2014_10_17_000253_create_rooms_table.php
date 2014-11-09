<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rooms', function(Blueprint $table)
		{
			$table->create();

			$table->increments('room_id');
			$table->string('room_number', 45);
			$table->string('floor', 45);
			$table->string('type', 45);
			$table->string('state', 45);
			$table->integer('double_beds')->unsigned();
			$table->integer('single_beds')->unsigned();
			$table->integer('auxiliary_beds')->unsigned();
			$table->integer('price')->unsigned();
			$table->string('additional_features');
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
		Schema::drop('rooms');
	}

}
