<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChaptersTable extends Migration {

	/**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
        Schema::create('chapters', function (Blueprint $table) {
         $table->increments('id');
         $table->string('title');
         $table->text('body');
         $table->integer('owner')->references('id')->on('users');
         $table->integer('project')->references('id')->on('projects');
         $table->boolean('status');
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
		Schema::drop('chapters');
	}

}
