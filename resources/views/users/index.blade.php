@extends('layouts.main')
@section('content')
<div class="content  mt-5 card p-3">
   
    
    <div class="row">
      <div class="col">
        <h1> Usuarios </h1>
      </div>
        
      <div class="col">
        <a href="/users/create" class="btn btn-success float-right mt-2">Crear Usuario <i class="fas fa-plus"></i></a>
      </div>
        
    </div>
    <div class="row">
      <div class="col">
        
        <div class="table-responsive">
          
            <table class="table ">
              <thead class="thead-dark">
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Email</th>
                  <th scope="col">Telefono</th>
                  <th></th>

              </thead>
              <tbody>
                @foreach($users as $user)
                  <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone_number}}</td>
                    <td>
                      
                      <button class="btn btn-outline-secondary dropdown-toggle float-right" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciónes</button>
                      <div class="dropdown-menu">

                        <form action="{{route('users.destroy', $user->id)}}" method="POST" id="delete-{{$user->id}}">
                          @csrf
                          @method('delete')
                          <a class="dropdown-item" href="/users/{{$user->id}}">Ver <i class="far fa-eye float-right"></i></a>
                          <a class="dropdown-item" href="/users/{{$user->id}}/edit">Editar <i class="fas fa-user-edit float-right"></i></a>
                          <a class="dropdown-item" href="#" onclick="remove({{$user->id}}, '{{$user->name}}', '{{$user->last_name}}')" >
                            Eliminar <i class="far fa-trash-alt float-right text-danger"></i>
                          </a>
                        </form>
            
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>

            </table>

        </div>

      </div>
    </div>


</div>

@endsection