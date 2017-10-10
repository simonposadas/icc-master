<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class WorkerIdRequest extends FormRequest
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
            'worker_id' => 'required|exists:worker'
        ];
    }
    
    /**
     * Populate list of data
     * @return type
     */
    public function validationData(){
        $this['worker_id'] = $this->worker_id;
        return $this->all();
    }
    
    /**
     * Get the proper failed validation response for the request.
     *
     * @param  array  $errors
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function response(array $errors) {
        alert()->info('Worker does not exists!', 'Wait...')->persistent('Close');
        return redirect()->back();
    }
}
