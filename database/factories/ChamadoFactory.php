<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chamado>
 */
class ChamadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = fake()->randomElement(['aberto', 'em andamento', 'fechado']);

        if ($status === 'fechado')
        {
            $dt_finalizacao = fake()->dateTimeBetween('-20 days', '+0 days')->format('d/m/Y');
        }
        
        return [
            'titulo' => fake()->sentence(),
            'descricao' => fake()->randomHtml(),
            'status' => $status,
            'prioridade' => fake()->randomElement(['baixa', 'média', 'alta']),
            'dt_prazo' => fake()->dateTimeBetween('+0 days', '+2 months')->format('d/m/Y'),
            'dt_finalizacao' => $dt_finalizacao ?? null,
            'responsavel_id' => User::inRandomOrder()->first()->id ?? null,
        ];
    }
}
