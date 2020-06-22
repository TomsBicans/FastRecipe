<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FoodSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RecipeSeeder::class);
        $this->call(RecipeFoodSeeder::class);
        $this->call(FoodsEatenSeeder::class);
    }
}
