<?php

namespace App\Http\Requests\Reservation;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 
 */
class PackageTypeIdRequest extends FormRequest {

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
            'id' => 'required|exists:package_type'
        ];
    }
    
    /**
     * 
     * @return typeData to be validated
     */
    public function validationData(){
        $this['id'] = $this->id;
        return $this->all();
    }

    /**
     * Get the proper failed validation response for the request.
     *
     * @param  array  $errors
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function response(array $errors) {
        alert()->info('Package menu does not exists!', 'Wait...')->persistent('Close');
        return redirect()->back();
    }

}
