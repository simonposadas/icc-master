<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class job_Order_Controller extends Controller
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
        $packages = \DB::select("SELECT * from packages_view");
        $packageFood = \DB::select("SELECT * FROM package_food");
        return view('admin/reservation/product_details')
        ->with('packages',$packages)
        ->with('foods',$packageFood);
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
        $E_type = $request->event_type;
        $sched_Date = $request->datepick;
        $sched_Time = $request->reserv_time;
        $guest_Num = $request->reserv_guestNo;
        $place= $request->event_place;


        Session::remove('ReservationCredentials');

        $Credentials = collect([$E_type,$sched_Date,$sched_Time, $guest_Num,$place]);
        //dd($Credentials);
        //anniv,bday,conference,wedding,baptism
        Session::put('ReservationCredentials',$Credentials);

        return redirect()->route('New_reservations.create');


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
