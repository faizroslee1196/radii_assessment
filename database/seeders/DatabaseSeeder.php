<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categoryNames = [
            'Technology',
            'Sports',
            'Travel',
            'Food',
            'Gaming'
        ];

        foreach ($categoryNames as $name) {
            $category = Category::where('name', $name)->first();

            if ($category == null) {
                $category = new Category();
                $category->name = $name;
                $category->save();
            }

            Article::factory()->count(4)->for($category)->create();
        }
    }
}
