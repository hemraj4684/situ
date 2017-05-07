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
            $table->string('name', 255)->unique();//common field name for PAN No of user and username of admin.
            $table->string('email')->unique();
            $table->string('password');
            
            $table->text('co_name');
            $table->text('co_add');
            $table->string('co_cont_name');
            $table->string('co_cont_no')->unique();
            $table->string('co_adhar_no')->unique();
            $table->string('role')->default('user');
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
