<?php

use Illuminate\Database\Seeder;
use App\RecipeFood;

class RecipeFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function addRecipeFood($recipeID, $foodID, $amount)
    {
        $recipefood = new RecipeFood();
        $recipefood->recipe_id = $recipeID;
        $recipefood->food_id = $foodID;
        $recipefood->amount = $amount;
        $recipefood->save();
    }
    public function run()
    {
        self::addRecipeFood(1, 1, 50);
        self::addRecipeFood(1, 2, 100);
        self::addRecipeFood(1, 3, 50);
        self::addRecipeFood(1, 4, 50);
        
        self::addRecipeFood(2, 1, 200);
        
        self::addRecipeFood(3, 2, 100);
        self::addRecipeFood(3, 7, 100);
        
        self::addRecipeFood(4, 4, 150);
        self::addRecipeFood(4, 6, 100);
        self::addRecipeFood(4, 7, 50);
        
        self::addRecipeFood(5, 3, 150);
        self::addRecipeFood(5, 4, 150);
        self::addRecipeFood(5, 6, 150);
        self::addRecipeFood(5, 7, 50);
        
        self::addRecipeFood(6, 1, 50);
        self::addRecipeFood(6, 2, 50);
        self::addRecipeFood(6, 3, 50);
        self::addRecipeFood(6, 4, 50);
        self::addRecipeFood(6, 5, 50);
        self::addRecipeFood(6, 6, 50);
        self::addRecipeFood(6, 7, 50);
    }
}
