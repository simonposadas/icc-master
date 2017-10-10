<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ReservationDetail;

/**
 * 
 */
class CheckCredentialController extends Controller {

    /**
     * View directory
     * @var type 
     */
    protected $view = 'credential.';

    /**
     * Landing page
     * @return type
     */
    public function index() {
        return view($this->view . 'index');
    }

    /**
     * Check the reservation code 
     * @param \App\Http\Requests\Reservation\ReservationIdRequest $request
     * @return type
     */
    public function checkCode(\App\Http\Requests\Reservation\ReservationIdRequest $request) {
        return view($this->view . 'check_code', ['reservation_detail' => ReservationDetail::find($request->reserv_id)]);
    }

    /**
     * Confirms the reservation
     * @param \App\Http\Requests\Reservation\ReservationIdRequest $request
     * @return type
     */
    public function confirm(\App\Http\Requests\Reservation\ReservationIdRequest $request) {
        if (ReservationDetail::find($request->reserv_id)->update(['status' => 3])) {
            alert()->success('Successfully confirmed your reservation. Please contact the management.', 'Success')
                    ->persistent('Close');
        } else {
            alert()->error('Something went wrong.. Please try again.', 'Failed')
                    ->persistent('Close');
        }
        return redirect('/');
    }
    
    /**
     * Cancel the reservation
     * @param \App\Http\Requests\Reservation\ReservationIdRequest $request
     * @return type
     */
    public function cancel(\App\Http\Requests\Reservation\ReservationIdRequest $request) {
        if (ReservationDetail::find($request->reserv_id)->update(['status' => 4])) {
            alert()->success('Successfully canceled your reservation.', 'Success')
                    ->persistent('Close');
        } else {
            alert()->error('Something went wrong.. Please try again.', 'Failed')
                    ->persistent('Close');
        }
        return redirect('/');
    }

}
