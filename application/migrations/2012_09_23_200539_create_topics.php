<?php

class Create_Topics {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('topics',function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('poster_name')->default('');
            $table->integer('poster_id');
            $table->string('subject')->default('');
            $table->string('mini_info',1000)->default('');
            $table->string('image')->nullable();
            $table->integer('bar_id');
            $table->integer('first_post_id');
            $table->timestamp('last_post_at')->nullable();
            $table->integer('last_post_id')->nullable();
            $table->string('last_poster_name',32)->nullable();
            $table->integer('last_poster_id')->nullable();
            $table->integer('count_view')->default(0);
            $table->integer('count_post')->default(0);
            $table->boolean('closed')->default(0);
            $table->boolean('hold_top')->default(0);
            $table->timestamps();

            $table->index('bar_id');
            $table->index('first_post_id');
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('topics');
	}

}