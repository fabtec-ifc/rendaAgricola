<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trabalhos', function (Blueprint $table) {
            $table->id();
            $table->date('dataPublicacao');
            $table->unsignedBigInteger('tipo_trabalho_id');
            $table->foreign('tipo_trabalho_id')->references('id')->on('tipo_trabalhos')->onDelete('cascade');
            $table->string('idioma',60);
            $table->text('resumo');
            $table->string('descricao',100);
            $table->string('titulo',255);
            $table->string('subtitulo',255);
            $table->unsignedBigInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
            $table->integer('numeroDeDownloads');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabalhos');
    }
};
