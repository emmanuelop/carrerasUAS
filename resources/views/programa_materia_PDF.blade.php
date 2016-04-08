<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Programa Materia PDF</title>
	<hr>
</head>
<body>
	<h1>Universidad Autonoma de Sinaloa</h1>
	<h3>Licenciatura en {{$carrera->nombre}}</h3>
	<hr>
	<h4>Materia: {{$materia->nombre}}</h4>
	<h4>Temas:</h4>
	<ol>
	@foreach($temas as $t)
		<li>
			{{$t->nombre}}
		</li>
	@endforeach
	</ol>	

</body>
</html>