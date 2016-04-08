<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carrera;
use App\Materia;
use App\Tema;

use App\Http\Requests;

use App\Http\Controllers\Controller;

class funcionesController extends Controller
{
	public function index(){
        /*$html = '<html><body>'
                . '<p>Esto es un PDF</p>'
                . '</body></html>';
        return PDF::load($html, 'A4', 'portrait')->show();*/

    	$carreras = Carrera::all();
    	return view('inicio', compact('carreras'));
    }

    public function materias($id){
    	$carreras = Carrera::all();
    	$carrera = Carrera::find($id);
    	$materias = Materia::where('id_carrera','=', $id)->get();
        return view('materias', compact('carreras', 'carrera', 'materias'));
    }

    public function PDF($id_materia){
    	$materia = Materia::find($id_materia);
    	$carrera = Carrera::find($materia->id_carrera);
    	$temas = Tema::where('id_materia','=', $id_materia)->get();

    	$view = \View::make('programa_materia_PDF', compact('materia', 'carrera', 'temas'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        return $pdf->stream('ProgramaMateria');
    }
}