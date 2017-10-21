<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Cart;
use Session;


class recipeAddingController extends Controller
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

        if($request->ajax())
        {
            $quantity = $request->get('quantity');
            $id = $request->get('id');
            $price = $request->get('price');
            $name = $request->get('name');
            $sellingprice = $request->get('sellingprice');

            $items = collect([$id,$quantity,$name,$price,$sellingprice]);
            //Session::put('Recipes',$items);

            Cart::instance('Recipes')->add(['id'=>$id,'name'=>$name,'qty'=>$quantity,'price'=>$price,'options'=>[]]);
            return json_encode('success');   
        }


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
