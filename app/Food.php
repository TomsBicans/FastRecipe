<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'food';
    
    //Kuras receptes satur noteikto ēdienu
    public function recipes()
    {
        return $this->belongsToMany('App\Recipe', 'recipe_food')
                ->withPivot('amount')
                ->withTimestamps();
    }
}
