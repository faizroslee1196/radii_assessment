<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition(): array
    {
        $title = fake()->sentence(6);

        return [
            'title' => $title,
            'summary' => fake()->text(180),
            'body' => fake()->paragraphs(5, true),
            'published_at' => fake()->dateTimeBetween('-3 months', 'now'),
            'permalink' => Str::slug($title).'-'.Str::uuid(),
            'author' => fake()->name(),
            'status' => 'published',
        ];
    }
}