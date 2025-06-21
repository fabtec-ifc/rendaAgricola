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
        Schema::create('user__unidade_producaos', function (Blueprint $table) {
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("unidade_producao_id");
            $table->boolean("dono")->default(false);
            $table->timestamps();

            $table->primary(["user_id", "unidade_producao_id"]);
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("unidade_producao_id")->references("id")->on("unidade_producaos");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user__unidade_producaos');
    }
};
