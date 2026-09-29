<?php

namespace Database\Seeders;

use App\Models\AboutSection;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutSection::query()->updateOrCreate(
            ['id' => 1],
            [
                'headline' => 'Место, где рождается сила и результат',
                'title' => 'О клубе IronCore',
                'description' => 'Фитнес-клуб IronCore основан в 2010 году командой профессиональных тренеров и спортсменов. Мы помогаем достигать целей в комфортной атмосфере, с современным оборудованием и поддержкой наставников.',
                'image' => 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=1200&q=80',
            ]
        );
    }
}
