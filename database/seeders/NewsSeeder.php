<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsCategory; // Import đúng namespace
use App\Models\News; // Import đúng namespace

class NewsSeeder extends Seeder
{
    public function run()
    {
        $categories = NewsCategory::all();

        foreach ($categories as $category) {
            for ($i = 1; $i <= 5; $i++) {
                News::create([
                    'title' => "Sample News $i in {$category->name}",
                    'content' => "This is the content for Sample News $i in {$category->name}.",
                    'category_id' => $category->id,
                    'views' => rand(0, 100),
                    'is_featured' => rand(0, 1) == 1,
                ]);
            }
        }
    }
}



