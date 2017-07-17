<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contromiguel extends Controller
{
    
	public function funcionmiguel($dia)
	{
		$titulo = "Vista Del Curso";

		return view('vistamiguellugo', compact('titulo', 'dia'));
	}
   
}
