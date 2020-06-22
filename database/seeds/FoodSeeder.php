<?php

use App\Food;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function addFood($name, $protein, $carbohydrate, $fat, $calories)
    {
        $food = new Food();
        $food->food_name = $name;
        $food->protein = $protein;
        $food->carbohydrate = $carbohydrate;
        $food->fat = $fat;
        $food->calories = $calories;
        $food->save();
    }
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Food::truncate();
        
        //FOOD DATA, ONLY ADMIN CAN CHANGE THIS IN WEBSITE
        
        self::addFood("Egg", 13, 1.1, 11, 155);
        self::addFood("Bread", 9, 49, 3.2, 264);
        self::addFood("Butter", 0.9, 0.1, 81, 716);
        self::addFood("Sausage", 12, 2, 27, 300);
        self::addFood("Pasta (Generic)", 5, 25, 1.1, 131);
        self::addFood("Bread (wholemeal)", 13, 41, 3.4, 247);
        self::addFood("Cheese (cheddar)", 25, 1.3, 33, 402);
    }
}
