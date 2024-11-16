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
            $table->date('dt_prazo')->nullable();
            $table->date('dt_finalizacao')->nullable();
            $table->timestamps();

            // Mudando o campo para 'responsavel_id' para seguir convenção
            $table->foreignId('responsavel_id')->nullable()->constrained('users')->onDelete('set null');
            $table->index(['status', 'responsavel_id']);
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
