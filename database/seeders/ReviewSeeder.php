<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'author' => 'Алексей Мельник',
                'position' => 'Предприниматель',
                'rating' => 5,
                'text' => 'Отличный зал: чисто, просторно, тренеры всегда подсказывают по технике. За 4 месяца заметно улучшил форму.',
                'sort_order' => 1,
            ],
            [
                'author' => 'Марина Крылова',
                'position' => 'Маркетолог',
                'rating' => 5,
                'text' => 'Нравится атмосфера и групповые тренировки. Удобное расписание и хорошее оборудование.',
                'sort_order' => 2,
            ],
            [
                'author' => 'Денис Орлов',
                'position' => 'Инженер',
                'rating' => 4,
                'text' => 'Сильная команда тренеров и адекватная цена. Хотелось бы чуть больше вечерних слотов, остальное отлично.',
                'sort_order' => 3,
            ],
        ];

        foreach ($reviews as $review) {
            Review::query()->updateOrCreate(
                ['sort_order' => $review['sort_order']],
                $review
            );
        }
    }
}
