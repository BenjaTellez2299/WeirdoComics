<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateComics extends FormRequest
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
            'txtNombre'=>'max:255|required', 
            'txtEdicion'=>'numeric|max:99|required',
            'txtCompany'=>'max:255|required',
            'txtCantidad'=>'numeric|required',
            'txtPreCompra'=>'numeric|required',
            'txtPreVenta'=>'numeric|required',
            'txtFecha'=>'date|required',
            'txtProovedor'=>'max:255|required'
        ];
    }
}
