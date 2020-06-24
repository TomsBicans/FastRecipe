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
