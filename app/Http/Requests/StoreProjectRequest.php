<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:100',
            'description' => 'required|max:5000'
        ];
    }
    public function messages(){
        return[
            'title.required' => 'Titolo obbligatorio',
            'title.max' => 'Ammessi massimo 100 caratteri',
            'description.max' => 'Lunghezza massima della descrizione di 5000 caratteri',

        ];
    }

}
