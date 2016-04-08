@extends('master')

@section('materias')
<div class="col-xs-10 well" align="center">
	<h3 class="text-info">Licenciatura en {{$carrera->nombre}}</h3>
	<h4>Tira de Materias</h4>
	<div class="col-xs-6">
		<div class="list-group">
			@foreach($materias as $m)
			<a href="{{url('/PDF')}}/{{$m->id_materia}}" class="list-group-item">{{$m->nombre}}</a>
			@endforeach
		</div>
	</div>
</div>
@stop