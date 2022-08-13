<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>
</head>
<body>

	<table class="table table-hover">
	  <thead>
	  	<tr>
	  		<th>Nombre</th>
	  		<th>Apellido</th>
	  		<th>Edad</th>
	  		<th>CI</th>
	  		<th>Telefono</th>
	  		<th>Direccion</th>
	  	</tr>
	  </thead>

	  <tbody>
	  	@foreach($alumnos as $a)
	  	<tr>
	  		<td>{{ $a->nombre }}</td>
	  		<td>{{ $a->apellido }}</td>
	  		<td>{{ $a->edad }}</td>
	  		<td>{{ $a->c_i }}</td>
	  		<td>{{ $a->telefono }}</td>
	  		<td>{{ $a->direccion }}</td>
	  	</tr>
	  	@endforeach
	  </tbody>
	</table>

</body>
</html>