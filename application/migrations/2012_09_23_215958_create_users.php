<?php

class Create_Users {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('username');
            $table->string('password',100);
            $table->string('email',100)->nullable();
            $table->string('avatar',100)->nullable();
            $table->string('phone',16)->nullable();
            $table->string('title',50)->nullable();
            $table->integer('level')->default(1);
            $table->string('fullname',16)->nullable();
            $table->string('url',100)->nullable();
            $table->string('qq',20)->nullable();
            $table->string('city',30)->nullable();
            $table->string('registration_ip',40)->nullable();
            $table->text('signature');
            $table->boolean('auto_notice')->default(1);
            $table->string('style',20)->default('default');
            $table->integer('count_great')->default(0);
            $table->integer('count_post')->default(0);
            $table->integer('last_post')->nullable();
            $table->timestamp('last_visit')->nullable();
            $table->timestamp('last_sign')->nullable();
            $table->integer('count_sign')->default(0);
            $table->string('admin_auth',100)->nullable();
            $table->timestamps();

            $table->unique('username');
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}