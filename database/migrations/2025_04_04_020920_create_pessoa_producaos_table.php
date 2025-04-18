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
        Schema::create('pessoa_producaos', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("cpf",11);
            $table->date("dataNascimento");
            $table->integer("diasTrabalho");
            $table->unsignedBigInteger("tipo_mao_de_obra_id");
            //$table->unsignedBigInteger("ano_agricola_id");
            $table->timestamps();
            
            $table->foreign("tipo_mao_de_obra_id")->references("id")->on("tipo_mao_de_obras");
            //$table->foreign("ano_agricola_id")->references("id")->on("ano_agricolas");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoa_producaos');
    }
};
