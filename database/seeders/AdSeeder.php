<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ad;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ad::create([
            'name' => 'sharan',
            'description' => 'авто в хорошем состоянии свое временное обслуживание весь в родном окрасе максимальная комплектация для данного авто минимальный торг возле авто',
            'price' => '20000',
            'photo' => 'images/sharan.jpg',
            'subcategory_id' => '1',
            'user_id' => '1',
                    ]);

        Ad::create([
            'name' => 'Mercedes E-class W213 2.0d',
            'description' => 'возможен обмен на эвакуатор манипулятор

Учёт Россия,сниму сразу на ваше имя,после личного осмотра,для постановки в РБ,или просто прекращу регистрацию в России,на ваше имя,и катайтесь,без разницы куплен в 2018,все время был 1 владелец,кожа,полный электро пакет,колёса R18,Дизель,9 ступенчатый автомат,дистроник(сама тормозит)камера заднего вида и тд,обслуживался все время у дилера,пробег родной,не бит не крашен.Болячка этого мотора устранена,оригинальными запчастями',
            'price' => '69950',
            'photo' => 'images/mers.jpg',
            'subcategory_id' => '2',
            'user_id' => '2',
        ]);

    Ad::create([
        'name' => 'Продам ситроен ксантиа',
        'description' => 'Простая машина',
        'price' => '4015',
        'photo' => 'images/xant.jpg',
        'subcategory_id' => '3',
        'user_id' => '3',
    ]);

        Ad::create([
        'name' => 'Мопед дельта',
        'description' => 'Продам мопед дельта, в хорошем состоянии, все говорит все мигает, без документов были утеряны, не дымит не троит, 2л на 100к, торг нахожусь в Василевичах речецкий район',
        'price' => '500',
        'photo' => 'images/delta.jpg',
        'subcategory_id' => '4',
        'user_id' => '4',
    ]);

        Ad::create([
            'name' => 'Скутер Хорс моторс',
            'description' => '',
            'price' => '650',
            'photo' => 'images/scoot.jpg',
            'subcategory_id' => '5',
            'user_id' => '5',
        ]);

    }
}
