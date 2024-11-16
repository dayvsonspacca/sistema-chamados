<?php

namespace Database\Seeders;

use App\Models\Chamado;
use Illuminate\Database\Seeder;

class ChamadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chamado::factory(100)->create();
    }
}
