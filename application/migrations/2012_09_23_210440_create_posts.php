<?php

class Create_Posts {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts',function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('poster_name')->default('');
            $table->integer('poster_id');
            $table->string('poster_ip')->nullable();
            $table->text('message');
            $table->integer('topic_id');
            $table->timestamps();

            $table->index('topic_id');
            $table->index('poster_id');
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('posts');
	}

}