<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProductsTableSeeder::class,
            CategoriesTableSeeder::class,
            // Relay -> php artisan make:migration create_category_product_table --create=category_product, Relay
        ]);
    }
}
