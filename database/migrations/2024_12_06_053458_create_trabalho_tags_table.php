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
        Schema::create('trabalho_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('trabalho_id');
            $table->unsignedBigInteger('tag_id');
            $table->primary(['trabalho_id','tag_id']);
            $table->timestamps();
            $table->foreign('trabalho_id')->references('id')->on('trabalhos')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabalho_tags');
    }
};
