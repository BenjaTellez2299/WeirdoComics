<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateProveedor extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'txtEmpresa'=>'required',
            'txtDireccion'=>'required',
            'txtPais'=>'required',
            'txtContacto'=>'required',
            'txtNumFijo'=>'numeric|digits_between:10,13|required',
            'txtNumCelu'=>'numeric|digits_between:10,13|required',
            'txtCorreo'=>'email|required'
        ];
    }
}
