@include('app')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<title>Alumnos</title>
</head>
<body>
	<div class="container border border-3 border-primary rounded mt-5">
		<div class="d-flex justify-content-between m-5 border-bottom border-3 border-primary">
			<h1 class="text-left ">Listado de Alumnos</h1>
			<a class="" href="{{ route('alumnos.create') }}">
				<button class="btn btn-primary">Nuevo</button>

		</div>
		</a>
		<table class="table table-responsive table-hover">
		  <thead>
		  	<tr>
		  		<th>Nombre</th>
		  		<th>Apellido</th>
		  		<th>Correo</th>
		  		<th>Profesion</th>
		  		<th>Edad</th>
		  		<th>Fecha Nac</th>
		  		<th>Cedula</th>
		  		<th>Telefono</th>
		  		<th>Direccion</th>
		  		<th>Genero</th>
		  		<th colspan="3">Opciones</th>
		  	</tr>
		  </thead>

		  <tbody>
		  	@foreach($alumnos as $a)
		  	<tr>
		  		<td>{{ $a->nombre }}</td>
		  		<td>{{ $a->apellidos }}</td>
		  		<td>{{ $a->correo }}</td>
		  		<td>{{ $a->profesion }}</td>
		  		<td>{{ $a->edad }}</td>
		  		<td>{{ $a->fecha_nac }}</td>
		  		<td>{{ $a->c_i }}</td>
		  		<td>{{ $a->telefono }}</td>
		  		<td>{{ $a->direccion }}</td>
		  		<td>{{ $a->genero }}</td>

		  		<td><a href="{{ url('/alumnos/'.$a->id.'/edit') }}" class="btn btn-primary">Editar</a></td>
		  		<td>

		  			<form action="{{ ('/alumnos/'.$a->id) }}" method="POST">
		  				@csrf
		  				@method('DELETE')
		  				<button class="btn btn-danger">Eliminar</button>
		  			</form>
		  		</td>

		  		<td>

		  	</tr>
		  	@endforeach
		  </tbody>
		</table>
		<div class="d-flex justify-content-center p-2">{{ $alumnos->links() }}</div>

	</div>
	

</body>
</html>