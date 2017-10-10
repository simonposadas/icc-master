<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WebController extends Controller
{
    public function getType(){
    	$var = DB::table('food_type')->where('status',0)->get();
    	return response()->json($var);
    }
    public function getFood(Request $req){
    	$var = DB::table('food_details')->where('food_type_id',$req->id)->get();
    	return response()->json($var);
    }
    public function checkreq(){
    	if ($_POST['guest'] <= 900 && $_POST['guest'] >= 75) {
    		echo "success";
            return redirect('/Packages')->with('message','Details Success');        
    	} 
        else {
    		echo "fail";
            return redirect('/firstdetails')->with('message','fdgdfgdfg');;
    	}
    	echo $_POST['Date'];
    	echo $_POST['Time'];
    	echo $_POST['guest'];
    	echo $_POST['place'];
    }

    public function CheckCode()
    {
        $code = $_POST["code"];

        $reqDetails = DB::table('reservation_details')
            ->where('reserv_id', $code)
            ->where('status','1')
            ->get();

        return view('credentials2')
            ->with('reqDetails', $reqDetails);
    }

    public function ConfirmCode()
    {
        $code = $_POST["code"];

        $reqDetails = \App\Model\ReservationDetail::find($_POST['code']);
            

        $reqDetails->status = '2';
        $reqDetails->save();
        alert()->success('Successfully confirmed your reservation. Please contact the management.', 'Success')
                ->persistent('Close');

        return redirect('/');
    }

    public function addReserve(){
        // echo $_POST['firstname'];
        $custid = DB::table('customer_info')->insertGetId([
            'cust_fname' => $_POST['inputfirstname'],
            'cust_lname' => $_POST['inputlastname'],
            'gender' => $_POST['gender'],
            'contNo' => $_POST['inputcontactnumber'],
            'email' => $_POST['inputEmail1']
        ]);

        DB::table('reservation_details')->insert([
            'reserv_guestNo' => $_POST['inputnumberofguests'],
            'reserv_date' => $_POST['date'],
            'reserv_time' => $_POST['time'],
            'status' => $_POST['0']
        ]);

        echo "Success";
    }    


    

}