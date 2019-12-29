<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Enscours extends FormRequest
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
            'Nom'=>'required','Cours'=>'required'
        ];
    }

       /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'Nom.required' => 'Le Nom est nécessaire.',
            'Cours.required'  => 'Le Cours est nécessaire.',
   
        ];
    }
}
