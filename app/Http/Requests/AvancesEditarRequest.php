<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvancesEditarRequest extends FormRequest
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
        return [
            'Registro_id'         => 'required|numeric|exists:Proyecto,id',
            'descripcion'         => 'required|regex:/^[\pL\s\-\,\.\;\:]+$/u|max:240',
            'fecha'               => 'required',
            'reportes'            => 'required|max:5000',
            'url'                 => 'required|max:80',
        ];
    }
    public function messages()  
    {
        return[
            'Registro_id.required'         => 'El código es Obligatorio',
            'Registro_id.numeric'          => 'El código debe ser numérico',
            'Registro_id.exists'           => 'El código no se encuentra en la base de datos',

            'descripcion.required'         => 'La Descripciòn es Obligatoria',
            'descripcion.regex'            => 'La Descripciòn no permite números',
            'descripcion.max'              => 'La Descripciòn no debe de exceder los 240 caracteres',

            'fecha.required'               => 'La Fecha es Obligatorios',
            'reportes.required'            => 'El Reporte es Obligatorio',
            'reportes.max'                 => 'El Reporte no debe de exceder de los 5 Mega bytes',

            'url.required'                 => 'La URL es Obligatorio',
            'url.max'                      => 'La URL no debe de exceder de los 80 caracteres',
        ];
    }
}
