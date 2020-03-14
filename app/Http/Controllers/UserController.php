<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Realizamos una busqueda de todos los usuarios
     * Retornamos la vista index con todos los usuarios retornados por la consulta
     */
    public function index()
    {
        
        return view('users.index', ['users' => User::all()]);
    }



    /**
     * Retornamos la vista que tiene el formulario de registro
     */
    public function create()
    {
        return view('users.create');
    }




    /**
     * Validamos los campos del formulario
     *  creamos una nueva instancia del modelo usuario
     *  asignamos los valores obtenidos del request y los guardamos
     *  redireccionamos al index
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required | email',
            'phone_number' => 'required | numeric | digits_between:8,9 ',
        ]);

        $user = new User();
        
            $user->name = $request->get('name');
            $user->last_name = $request->get('last_name');
            $user->email = $request->get('email');
            $user->phone_number = $request->get('phone_number');

                $user->save();
        return redirect('/users');
    }



    /**
     * Retornamos la vista que tiene show con el usuario seleccionado
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show',['user' => $user]);
    }



    /**
     * Buscamos el usuario por su id
     * Retoanamos la vista de editar usuario con el modelo del usuario a editar
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', ['user' => $user]);
    }



    /**
     * Realizamos la validacion de campos
     * Seleccionamos el usuario que editaremmos usando el id
     * Asignamos los valores del request y guardamos si es que pasa la validacion
     * Redireccionamos al index
     */
    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required | email',
            'phone_number' => 'required | numeric | digits_between:8,9 ',
        ]);

        $user = User::findOrFail($id);
         $user->name = $request->get('name');
            $user->last_name = $request->get('last_name');
            $user->email = $request->get('email');
            $user->phone_number = $request->get('phone_number');

                $user->save();
         return redirect('/users');
    }



    /**
     * Seleccionamos el usuario que se eliminara
     * Eliminamos el usuario
     * Redireccionamos al index
     */
    public function destroy($id)
    {
         $user = User::findOrFail($id);
         $user->delete();
         return redirect('/users');
    }
}
