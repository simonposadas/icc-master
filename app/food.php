<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    //
    public $timestamps = false;

    protected $table = "food_details";
    protected $primaryKey = "food_id";
}
