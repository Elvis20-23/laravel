<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiantes;

class PagesController extends Controller
{
    public function fnIndex(){
        return view('welcome');
    }

    public function fnEstDetalle($id){
        $xDetAlumnos = Estudiante::findOrFail($id);
        return view('Estudiante.pagDetalle',compact('xDetAlumnos'));
    }

    public function fnRegistrar (Request $request){

        $request -> validate([
            'codEst'=>'required',
            'nomEst'=>'required',
            'apeEst'=>'required',
            'fnaEst'=>'required',
            'turMat'=>'required',
            'semMat'=>'required',
            'estMat'=>'required',
        ]);

        $nuevoEstudiante = new Estudiantes;

        $nuevoEstudiante->codEst = $request->codEst;
        $nuevoEstudiante->nomEst = $request->codEst;
        $nuevoEstudiante->apeEst = $request->codEst;
        $nuevoEstudiante->fnaEst = $request->codEst;
        $nuevoEstudiante->turMat = $request->codEst;
        $nuevoEstudiante->semMat = $request->codEst;
        $nuevoEstudiante->estMat = $request->codEst;

        $nuevoEstudiante->save();

        return back()->with('msj','Se registro con éxito...');
    }

    public function fnLista(){
        $xAlumnos = Estudiantes::all();
        return view('pagLista', compact('xAlumnos'));
    }

    public function fnGaleria($numero=null) {
        $valor = $numero;
        $otro = 25;

        return view('pagGaleria', compact('valor', 'otro'));
    }


    //
}