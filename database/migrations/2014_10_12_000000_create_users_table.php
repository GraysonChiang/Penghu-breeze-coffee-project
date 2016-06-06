<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('password');
            $table->string('chineseName',20);
            $table->string('nickname',50);
            $table->string('Jobtitle',20);
            $table->string('introduce',100);
            $table->string('photo',50);
            $table->string('facebook',100);
            $table->string('google',100);
            $table->string('twitter',100);
            $table->string('email')->unique();
            $table->boolean('visble');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
