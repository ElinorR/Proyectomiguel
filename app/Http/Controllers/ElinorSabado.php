<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElinorSabado extends Controller
{
    public function VerRegistro()
    {
    	return view('Registro');
    }

    public function GuardarRegistro(Request $request)
    {
    	$nombre = $request->input('Nombre');
    	$apellido = $request->input('Apellido');

    	//return $nombre . ' ' . $apellido;
    	return view('ver_registro', compact('nombre', 'apellido'));
    }
}



