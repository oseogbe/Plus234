<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                "name" => "arts and entertainment",
                "slug" => "ae"
            ],
            [
                "name" => "business and networking",
                "slug" => "bn"
            ],
            [
                "name" => "charities and non-profit",
                "slug" => "cn"
            ],
            [
                "name" => "conference and seminars",
                "slug" => "cs"
            ],
            [
                "name" => "fashion show",
                "slug" => "fs"
            ],
            [
                "name" => "food and drink",
                "slug" => "fd"
            ],
            [
                "name" => "games and tournaments",
                "slug" => "gt"
            ],
            [
                "name" => "health and wellness",
                "slug" => "hw"
            ],
            [
                "name" => "outdoor and recreational",
                "slug" => "or"
            ],
            [
                "name" => "party and festival",
                "slug" => "pf"
            ],
        ];

        Category::truncate();

        Category::insert($categories);

    }
}
