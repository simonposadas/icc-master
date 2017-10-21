<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    //
    public $timestamps = false;
    
    protected $table = "food_recipe";
    protected $primaryKey = "food_id";
}
