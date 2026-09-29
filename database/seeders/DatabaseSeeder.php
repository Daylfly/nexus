<?php

namespace Database\Seeders;

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
        User::query()->updateOrCreate([
            'email' => 'admin@ironcore-fit.ru',
        ], [
            'name' => 'Admin',
            'password' => Hash::make('password'),
        ]);

        $this->call([
            AboutSeeder::class,
            PromotionSeeder::class,
            AdvantageSeeder::class,
            ContactSeeder::class,
            ReviewSeeder::class,
            ProductCardSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
