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
        Product::create([
            'name' => 'Laptop 1',
            'slug' => 'laptop-1',
            'details' => 'Lorem ipsum dolor sit amet.',
            'price' => 4401,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto voluptatibus corrupti unde fugiat possimus ipsa accusantium magnam velit enim doloribus.',
        ]);

        Product::create([
            'name' => 'Laptop 2',
            'slug' => 'laptop-2',
            'details' => 'Lorem ipsum dolor sit amet.',
            'price' => 4401,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto voluptatibus corrupti unde fugiat possimus ipsa accusantium magnam velit enim doloribus.',
        ]);

        Product::create([
            'name' => 'Laptop 3',
            'slug' => 'laptop-3',
            'details' => 'Lorem ipsum dolor sit amet.',
            'price' => 4401,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto voluptatibus corrupti unde fugiat possimus ipsa accusantium magnam velit enim doloribus.',
        ]);

        Product::create([
            'name' => 'Laptop 4',
            'slug' => 'laptop-4',
            'details' => 'Lorem ipsum dolor sit amet.',
            'price' => 4401,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto voluptatibus corrupti unde fugiat possimus ipsa accusantium magnam velit enim doloribus.',
        ]);

        Product::create([
            'name' => 'Laptop 5',
            'slug' => 'laptop-5',
            'details' => 'Lorem ipsum dolor sit amet.',
            'price' => 4401,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto voluptatibus corrupti unde fugiat possimus ipsa accusantium magnam velit enim doloribus.',
        ]);

        Product::create([
            'name' => 'Laptop 6',
            'slug' => 'laptop-6',
            'details' => 'Lorem ipsum dolor sit amet.',
            'price' => 4401,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto voluptatibus corrupti unde fugiat possimus ipsa accusantium magnam velit enim doloribus.',
        ]);

        Product::create([
            'name' => 'Laptop 7',
            'slug' => 'laptop-7',
            'details' => 'Lorem ipsum dolor sit amet.',
            'price' => 4401,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto voluptatibus corrupti unde fugiat possimus ipsa accusantium magnam velit enim doloribus.',
        ]);

        Product::create([
            'name' => 'Laptop 8',
            'slug' => 'laptop-8',
            'details' => 'Lorem ipsum dolor sit amet.',
            'price' => 4401,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto voluptatibus corrupti unde fugiat possimus ipsa accusantium magnam velit enim doloribus.',
        ]);

        Product::create([
            'name' => 'Laptop 9',
            'slug' => 'laptop-9',
            'details' => 'Lorem ipsum dolor sit amet.',
            'price' => 4401,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto voluptatibus corrupti unde fugiat possimus ipsa accusantium magnam velit enim doloribus.',
        ]);
    }
}
