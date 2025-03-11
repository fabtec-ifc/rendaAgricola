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
        Schema::create('trabalho_palavra_chaves', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('trabalho_id');
            $table->unsignedBigInteger('palavra_chave_id');
            $table->foreign('trabalho_id')->references('id')->on('trabalhos')->onDelete('cascade');
            $table->foreign('palavra_chave_id')->references('id')->on('palavra_chaves')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabalho_palavra_chaves');
    }
};
