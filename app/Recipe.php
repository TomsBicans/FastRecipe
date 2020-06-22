<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';
    
    // Ēdieni, ko satur noteiktā recepte
    public function foods()
    {
        return $this->belongsToMany('App\Food' , 'recipe_food')
                ->withPivot('amount')
                ->withTimestamps();
    }
}
