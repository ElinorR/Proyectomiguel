<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalentoController extends Controller
{
     public function index()
     {
     	return view('talento/index');

     }

     public function save(Request $datos)
     {
     	$nombre = $datos->input('nombre');
     	$apellido = $datos->input('apellido');
     	$sexo = $datos->input('sexo');
     	$fecha_nacimiento = $datos->input('fecha_nacimiento');

     	return view('talento/guardar', compact('nombre', 'apellido','sexo','fecha_nacimiento'));


     }
}
