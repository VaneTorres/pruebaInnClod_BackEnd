<?php

namespace App\Repositories;

use App\Models\doc_documento;

class DocumentosRepository
{
    //Clase para CRUD de documentos
    //Funcion para obtener todos los documentos
    public function obtenerDocumentos()
    {
        return doc_documento::all()->load('tip_tipo_doc', 'pro_proceso');
    }
    //Funcion para obtener un documento
    public function obtenerDocumento($id)
    {
        return doc_documento::find($id);
    }
    //Funcion para crear un documento
    public function crearDocumento($data)
    {
        return doc_documento::create($data);
    }
    //Funcion para actualizar un documento
    public function actualizarDocumento($id, $data)
    {
        return doc_documento::find($id)->update($data);
    }
    //Funcion para eliminar un documento
    public function eliminarDocumento($id)
    {
        return doc_documento::find($id)->delete();
    }
    
}
