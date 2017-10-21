<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Food_Creator_Controller extends Controller
{
    //
    public function createFood(){
    	$recipe = \DB::select("Select * from recipe_list_tbl");
    	$types = \DB::select("Select * FROM food_type");
        //dd($recipe);
        // $cart = Cart::instance('Recipes')->content();
    	return view('admin/reservation/creation_Of_Food')
		        ->with('recipe',$recipe)
		        ->with('types',$types);
    }

    public function addRecipe(){
    	$recipe = \DB::select("Select * from recipe_list_tbl");
        //dd($recipe);
        
    	return view('admin/reservation/creation_Of_Food')
		        ->with('recipe',$recipe)
		        ;
		        
    }
}
