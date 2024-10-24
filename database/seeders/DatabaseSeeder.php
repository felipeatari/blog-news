<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\News;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        News::factory(90)->create();

        News::all()->each(function(News $news) {

            $random = random_int(1, 5);

            for ($i = 0; $i <= $random; $i++):
                Comment::factory()->create(['news_id' => $news->id]);
            endfor;
        });
    }
}
