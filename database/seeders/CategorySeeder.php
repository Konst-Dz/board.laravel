<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Автомобили',
            'slug' => 'avto'

        ]);

        Category::create([
            'name' => 'Мототехника',
            'slug' => 'mototehnika'

        ]);

        Category::create([
            'name' => 'Сельхозтехника',
            'slug' => 'agrotehnika'

        ]);

        Category::create([
            'name' => 'Компьютерная техника',
            'slug' => 'komptehnika'

        ]);

        Category::create([
            'name' => 'Бытовая техника',
            'slug' => 'bytotehnika'

        ]);
    }
}
