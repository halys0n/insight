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
        Schema::create('dados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ref');
            $table->string('Periodo');
            $table->integer('QtdAlunos');
            $table->decimal('MedGeral');    
            $table->decimal('InFreq',);
            $table->float('Freq');
            $table->integer('AcimaMedPT');
            $table->integer('AcimaMedMT');
            $table->integer('AcimaMedGeral');

            $table->foreign('ref')->references('id')->on('salas');
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
        Schema::dropIfExists('dados');
    }
};
