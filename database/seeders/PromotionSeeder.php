<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $promotions = [
            [
                'title' => 'Первая неделя за 990 ₽',
                'description' => 'Познакомьтесь с клубом, тренажерами и групповыми занятиями в льготном формате.',
                'sort_order' => 1,
            ],
            [
                'title' => 'Семейный абонемент -15%',
                'description' => 'Подходит для пар и близких: тренируйтесь вместе и получайте скидку на второй абонемент.',
                'sort_order' => 2,
            ],
            [
                'title' => 'Персональные тренировки в подарок',
                'description' => 'При покупке годовой карты получите две стартовые тренировки с персональным тренером.',
                'sort_order' => 3,
            ],
        ];

        foreach ($promotions as $promotion) {
            Promotion::query()->updateOrCreate(
                ['sort_order' => $promotion['sort_order']],
                $promotion
            );
        }
    }
}
