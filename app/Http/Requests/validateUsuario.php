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
            'txtNoEmpleado'=>'numeric|digits_between:2,8|required',
            'txtContra'=>'min:8|required',
            'txtTurno'=>'max:20|required',
            'txtRol'=>'max:25|required',
            'txtFechaNaci'=>'date|required',
           
        ];
    }
}
