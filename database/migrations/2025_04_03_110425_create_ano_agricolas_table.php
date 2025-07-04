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
        Schema::create('ano_agricolas', function (Blueprint $table) {
            $table->id();
            $table->date('inicio');
            $table->date('fim');
            $table->boolean('ativo')->default(true);
            $table->unsignedBigInteger('unidade_producao_id')->nullable();
            $table->foreign("unidade_producao_id")->references("id")->on("unidade_producaos");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ano_agricolas');
    }
};
