<?php

namespace Database\Seeders;

use App\Models\Cgy;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CgySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cgy::truncate(); //把所有資料清空, 並重置主鍵
        // $faker = Factory::create('zh_TW');
        Cgy::factory()->times(10)->create();
    }
}