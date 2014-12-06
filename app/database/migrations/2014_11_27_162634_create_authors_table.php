<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function(Blueprint $table)
        {
            // laravel's auto increment id (primary key)
            $table->increments('id'); // 'id' INT(11) NOT NULL AUTO_INCREMENT,

            $table->string('name'); // 'name' VARCHAR(255) NOT NULL,
            $table->integer('age')->nullable(); // 'age' INT(11) NULL DEFAULT NULL,
            $table->boolean('active')->default(1); // 'active' TINYINT(4) NOT NULL DEFAULT '1',
            $table->integer('role_id')->unsigned(); // 'role_id' INT(10) UNSIGNED NOT NULL,
            $table->text('bio'); // 'bio' TEXT NOT NULL,

            // created_at, updated_at DATETIME; not the same as timestamp != timestampS
            // 'created_at' TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
            // 'updated_at' TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
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
        Schema::table('authors', function(Blueprint $table)
        {
            //
            Schema::drop('authors');
        });
    }

}
