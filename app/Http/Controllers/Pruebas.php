<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use App\Models\Visitante;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Pruebas extends Controller
{
    //
    public function getPlanteles()
    {
        $planteles = DB::select( 'select * from all_planteles' );
 
        return $planteles;
    }

    public function getRegistros(){

        /**
         * query bulding method
         *
         * $registros = DB::select( 'select * from registro' );
         * return $registros; 
         */

        /**
         * Eloquent method
         */

        $registro = Visitante::all();
        return $registro;
    }

    public function registraUsuario(Request $request){

        /**
         * query bulding method
         * $guarda =  DB::insert( 'insert into registro (nombre, empresa, motivo, depto_visitado) values (?, ?, ?, ?)', [
         * $request->nombre, 
         * $request->empresa, 
         * $request->motivo, 
         * $request->departamento
         * ]);
         * 
         * return $guarda;
         * 
         */

        /**
         * Eloquent method
         */

        $guarda = Visitante::create([
            'nombre'       => $request->nombre, 
            'empresa'      => $request->empresa, 
            'motivo'       => $request->motivo, 
            'depto_visitado' => $request->departamento
        ]);
        return $guarda;
        
    }
}
