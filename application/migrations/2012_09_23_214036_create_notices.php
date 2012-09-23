<?php

class Create_Notices {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notices',function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('post_id');
            $table->integer('topic_id');
            $table->integer('sender_id');
            $table->string('sender_name',32);
            $table->integer('receiver_id');
            $table->boolean('read')->default(0);
            $table->timestamps();

            $table->index('receiver_id');
            $table->index('post_id');
            $table->index('topic_id');
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('notices');
	}

}