<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // App\Models\User::factory(10)->create();
            Product::factory(10)->create();
        // Product::create([
        //     'name' => 'bajaj',
        //     'tag' => 'baj',
        //     'description' => 'this 3leaged auto vicheal',
        //     'price' => 98000,
        // ]);

        // Product::create([
        //     'name' => 'suzuki',
        //     'tag' => 'suz',
        //     'description' => 'this 4legged auto vicheal',
        //     'price' => 1000000,
        // ]);
    }
}
