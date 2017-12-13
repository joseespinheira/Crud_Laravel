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
            $table->string('nome', 255);/*nome do usuario*/
            $table->string('email', 255)->unique();/*email do usuario*/
            $table->string('senha', 60);/*senha do usuario*/
            /*$table->rememberToken();*//*Relembrar padrão*/
            $table->enum('tipo', array('admin', 'comum', 'especialista', 'fornecedor'));/*tipos de usuarios*/
            $table->string('remember_token', 100)->nullable();/*relembrar do exemplo*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     *      migrate                                                     
     *      migrate:install                                             
     *      migrate:rollback                                            
     *      migrate:reset                                               
     *      migrate:refresh                                             
     *      migrate:status  
     */
    public function down()
    {
        Schema::drop('users');
    }
}
