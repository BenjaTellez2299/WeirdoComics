<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateComics extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'txtNombre'=>'max:255|required', 
            'txtEdicion'=>'numeric|max:99|required',
            'txtCompany'=>'max:255|required',
            'txtCantidad'=>'numeric|required',
            'txtPreCompra'=>'numeric|required',
            'txtProveedor'=>'max:255|required'
        ];
    }
}
