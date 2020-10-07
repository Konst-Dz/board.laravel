<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;


class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategory::create([
            'name' => 'Минивены',
            'category_id' => '1',
            'slug' => 'miniveny',

        ]);

        Subcategory::create([
            'name' => 'Седаны',
            'category_id' => '1',
            'slug' => 'sedany',

        ]);

        Subcategory::create([
            'name' => 'Хэтчбэки',
            'category_id' => '1',
            'slug' => 'hatchbeky',

        ]);

        Subcategory::create([
            'name' => 'Мопеды',
            'category_id' => '2',
            'slug' => 'mopedy',

        ]);

        Subcategory::create([
            'name' => 'Скутеры',
            'category_id' => '2',
            'slug' => 'skutery',

        ]);

        Subcategory::create([
            'name' => 'Мотоциклы',
            'category_id' => '2',
            'slug' => 'motocykly',

        ]);

        Subcategory::create([
            'name' => 'Мотоблоки',
            'category_id' => '3',
            'slug' => 'motobloki',

        ]);

        Subcategory::create([
            'name' => 'Тримеры',
            'category_id' => '3',
            'slug' => 'trimery',

        ]);

        Subcategory::create([
            'name' => 'Бензопилы',
            'category_id' => '3',
            'slug' => 'benzopily',

        ]);

        Subcategory::create([
            'name' => 'Ноутбуки',
            'category_id' => '4',
            'slug' => 'noutbuki',

        ]);

        Subcategory::create([
            'name' => 'Компьютеры',
            'category_id' => '4',
            'slug' => 'compjutery',

        ]);

        Subcategory::create([
            'name' => 'Планшеты',
            'category_id' => '4',
            'slug' => 'planshety',

        ]);

        Subcategory::create([
            'name' => 'Газплиты',
            'category_id' => '5',
            'slug' => 'gazplity',

        ]);

        Subcategory::create([
            'name' => 'Телевизоры',
            'category_id' => '5',
            'slug' => 'televisory',

        ]);

        Subcategory::create([
            'name' => 'Холодильники',
            'category_id' => '5',
            'slug' => 'holodilniki',

        ]);
    }
}
