<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentosRequest;
use App\Repositories\DocumentosRepository;
class DocumentosController extends Controller
{
    public function obtenerDocumentos(DocumentosRepository $documentosRepository){
        return response()->json($documentosRepository->obtenerDocumentos(),200);
    }
    public function obtenerDocumento(DocumentosRepository $documentosRepository, $id){
        $documento = $documentosRepository->obtenerDocumento($id);
        if($documento){
            return response()->json($documento,200);
        }else{
            return response()->json(['error'=>'No encontrado'],404);
        }
    }
    public function crearDocumento(DocumentosRepository $documentosRepository, DocumentosRequest $request){
        $documento = $documentosRepository->crearDocumento($request->all());
        return response()->json($documento,200);
    }
    public function actualizarDocumento(DocumentosRepository $documentosRepository, DocumentosRequest $request, $id){
        $documento = $documentosRepository->obtenerDocumento($id);
        if($documento){
            $documento = $documentosRepository->actualizarDocumento($id, $request->all());
            return response()->json($documento,200);
        }else{
            return response()->json(['error'=>'No encontrado'],404);
        }
    }
    public function eliminarDocumento(DocumentosRepository $documentosRepository, $id){
        $documento = $documentosRepository->obtenerDocumento($id);
        if($documento){
            $documento = $documentosRepository->eliminarDocumento($id);
            return response()->json(['ok'=>'Eliminado correctamente'],200);
        }else{
            return response()->json(['error'=>'No encontrado'],404);
        }
    }
}
