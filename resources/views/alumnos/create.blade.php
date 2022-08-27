@include('app')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alumns Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

	<form action="{{ url('/alumnos') }}" method="POST"  enctype="multipart/from-data" 
			class="container p-4 mt-4 border border-3 border-success	">


		<h1 class="border-bottom border-3 border-success">Formulario de Alumnos</h1>
		@csrf
		<div class="mb-3">
		  <label for="name" class="form-label">Nombre</label>
		  <input type="text" class="form-control" name="nombre" id="name" placeholder="Escriba su Nombre">
		</div>

		<div class="mb-3">
		  <label for="apellido" class="form-label">Apellido</label>
		  <input type="text" class="form-control" name="apellidos" id="apellido" placeholder="Escriba su Apellido">
		</div>

		<div class="mb-3">
		  <label for="correo" class="form-label">Correo</label>
		  <input type="text" class="form-control" name="correo" id="correo" placeholder="Escriba su Correo">
		</div>

		<div class="mb-3">
		  <label for="profesion" class="form-label">Profesion</label>
		  <input type="text" class="form-control" name="profesion" id="profesion" placeholder="Escriba su Profesion">
		</div>


		<div class="mb-3">
		  <label for="name" class="form-label">Edad</label>
		  <input type="number" class="form-control" name="edad" id="name" placeholder="Escriba su Edad">
		</div>

		<div class="mb-3">
		  <label for="fecha_nac" class="form-label">Fecha de Nacimiento</label>
		  <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" >
		</div>


		<div class="mb-3">
		  <label for="address" class="form-label">Direccion</label>
		  <input type="text" class="form-control" name="direccion" id="address" placeholder="Escriba su Direccion">
		</div>

		<div class="mb-3">
		  <label for="cel" class="form-label">Telefono</label>
		  <input type="tel" class="form-control" name="telefono" id="cel" placeholder="Escriba su Telefono">
		</div>

		<div class="mb-3">
		  <label for="ci" class="form-label">Cedula</label>
		  <input type="number" class="form-control" name="c_i" id="ci" placeholder="Escriba su Cedula">
		</div>

		<select class="form-select" aria-label="Default select example" name="genero">
		  <option selected>Open this select menu</option>
		  <option value="Masculino">Masculino</option>
		  <option value="Femenino">Femenino</option>
		  <option value="Random">Random</option>
		</select>

		<input type="submit" value="Guardar" class="btn btn-success form-control mb-3">
		<a href="{{ route('alumnos.index') }} " class="btn btn-danger form-control">Atras</a>
	</form>

</body>
