<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeIngredient extends Model
{
    public $timestamps = false;

    public function recipe()
    {
        return $this->hasOne('App\Recipe', 'id', 'recipe_id');
    }

    public function ingredient()
    {
        return $this->hasOne('App\Ingredient', 'id', 'ingredients_id');
    }
}
