<?php

namespace App\Http\Requests\Reservation;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 
 */
class StoreRequest extends FormRequest {

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
            'id' => 'required|exists:package_type',
            'package_id' => 'required|exists:package_food',
            'reserv_guestNo' => 'required',
            'reserv_date' => 'required',
            'reserv_time' => 'required',
            'cust_budget' => 'required',
            'cust_fname' => 'required',
            'cust_lname' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'contNo' => 'required',
            'email' => 'required|email'
        ];
    }
    
    /**
     * Populate list of data
     * @return type
     */
    public function validationData(){
        $this['id'] = $this->id;
        $this['package_id'] = $this->package_id;
        return $this->all();
    }
}
