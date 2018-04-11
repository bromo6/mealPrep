<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public function recipe()
    {
        return $this->hasOne('App\Recipe', 'id', 'recipe_id');
    }
}
