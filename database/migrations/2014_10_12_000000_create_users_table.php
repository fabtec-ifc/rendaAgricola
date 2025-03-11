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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('politicas')->default(false);
            $table->string('token', 255)->nullable();
            $table->boolean('habilitado')->nullable();
            $table->integer('erros')->nullable();
            $table->date('lastMail')->nullable();
            $table->string('name');
            $table->string('linkDoLattes',200);
            $table->string('cpf',11);
            $table->string('rg',7);
            $table->unsignedBigInteger('tipoUsuario_id');
            $table->foreign('tipoUsuario_id')->references('id')->on('tipo_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
