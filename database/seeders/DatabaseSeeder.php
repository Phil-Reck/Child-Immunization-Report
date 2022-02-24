<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostVote;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
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
        Product::create([
            'vaccine' => 'Covid-19',
            'children' => 1921,
        ]);
        Product::create([
            'vaccine' => 'TB',
            'children' => 499,
        ]);
        Product::create([
            'vaccine' => 'Measles',
            'children' => 109999,
        ]);
        Product::create([
            'vaccine' => 'Skin rush',
            'children' => 1999,
        ]);
    }
}
