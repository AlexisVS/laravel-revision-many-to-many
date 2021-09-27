<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use App\Models\Tag_article;
use Database\Factories\User_tagFactory;
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
        // \App\Models\User::factory(10)->create();
        $this->call([
            TagSeeder::class
        ]);

        // Tag_article::factory()->hasAttached(
        //     Article::factory()->count(1)
        // )
        //     ->state(function (array $attributes, Article $article) {
        //         return [
        //             'tag_id' => Tag::all()->random()->id,
        //             'article_id' => $article->id,
        //         ];
        //     })
        //     ->count(10)
        //     ->create();

        Tag_article::factory()->count(20)->create();
    }
}
