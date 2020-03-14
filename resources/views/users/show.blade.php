@extends('layouts.main')
@section('content')


	
<div class="row mt-5">
	<div class="col-sm-9 p-3 card">
		<h1>Ficha  Usuario</h1>
		<table class="table">
			<tbody>
				<tr>
					<td>ID Usuario</td>
					<td>{{$user->id}}</td>
				</tr>
				<tr>
					<td>Nombre</td>
					<td>{{$user->name}}</td>
				</tr>
				<tr>
					<td>Apellidos</td>
					<td>{{$user->last_name}}</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>{{$user->email}}</td>
				</tr>
				<tr>
					<td>Telefono</td>
					<td>{{$user->phone_number}}</td>
				</tr>

				<tr>
					<td>Fecha Creacion</td>
					<td>{{$user->created_at}}</td>
				</tr>

				<tr>
					<td>Fecha Actualizacion</td>
					<td>{{$user->updated_at}}</td>
				</tr>

			</tbody>
		</table>

	</div>

	<div class="col-sm-3">
		 <form action="{{route('users.destroy', $user->id)}}" method="POST" id="delete-{{$user->id}}">
	          @csrf
	          @method('delete')
	          <a href="/users" class="btn btn-secondary btn-block mt-1"> <i class="fas fa-angle-left"></i> Volver</a> <br>
			  <a href="/users/{{$user->id}}/edit" class="btn btn-warning  btn-block mt-1">Editar <i class="fas fa-user-edit "></i></a> <br>
	     	  <a class="btn btn-danger  btn-block mt-1" href="#" onclick="remove({{$user->id}}, '{{$user->name}}', '{{$user->last_name}}')" >
	            Eliminar <i class="far fa-trash-alt  "></i>
	          </a>
         </form>
	</div>
		
</div>


<style>

</style>
@endsection