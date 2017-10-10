<?php

namespace App\Http\Requests\Reservation\Equipment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * 
 */
class ReservationEquipmentStoreRequest extends FormRequest {

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
        $reserv_id = $this['reserv_id'];
        return [
            'reserv_id' => 'required|exists:reservation_details',
            'equipment_id' => ['required', Rule::unique('reservation_equipments')->where(function ($query) use($reserv_id) {
                            $query->where('reserv_id', $reserv_id);
                        })
            ],
            'quantity' => 'required'
        ];
    }
    
    /**
     * List of data to be validated
     * @return type
     */
    public function validationData() {
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
        return $this->redirector->to($this->getRedirectUrl())
                        ->withInput($this->except($this->dontFlash))
                        ->withErrors($errors, $this->errorBag)
                        ->with('err_store', 1);
    }

}
