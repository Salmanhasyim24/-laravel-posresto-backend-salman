<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(20)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@fic14.com',
            'phone' => '089512929676',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
    }
}
