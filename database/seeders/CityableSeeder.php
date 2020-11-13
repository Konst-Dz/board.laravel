<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('cityables')->insert([

            'city_id' => 1,
            'cityable_id' => 1,
            'cityable_type' => '\App\Models\Ad',
        ]);

        DB::table('cityables')->insert([

            'city_id' => 2,
            'cityable_id' => 2,
            'cityable_type' => '\App\Models\Ad',
        ]);

        DB::table('cityables')->insert([

            'city_id' => 3,
            'cityable_id' => 3,
            'cityable_type' => '\App\Models\Ad',
        ]);

        DB::table('cityables')->insert([

            'city_id' => 4,
            'cityable_id' => 4,
            'cityable_type' => '\App\Models\Ad',
        ]);

        DB::table('cityables')->insert([

            'city_id' => 5,
            'cityable_id' => 5,
            'cityable_type' => '\App\Models\Ad',
        ]);

        DB::table('cityables')->insert([

            'city_id' => 6,
            'cityable_id' => 6,
            'cityable_type' => '\App\Models\Ad',
        ]);
    }
}
