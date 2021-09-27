<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Article_tag;
use App\Models\Tag;
use Database\Factories\ArticleTagFactory;
use Illuminate\Database\Eloquent\Factories\Sequence;
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

        \App\Models\Article_tag::factory()->count(20)->create();

        \App\Models\Article_tag::factory()->count(50)
            ->state(new Sequence(
                function ($sequence) {
                    return [
                        'tag_id' => Tag::all()->random()->id,
                        'article_id' => Article::all()->random()->id,
                    ];
                }
            ))
            ->create();
    }
}
