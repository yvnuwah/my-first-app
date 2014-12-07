<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			// laravel's auto increment id (primary key)
			$table->increments('id');

			$table->string('first_name', 20);
			$table->string('last_name', 20);
			$table->string('email', 100)->unique();
			$table->string('password', 64);

			//created_at & updated_at timestamps
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
		Schema::table('users', function(Blueprint $table)
		{
			//
			Schema::drop('users');
		});
	}

}
