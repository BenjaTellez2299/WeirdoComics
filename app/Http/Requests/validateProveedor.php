<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateProveedor extends FormRequest
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
            'txtEmpresa'=>'required',
            'txtDirreccion'=>'required',
            'txtPais'=>'required',
            'txtContacto'=>'required',
            'txtNumFijo'=>'required |numeric|max:99999999999999',
            'txtNumCelu'=>'required |numeric|max:99999999999999',
            'txtCorreo'=>'required |email|',
        ];
    }
}
