<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Programa Materia PDF</title>
	<hr>
</head>
<body>
	<div align="center">
		<h1>Universidad Autonoma de Sinaloa</h1>
		<img class="media-object" src="images\UAS.png" alt="" height="120" width="100">
		<h3>Licenciatura en {{$carrera->nombre}}</h3>
		<hr>
	</div>
	<div>
		<h4>{{$materia->nombre}}</h4>
		<h4>Temas:</h4>
		<ol>
		@foreach($temas as $t)
			<li>
				{{$t->nombre}}
			</li>
		@endforeach
		</ol>
	</div>
</body>
</html>