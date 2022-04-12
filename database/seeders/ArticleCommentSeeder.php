<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use App\Models\ArticleComment;

class ArticleCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::factory()
            ->count(100)
            ->create();
    }
}
