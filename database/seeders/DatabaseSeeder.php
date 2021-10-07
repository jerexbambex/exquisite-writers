<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Arr;
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
        $categories = Category::factory(10)->create();
        $categoryIds = [];
        foreach ($categories as $category) {
            array_push($categoryIds, $category->id);
        }

        $blogs = Blog::factory(50)->create();

        foreach ($blogs as $blog) {
            $blog->categories()->attach(Arr::random($categoryIds, 2));
        }
    }
}
