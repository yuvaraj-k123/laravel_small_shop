<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);

        $categories = [
            [
                'name' => 'Fresh Produce'
            ],
            [
                'name' => 'Dairy and Eggs'
            ],
            [
                'name' => 'Bakery'
            ],
            [
                'name' => 'Meat and Seafoods'
            ]
        ];

        foreach ($categories as $row) {
            Category::create($row);
        }
        
        $brands = [
            [
                'name' => 'HP'
            ],
            [
                'name' => 'DELL'
            ],
            [
                'name' => 'Intel'
            ],
            [
                'name' => 'acer'
            ],
        ];

        foreach ($brands as $row) {
            Brand::create($row);
        }

        $products = [
            [
                'brand_id' => 1,
                'category_id' => 1,
                'name' => 'hp',
                'description' => 'laptop',
                'qty' => 200,
                'alert_stock' => 20
            ],
        ];

        foreach ($products as $row) {
            Product::create($row);
        }

    }
}
