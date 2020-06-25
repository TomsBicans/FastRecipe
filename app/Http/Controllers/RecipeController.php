<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
        $foods = Food::all('id','food_name', 'protein', 'carbohydrate', 'fat', 'calories');
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
        
        $data = $request->except('_token');
        $foodamounts = $request->input('foodamounts'); 
        $rules = array(
            'recipe_name' => 'required|min:2|max:50'
        );
        $this->validate($request, $rules);
        
        $recipe = new Recipe();
        
        $recipe->recipe_name = $request->recipe_name;
        $recipe->user_id = Auth::id();
        $recipe->save();
        
        for($i = 0; $i<$foodamounts; $i++)
        {
            $recipe->foods()->attach([$request->input('food')[$i] =>  ['amount' => $request->input('foodamount')[$i]]]);
        }
        return redirect()->route('recipe.show', $recipe->id);
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
