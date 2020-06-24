<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\Food;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $foods = Food::all('food_name', 'protein', 'carbohydrate', 'fat', 'calories');
        /*
        $compactFoods = [];
        foreach($foods as $food)
        {
            $compactFoods[$food->food_name] => array(
                'food_name' => $food->food_name, 
                'protein' => $food->protein,
                'carbohydrate' => $food->carbohydrate,
                'fat' => $food->fat,
                'calories' => $food->calories)
        }
         */
        return view('recipecreate')->with('foods', $foods);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'recipe_name' => 'required|min:2|max:50'
        );
        $this->validate($request, $rules);
        
        $recipe = new Recipe();
        $recipe->recipe_name = $request->recipe_name;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$recipe = DB::table('recipes')->find($id);
        //if(count($recipe) == 1)
           return view('recipe', array('recipe' => Recipe::findOrFail($id)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
