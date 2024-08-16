<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
//use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(3)->create();
        User::factory()->create([
            'name' => 'Ravi',
            'email' => 'ravi@example.com',
            'password' => 'password'
        ]);

        User::factory()->create([
            'name' => 'Anita',
            'email' => 'anita@example.com',
            'password' => 'password'
        ]);

        User::all()->each(function($user){
            Product::factory(10)->create([
                'user_id' => $user->id
            ]);
        });
        $cat_array = ['men', 'women', 'kids', 'summer', 'winter', 'monsoon'];
        foreach ($cat_array as $val) {
            Category::factory()->create(['name' => $val]);
        }

        //$products = Product::all();

        $categories = Category::all()->each( function($category) {
            $products = Product::inRandomOrder()->limit(10)->get()->pluck('id');
            $category->products()->attach($products);
            //$category->products()->attach()
        });


        


    }
}
