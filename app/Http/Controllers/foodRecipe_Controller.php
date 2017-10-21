<?php

namespace App\Http\Controllers;
use App\recipe;
use App\food;
use \Cart;
use Illuminate\Http\Request;

class foodRecipe_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //
        $food = new food;
        $food->food_name = $request->name;
        $food->food_type_id = $request->type;

        $food->price = str_replace(',','',Cart::instance('Recipes')->subtotal());
         $food->save();

         foreach(Cart::instance('Recipes')->content() as $row){
            $recipe = new recipe;
            $recipe->food_Product_ID = $food->food_id; 
            $recipe->recipe_id = $row->id; 
            $recipe->unit_cost = $row->price; 
            $recipe->price_sold = $row->price; 
            $recipe->qty = $row->qty;
            $recipe->save();
         }
         Cart::instance('Recipes')->destroy();
         return redirect()->route('admin/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
