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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('numero')->nullable();
            $table->string('nome')->nullable();;
            $table->integer('geografia')->nullable();
            $table->integer('historia')->nullable();
            $table->integer('laboratorio_de_software')->nullable();
            $table->integer('laboratorio_de_web')->nullable();
            $table->integer('laboratorio_hardware')->nullable();
            $table->integer('matematica')->nullable();
            $table->integer('profissao_e_formacao')->nullable();
            $table->integer('quimica')->nullable();
            $table->integer('sociologia')->nullable();
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
        Schema::dropIfExists('students');
    }
};
