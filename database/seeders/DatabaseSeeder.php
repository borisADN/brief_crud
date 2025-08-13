<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Commande a utiliser
        // php artisan db:seed
        User::create([
            'name' => 'Boris',
            'email' => 'edemwomagno@gmail.com',
            'is_admin' => 1,
            'password' => bcrypt('0000'),
        ]);
    }
}
