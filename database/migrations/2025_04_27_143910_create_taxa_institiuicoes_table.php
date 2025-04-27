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
        Schema::create('taxa_instituicoes', function (Blueprint $table) {
            $table->id();
            $table->integer('parcelas');
            $table->float('taxaJuros');
            $table->float('coeficiente');
            $table->integer('convenio_id')
                    ->references('id')
                    ->on('convenios')->onDelete('cascade');
            $table->integer('instituicao_id')
                    ->references('id')
                    ->on('instituicoes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taxa_institiuicoes');
    }
};
