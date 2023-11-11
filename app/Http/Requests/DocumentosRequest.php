<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentosRequest extends FormRequest
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
            "doc_nombre" => "required",
            "tip_id" => "required|numeric|exists:tip_tipo_docs,id",
            "pro_id"=> "required|numeric|exists:pro_procesos,id",
            "doc_contenido" => "required|min:10|max:4000",
        ];
    }
    public function mensage(){
        return [
            "doc_nombre.required" => "El nombre del documento es requerido",
            "tip_id.required" => "El tipo de documento es requerido",
            "tip_id.exists" => "El tipo de documento no existe",
            "pro_id.required" => "El proceso es requerido",
            "pro_id.exists" => "El proceso no existe",
            "doc_contenido.required" => "El contenido del documento es requerido",
            "doc_contenido.min" => "El contenido del documento debe tener minimo 10 caracteres",
            "doc_contenido.max" => "El contenido del documento debe tener maximo 4000 caracteres",
        ];
    }
}
