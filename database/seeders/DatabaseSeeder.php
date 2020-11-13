<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\Subcategory;
use App\Models\Ad;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\User::factory(10)->create();

        /*$this->call([
           // CategorySeeder::class,
            //SubcategorySeeder::class,
            //AdSeeder::class,
            //CitySeeder::class,
            //CityableSeeder::class
        ]);*/

    }
}
