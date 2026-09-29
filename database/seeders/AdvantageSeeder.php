<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $advantages = [
            [
                'title' => 'Большая зона тренажеров',
                'description' => 'Премиальные тренажеры для силовых и функциональных тренировок.',
                'sort_order' => 1,
            ],
            [
                'title' => 'Сильная тренерская команда',
                'description' => 'Сертифицированные тренеры с опытом подготовки любителей и спортсменов.',
                'sort_order' => 2,
            ],
            [
                'title' => 'Кардио и восстановление',
                'description' => 'Кардио-зона, стретчинг и рекомендации для безопасного прогресса.',
                'sort_order' => 3,
            ],
            [
                'title' => 'Удобный график',
                'description' => 'Клуб работает ежедневно с раннего утра до позднего вечера.',
                'sort_order' => 4,
            ],
        ];

        foreach ($advantages as $advantage) {
            Advantage::query()->updateOrCreate(
                ['sort_order' => $advantage['sort_order']],
                $advantage
            );
        }
    }
}
