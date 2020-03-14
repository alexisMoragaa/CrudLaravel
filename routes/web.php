<?php



Route::get('/', function () {
    return redirect('/users');
});//redireccionamos el home al index del crud de usuarios

Route::resource('/users', 'userController'); //establecemos las rutas del crud como tipo resource para acceder a las funciones basicas del crud

