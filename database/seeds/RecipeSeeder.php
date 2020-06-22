<?php

use Illuminate\Database\Seeder;
use App\Recipe;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function addRecipe($recipe_name, $user_id, $eaten_count)
    {
        $recipe = new Recipe();
        $recipe->recipe_name = $recipe_name;
        $recipe->user_id = $user_id;
        $recipe->eaten_count = $eaten_count;
        $recipe->save();
    }
    public function run()
    {
        self::addRecipe('Easy breakfast', 2, 0);
        self::addRecipe('Fast prep', 2, 1);
        self::addRecipe('Lunch shake', 3, 5);
        self::addRecipe('Original recipe', 3, 0);
        self::addRecipe('Stomach grinder', 5, 10);
        self::addRecipe('Milkshake', 6, 3);
    }
}
