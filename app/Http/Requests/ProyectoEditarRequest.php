<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoEditarRequest extends FormRequest
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
            'id'             => 'required|numeric|digits_between:0,10',
            'nombre'         => 'required|regex:/^[\pL\s\-]+$/u|max:50',
            'descripcion'    => 'required|regex:/^[\pL\s\-\,\.\;\:]+$/u|max:240',
            'requisitos'     => 'required|regex:/^[\pL\s\-\,\.\;\:]+$/u|max:240',
            'inicio'         => 'required',
            'fin'            => 'required',
            'responsable'    => 'required|regex:/^[\pL\s\-]+$/u|max:45',
            'pdf'            => 'required|max:5000',
            'repositorio'    => 'required|max:80',
        ];
    }
    public function messages()  
    {
        return[
            'id.required'                => 'El código es Obligatorio',
            'id.numeric'                 => 'El código debe ser numérico',
            'id.digits_between'          => 'El código no puede ser mayor a 10 digitos',

            'nombre.required'            => 'El Nombre es Obligatorio',
            'nombre.regex'               => 'El Nombre no permite números',
            'nombre.max'                 => 'El Nombre no debe de exceder los 50 caracteres',

            'descripcion.required'       => 'La Descripciòn es Obligatoria',
            'descripcion.regex'          => 'La Descripciòn no permite números',
            'descripcion.max'            => 'La Descripciòn no debe de exceder los 240 caracteres',
            
            'requisitos.required'        => 'Los Requisitos son Obligatorio',
            'requisitos.regex'           => 'Los Requsitos no permite números',
            'requisitos.max'             => 'Los Requisitos no debe de exceder los 240 caracteres',

            'inicio.required'            => 'El Inicio es Obligatorios',

            'fin.required'               => 'El Fin es Obligatorio',

            'responsable.required'       => 'El responsable es Obligatorio',
            'responsable.regex'          => 'El responsable no permite números',
            'responsable.max'            => 'El responsable no debe de exceder de los 45 caracteres',

            'pdf.required'               => 'El pdf es Obligatorio',
            'pdf.max'                    => 'El pdf no debe de exceder de los 5 Mega bytes',

            'repositorio.required'       => 'El repositorio es Obligatorio',
            'repositorio.max'            => 'El repositorio no debe de exceder de los 80 caracteres',
        ];
    }
}
