<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;
use App\Recipe;

class SearchController extends Controller
{
    public function main(Request $request)
    {
        $this->validate($request, [
            'calories' => 'required'
        ]);
        $recipe = Recipe::all();
        $recipeCount = count($recipe);
        unset($recipe);
        $recipe;
        
        $difference = 1;
        $counter = 1;
        while(empty($recipe))
        {
            $amount =0; $calories=0; $protein=0; $carbohydrate=0; $fat=0;
            $recipe = Recipe::find($counter);
            foreach($recipe->foods as $food)
            {
                $m = ($food->pivot->amount)/100;
                
                $amount += $food->pivot->amount;
                $calories += ($food->calories)*$m;
                $protein += ($food->protein)*$m;
                $carbohydrate += ($food->carbohydrate)*$m;
                $fat += ($food->fat)*$m;
            }
        if(($request->calories)+$difference > $amount || ($request->calories)-$difference < $amount)
        {
            return redirect()->route('recipe.show', $recipe->id);
        }
        unset($recipe);
        $recipe;
        if($counter >= $recipeCount)
        {
            $difference += 5;
            $counter = 0;
        }
            $counter++;
        }
        return redirect('/')->with('success', 'Search sent');
    }
    
    public function browse()
    {
        $recipes = Recipe::all();
        return view('browse')->with('recipes', $recipes);
    }
    public function search(Request $request)
    {
        return view('search');
    }
}
