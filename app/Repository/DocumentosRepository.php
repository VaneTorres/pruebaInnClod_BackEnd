<?php

namespace App\Repositories;

use App\Models\doc_documento;

class DocumentosRepository
{
    public function obtenerDocumentos()
    {
        return doc_documento::all()->load('tip_tipo_doc', 'pro_proceso');
    }
    public function obtenerDocumento($id)
    {
        return doc_documento::find($id)->load('tip_tipo_doc', 'pro_proceso');
    }
    public function crearDocumento($data)
    {
        return doc_documento::create($data);
    }
    public function actualizarDocumento($id, $data)
    {
        return doc_documento::find($id)->update($data);
    }
    public function eliminarDocumento($id)
    {
        return doc_documento::find($id)->delete();
    }
    
}
