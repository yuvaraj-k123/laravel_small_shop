<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use App\Models\Category;

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
            category::create($row);
        }
        
    }
}
