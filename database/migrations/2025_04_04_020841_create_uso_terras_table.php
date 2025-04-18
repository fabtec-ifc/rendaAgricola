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
        Schema::create('uso_terras', function (Blueprint $table) {
            $table->id();
            $table->double("quantArea");
            $table->double("areaInaproveitavel");

            $table->unsignedBigInteger("tipo_uso_terra_id");
            //$table->unsignedBigInteger("ano_agricola_id");

            $table->foreign("tipo_uso_terra_id")->references("id")->on("tipo_uso_terras");
            //$table->foreign("ano_agricola_id")->references("id")->on("ano_agricolas");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uso_terras');
    }
};
