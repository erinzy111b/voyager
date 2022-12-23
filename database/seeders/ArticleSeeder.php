<?php

namespace Database\Seeders;

use App\Models\Article;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate(); //把所有資料清空, 並重置主鍵
        Article::factory()->times(100)->create();

        // Article::factory()->times(5)->create();
    }
}
