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
        Schema::create('filecsvs', function (Blueprint $table) {
            $table->id();
            $table->integer('NUMERO');
            $table->string('Alunos / Disciplinas');
            $table->decimal('GEOGRAFIA');
            $table->decimal('HISTÓRIA');
            $table->decimal('LABORATORIO DE SOFTWARE');
            $table->decimal('LABORATORIO HARDWARE');
            $table->decimal('MATEMÁTICA');
            $table->decimal('PROFISSAO E FORMAÇÃO');
            $table->decimal('QUÍMICA');
            $table->decimal('SOCIOLOGIA');
            
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
        Schema::dropIfExists('filecsvs');
    }
};
