<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index1()
    {
    	return view('cursos/index1');
    }

    public function guardar(Request $datoscursos)
    {
    	$cursos = $datoscursos->input('cursos');
     return view('cursos/guardar', compact('cursos'));
    }
}
