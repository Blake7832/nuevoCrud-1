<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('facultad_id')->constrained('facultads')->onDelete('set null');
            $table->boolean('pregunta_activa');
            $table->string('tipo_pregunta');
            $table->string('capitulo_id');
            $table->string('pregunta_contexto');
            $table->string('respuesta_pregunta');
            $table->boolean('examen_pasado');
            $table->string('cod_examen');
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
        Schema::dropIfExists('examens');
    }
}
