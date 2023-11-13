<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ParametricasRepository;
class ParamtericasController extends Controller
{
    function obtenerParametricas(ParametricasRepository $parametricasRepository){
        return response()->json(['tipo_documento'=>$parametricasRepository->obtenerTipoDocumento(),'proceso'=> $parametricasRepository->obtenerProcesos()],200);
    }
}
