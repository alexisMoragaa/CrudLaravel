@extends('layouts.main')
@section('content')

<div class="content  mt-5 card p-3">
	<div class="row">
		<div class="col">
			<h1>Crear nuevo Usuario</h1>
		</div>
		<div class="col">
			<a href="/users" class="btn btn-secondary float-right"><i class="fa fa-long-arrow-left"></i> Volver</a>
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
			<form action="/users" method="POST">
				@csrf
				<div class="row mt-4">
					<div class="form-group col-xs-12 col-md-6">
						<label for="name">Nombre</label>
						<input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
					</div>

					<div class="form-group col-xs-12 col-md-6">
						<label for="name">Apellido</label>
						<input type="text" class="form-control" name="last_name" id_="last_name" value="{{old('last_name')}}">
					</div>

					<div class="form-group col-xs-12 col-md-6">
						<label for="name">Email</label>
						<input type="text" class="form-control" name="email" id="email" value="{{old('email')}}">
					</div>

					<div class="form-group col-xs-12 col-md-6">
						<label for="name">Telefono</label>
						<input type="text" class="form-control" name="phone_number" id="phone_number" value="{{old('phone_number')}}">
					</div>


					<div class="form-group col-md-12">
						<input type="submit" value="Crear Usuario" class=" btn btn-success float-right">
					</div>
					
				</div>

			</form>
		</div>
	</div>

</div>
@endsection