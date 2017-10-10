<?php

namespace App\Http\Requests\Reservation;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * 
 */
class ValidateDetailsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'event_type' => ['required', Rule::in(['wedding', 'conference', 'bday', 'baptism', 'anniv'])],
            'reserv_date' => 'required|date',
            'reserv_time' => 'required',
            'reserv_guestNo' => 'required',
            'event_place' => 'required'
        ];
    }
}
