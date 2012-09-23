<?php

class Create_Bars {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bars',function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('image',255)->nullable();
            $table->string('redirect_url',255)->nullable();
            $table->text('admins');
            $table->text('describe');
            $table->integer('count_topics')->default(0);
            $table->integer('count_posts')->default(0);
            $table->timestamp('last_post_at')->nullable();
            $table->integer('last_post_id')->nullable();
            $table->string('last_poster_name',32)->nullable();
            $table->integer('last_poster_id')->nullable();
            $table->integer('category_id')->default(0);
            $table->integer('sort')->default(0);
            $table->timestamps();
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bars');
	}

}