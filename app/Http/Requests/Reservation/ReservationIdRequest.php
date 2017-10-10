<?php

namespace App\Http\Requests\Reservation;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 
 */
class ReservationIdRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'reserv_id' => 'required|exists:reservation_details',
        ];
    }
    
    /**
     * Populate list of data
     * @return type
     */
    public function validationData(){
        $this['reserv_id'] = $this->reserv_id;
        return $this->all();
    }
    
    /**
     * Get the proper failed validation response for the request.
     *
     * @param  array  $errors
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function response(array $errors) {
        alert()->info('Reservation does not exists!', 'Wait...')->persistent('Close');
        return redirect()->back();
    }
}
