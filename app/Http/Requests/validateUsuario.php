<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateUsuario extends FormRequest
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
            //
            'txtNomb'=>'required',
            'txtNoEmpleado'=>'required |numeric|max:99999999999999',
            'txtContra'=>'required',
            'txtTurno'=>'required',
            'txtRol'=>'required ',
            'txtFechaNaci'=>'required |date|',
           
        ];
    }
}