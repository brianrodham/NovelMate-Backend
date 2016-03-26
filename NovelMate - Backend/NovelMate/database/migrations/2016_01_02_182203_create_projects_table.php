<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
        Schema::create('projects', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('cover_url'); // Url to cover image
            $table->integer('owner')->references('id')->on('users');
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
		Schema::drop('projects');
	}
}
