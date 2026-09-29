<?php

namespace Database\Seeders;

use App\Models\ContactInfo;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'label' => 'Адрес',
                'value' => 'ул. Ямская, 2, Сергиев Посад',
                'icon' => 'map-pin',
                'sort_order' => 1,
            ],
            [
                'label' => 'Телефон',
                'value' => '+7 (495) 123-45-67',
                'icon' => 'phone',
                'sort_order' => 2,
            ],
            [
                'label' => 'Email',
                'value' => 'info@ironcore-fit.ru',
                'icon' => 'envelope',
                'sort_order' => 3,
            ],
        ];

        foreach ($contacts as $contact) {
            ContactInfo::query()->updateOrCreate(
                ['sort_order' => $contact['sort_order']],
                $contact
            );
        }
    }
}
