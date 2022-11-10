<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateArticulo extends FormRequest
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
            'txtTipo'=>'required',
            'txtMarca'=>'required',
            'txtDescripcion'=>'required',
            'txtCantidad'=>'numeric|required',
            'txtPrecioCom'=>'numeric|required',
            'txtPreVenta'=>'numeric|required',
            'txtFechaIngre'=>'date|required',
            'txtProveedor'=>'required',
        ];
    }
}
