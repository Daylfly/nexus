<?php

namespace Database\Seeders;

use App\Models\ProductCard;
use Illuminate\Database\Seeder;

class ProductCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cards = [
            [
                'title' => 'Абонемент "Классика"',
                'description' => 'Доступ в тренажерный зал и кардио-зону в часы работы клуба.',
                'price' => 2900,
                'image' => 'https://images.unsplash.com/photo-1571902943202-507ec2618e8f?auto=format&fit=crop&w=1200&q=80',
                'sort_order' => 1,
            ],
            [
                'title' => 'Персональный тренинг',
                'description' => 'Индивидуальная программа, контроль прогресса и сопровождение тренера.',
                'price' => 4500,
                'image' => 'https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=1200&q=80',
                'sort_order' => 2,
            ],
            [
                'title' => 'Функциональный интенсив',
                'description' => 'Короткие высокоэффективные тренировки для выносливости и силы.',
                'price' => 3900,
                'image' => 'https://images.unsplash.com/photo-1583454110551-21f2fa2afe61?auto=format&fit=crop&w=1200&q=80',
                'sort_order' => 3,
            ],
            [
                'title' => 'Годовой безлимит',
                'description' => 'Лучшее решение для стабильного прогресса с максимальной выгодой.',
                'price' => 28900,
                'image' => 'https://images.unsplash.com/photo-1552674605-db6ffd4facb5?auto=format&fit=crop&w=1200&q=80',
                'sort_order' => 4,
            ],
            [
                'title' => 'Йога и мобильность',
                'description' => 'Мягкое восстановление, работа с осанкой и снятие напряжения.',
                'price' => 3200,
                'image' => 'https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&w=1200&q=80',
                'sort_order' => 5,
            ],
            [
                'title' => 'Сушка PRO',
                'description' => 'Комплекс для снижения процента жира: тренировки + рекомендации по питанию.',
                'price' => 5400,
                'image' => 'https://images.unsplash.com/photo-1599058917212-d750089bc07e?auto=format&fit=crop&w=1200&q=80',
                'sort_order' => 6,
            ],
        ];

        foreach ($cards as $card) {
            ProductCard::query()->updateOrCreate(
                ['sort_order' => $card['sort_order']],
                $card
            );
        }
    }
}
