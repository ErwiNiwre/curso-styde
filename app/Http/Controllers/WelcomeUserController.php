<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    // public function index($name,$nickname=null)
    public function __invoke($name,$nickname=null)
    {
    	//con esta linea de codigo el primer caracter es mayuscula
	    $name=ucfirst($name);
		if ($nickname) {
		 	return "Bienvenido {$name}, tu apodo es {$nickname}";
		 } else{
		 	return "Bienvenido {$name}, no tienes apodo";
		 }
    }
}
