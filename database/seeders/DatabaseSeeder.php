<?php

namespace Database\Seeders;

use App\Models\Chamado;
use App\Models\User;
use Illuminate\Database\Seeder;     

class DatabaseSeeder extends Seeder 
{
    /**
     * Seed the application's database.
     */
    public function run() : void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Dayvson',
            'last_name'  => 'Spacca',
            'username'   => 'dayvsonspacca',
            'email'      => 'spacca.dayvson@gmail.com',
            'password'   => '123456',
        ]);

        Chamado::factory(100)->create();
    }
}
