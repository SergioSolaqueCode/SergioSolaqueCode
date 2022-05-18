<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
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
        return 
        [
            "nombre" => 'required|alpha',
            "desc" => 'required|max:100',
            "precio" => 'required|numeric|max:10000',
            "marca" => 'required',
            "categoria" => 'required'
        ];
    }

    /*mensajes personalizados*/

    public function messages()
    {
        return
        [
            'required' => 'Campo Obligatorio',
            'alpha' => 'Solo letras',
            'max' => 'máximo :max carácteres',
            'numeric' => 'Solo números',
        ];
    }


}
