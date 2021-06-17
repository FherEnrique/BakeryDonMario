<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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

    public function rules()
    {
        return [
            'name' => 'required',
            'amount' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El ::attribute es requerido'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre del cliente'
        ];
    }
}
