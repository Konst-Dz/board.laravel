<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name' => 'Гомель',
        ]);

        City::create([
            'name' => 'Минск',
        ]);

        City::create([
            'name' => 'Витебск',
        ]);

        City::create([
            'name' => 'Гродно',
        ]);

        City::create([
            'name' => 'Брест',
        ]);

        City::create([
            'name' => 'Могилев',
        ]);
    }


}
