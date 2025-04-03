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
        Schema::create('unidade_producaos', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 255);
            $table->string("endereco", 255);
            $table->unsignedBigInteger("municipio_id");
            $table->string("telefone", 45);
            $table->json("coordenadasMapa")->nullable();
            $table->timestamps();
            $table->foreign("municipio_id")->references("id")->on("municipios");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidade_producaos');
    }
};
