<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Carreras UAS</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<style>
		.col-xs-6 {
        	float: none;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-10">
				<h3>Listado de Carreras de la Universidad Autónoma de Sinaloa</h3>
				<hr>
			</div>
			<div class="col-xs-12 col-sm-2">
				<img class="media-object" src="images\UAS.png" alt="" height="120" width="100">
			</div>
			<div class="col-xs-5 col-sm-2 well">
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation" class="active"><a href="{{url('/')}}">Inicio</a></li>
					@foreach($carreras as $c)
					<li role="presentation" class=""><a href="{{url('/')}}/{{$c->id}}">{{$c->nombre}}</a></li>
				  	@endforeach
				</ul>
			</div>
			@yield('inicio')
			@yield('materias')
		</div>	
	</div>
</body>
</html>