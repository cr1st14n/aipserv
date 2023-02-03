<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('usu_codigo')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            
            $table->string('usu_nombre')->nullable();
            $table->string('usu_empresa')->nullable();
            $table->date('usu_fechaInicio')->nullable();
            $table->date('usu_fechaFinal')->nullable();
            $table->string('usu_tipoCuenta')->nullable();
            
            $table->boolean('ca_estado')->nullable();
            $table->string('ca_user')->nullable();
            $table->string('ca_tipo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
