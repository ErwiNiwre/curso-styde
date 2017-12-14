<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	// return 'Usuarios';
        // crearemos un arreglo
        // $users=[
        //     'Joel',
        //     'Ellie',
        //     'Tess',
        //     'Tommy',
        //     'Bill',
        //     '<script> alert("Click") </script>'
        // ];

        if (Request()->has('empty')) {
            $users=[];
        }else{
             $users=[
                'Joel', 'Ellie', 'Tess', 'Tommy', 'Bill',
                ];
        }

        $title='Listado de Usuarios';

        // otro forma 4
        // dd(compact('title','users')); //con esto podemos mostrar los datos 

        return view('users', compact('title','users'));


        // Una forma
        // return view('users', [
        //     'users'=>$users,
        //     'title' =>'Listado de Usuarios'
        // ]);

        // 2da Forma
        // return view('users')->with([
        //     'users'=>$users,
        //     'title' =>'Listado de Usuarios'
        // ]);

        // 3ra Forma
        // return view('users')
        //     ->with('users', $users)
        //     ->with('title', 'Listado de Usuarios');
    }

    public function show($id)
    {
        return view('users-show', compact('id'));
    	// return "Mostrando detalle del usuario: {$id}";
    }

    public function create()
    {
    	return 'Crear nuevo usuario';
    }
}
