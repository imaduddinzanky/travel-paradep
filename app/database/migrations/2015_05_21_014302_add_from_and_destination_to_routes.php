<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFromAndDestinationToRoutes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('routes',function(Blueprint $table){
			$table->integer('departure_id');
			$table->integer('destination_id');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('routes',function(Blueprint $table){
			$table->dropColumn('destination_id');
			$table->dropColumn('departure_id');
		});
	}

}
