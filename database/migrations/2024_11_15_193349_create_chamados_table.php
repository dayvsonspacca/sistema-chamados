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
        Schema::create('chamados', function (Blueprint $table)
        {
            $table->id();
            $table->string('titulo', 255);
            $table->text('descricao');
            $table->enum('status', ['aberto', 'em andamento', 'fechado'])->default('aberto');
            $table->enum('prioridade', ['baixa', 'média', 'alta'])->default('média');
            $table->date('prazo')->nullable();
            $table->timestamps();

            $table->foreignId('responsavel')->references('id')->on('users');
            $table->index(['status', 'responsavel']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chamados');
    }
};
