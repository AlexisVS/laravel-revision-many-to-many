<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Article_tag;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class Article_tagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article_tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tag_id' => $this->faker->numberBetween(1, Tag::all()->count()),
            'article_id' => Article::factory()
        ];
    }
}
