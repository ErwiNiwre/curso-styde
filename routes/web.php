<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
// Route::get('/home', function () {
    return 'Home';
});

Route::get('/usuarios', 'UserController@index');

// Route::get('/usuarios', function () {
//     return 'Usuarios';
// });

// Route::get('/usuarios/detalle', function () {
//     return 'Mostrando detale del usuario: '.$_GET['id'];
// });


Route::get('/usuarios/{id}', 'UserController@show')->where('id', '[0-9]+');
// //esto es la primera forma 
// //para la segunda forma se cambia las posiciones de rutas primero seria /usuarios/nuevoy como segunto seria /usuarios/{id}
// Route::get('/usuarios/{id}', function ($id) {
//     // return 'Mostrando detale del usuario: '.$id;
// // de otra manera sera la siguiente de la manera
//     return "Mostrando detalle del usuario: {$id}";
// })->where('id', '[0-9]+'); //esto seria para q acepte solo numeros
// //})->where('id', '\w+');//esto muestra todo tanto numero y texto 



Route::get('/usuarios/nuevo', 'UserController@create');
// Route::get('/usuarios/nuevo', function () {
//     return 'Crear nuevo usuario';
// });


// Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController@index');
Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');
// Route::get('/saludo/{name}/{nickname?}', function($name,$nickname=null){
//     //con esta linea de codigo el primer caracter es mayuscula
//     $name=ucfirst($name);
// 	if ($nickname) {
// 	 	return "Bienvenido {$name}, tu apodo es {$nickname}";
// 	 } else{
// 	 	return "Bienvenido {$name}, no tienes apodo";
// 	 }

// });


Route::get('posts/{post_id}/comments/{comment_id}', function ($postId, $commentId) {
    return "Este el comentario {$commentId} del post {$postId}";
});


