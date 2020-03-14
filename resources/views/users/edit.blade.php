@extends('layouts.main')
@section('content')

<div class="content  mt-5 card p-3">
	<div class="row">
		<div class="col-sm-8">
			<h1>Editar Usuario : {{$user->name}} {{$user->last_name}}</h1>
		</div>
		<div class="col-sm-4">
			<a href="/users" class="btn btn-secondary float-right"><i class="fas fa-angle-left"></i> Volver</a>
		</div>
	</div>


	<div class="row">
		<div class="col">
			@if($errors->any())
				<div class="alert alert-danger">
					<p>Ups! <small>Parece que tienes algunos Errores</small></p>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				
				</div>
			@endif
			<!-- Mostramos los errores de validacion en caso de que los tengamos -->

			<form action="/users/{{$user->id}}" method="POST">
				@csrf
				@method('put')
				<div class="row mt-4">
					<div class="form-group col-sm-12 col-md-6">
						<label for="name">Nombre</label>
						<input type="text" class="form-control" name="name" id="name"  value="{{$user->name}}">
					</div>

					<div class="form-group col-sm-12 col-md-6">
						<label for="name">Apellido</label>
						<input type="text" class="form-control" name="last_name" id_="last_name"  value="{{$user->last_name}}">
					</div>

					<div class="form-group col-sm-12 col-md-6">
						<label for="name">Email</label>
						<input type="text" class="form-control" name="email" id="email"  value="{{$user->email}}">
					</div>

					<div class="form-group col-sm-12 col-md-6">
						<label for="name">Telefono</label>
						<input type="text" class="form-control" name="phone_number" id="phone_number"  value="{{$user->phone_number}}">
					</div>


					<div class="form-group col-md-12">
						<input type="submit" value="Editar Usuario" class=" btn btn-success float-right">
					</div>
					
				</div>

			</form>
		</div>
	</div>

</div>
@endsection