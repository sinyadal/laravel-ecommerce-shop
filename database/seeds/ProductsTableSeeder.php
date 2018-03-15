<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'name' => 'Laptop ' . $i,
                'slug' => 'laptop-' . $i,
                'details' => [13, 14, 15][array_rand([13, 14, 15])] . ' inch,' . [140, 320, 980][array_rand([140, 320, 980])] . ' GB SSD, 32GB RAM, Nvidia GTX 1080 Ti SLI.',
                'price' => 1000.00,
                'description' => 'Lorem ipsum ' . $i . ', dolor sit amet consectetur adipisicing elit. Architecto voluptatibus corrupti unde fugiat possimus ipsa accusantium magnam velit enim doloribus.',
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            Product::create([
                'name' => 'Desktop ' . $i,
                'slug' => 'desktop-' . $i,
                'details' => [13, 14, 15][array_rand([13, 14, 15])] . ' inch,' . [140, 320, 980][array_rand([140, 320, 980])] . ' GB SSD, 32GB RAM, Nvidia GTX 1080 Ti SLI.',
                'price' => rand(1000.00, 7000.00),
                'description' => 'Lorem ipsum ' . $i . ', dolor sit amet consectetur adipisicing elit. Architecto voluptatibus corrupti unde fugiat possimus ipsa accusantium magnam velit enim doloribus.',
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            Product::create([
                'name' => 'Smartphone ' . $i,
                'slug' => 'smartphone-' . $i,
                'details' => [13, 14, 15][array_rand([13, 14, 15])] . ' inch,' . [140, 320, 980][array_rand([140, 320, 980])] . ' GB SSD, 32GB RAM, Nvidia GTX 1080 Ti SLI.',
                'price' => rand(500.00, 1000.00),
                'description' => 'Lorem ipsum ' . $i . ', dolor sit amet consectetur adipisicing elit. Architecto voluptatibus corrupti unde fugiat possimus ipsa accusantium magnam velit enim doloribus.',
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            Product::create([
                'name' => 'PC ' . $i,
                'slug' => 'pc-' . $i,
                'details' => [13, 14, 15][array_rand([13, 14, 15])] . ' inch,' . [140, 320, 980][array_rand([140, 320, 980])] . ' GB SSD, 32GB RAM, Nvidia GTX 1080 Ti SLI.',
                'price' => 100.00,
                'description' => 'Lorem ipsum ' . $i . ', dolor sit amet consectetur adipisicing elit. Architecto voluptatibus corrupti unde fugiat possimus ipsa accusantium magnam velit enim doloribus.',
            ]);
        }
    }
}
