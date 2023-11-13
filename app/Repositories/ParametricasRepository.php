<?php

namespace App\Repositories;

use App\Models\tip_tipo_doc;
use App\Models\pro_proceso;

class ParametricasRepository
{
    //Clase para obtener los datos de las tablas parametricas
    //Funcion para obtener ripo de documento
    public function obtenerTipoDocumento(){
        return tip_tipo_doc::all();
    }
    //Funcion para obtener los procesos
    public function obtenerProcesos(){
        return pro_proceso::all();
    }
}
