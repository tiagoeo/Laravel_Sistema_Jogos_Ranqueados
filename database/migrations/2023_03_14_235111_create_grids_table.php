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
        Schema::create('grids', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('paginas_id')->constrained();
            $table->foreignId('jogo_id');
            $table->string('titulo', 50);
            $table->longText('descricao')->nullable();
            $table->longText('img')->nullable();
            $table->string('botaonome', 50)->nullable();
            $table->longText('botaolink')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {      
        Schema::dropIfExists('grids');
    }
};
