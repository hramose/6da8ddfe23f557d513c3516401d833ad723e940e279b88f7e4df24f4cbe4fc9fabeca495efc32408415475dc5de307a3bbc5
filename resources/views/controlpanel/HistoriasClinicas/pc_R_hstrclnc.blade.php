@extends('layouts.pc_Master')<!--padre-->

@section('title', 'Panel de Control -  Historias Clinicas')<!--title-->

@section('content')
<!--contenido del cuerpo aqui dentro-->  
<div class="tittle">
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="txtgothic">Historia Clinica - Principal</h3>
			</div>
			<div class="panel-body">
				<h4>Importante!!!</h4>
				<p class="justificado">
					En este panel solo se mostraran las historias clinicas de aquellos pacientes que cuentan con un registro previo, dentro del sistema, de ser el caso ellos comprenderan con diagnostico el cual se encuentra en un determinado documento segun lo muestra la tabla, ud podra solicitar permisos segun el caso lo amerite, mas no podra hacer uso de algún modificacion, por si en el mas remoto caso lo esta ideando.
				</p>
				<p class="justificado">
					Cabe mencionar de igual manera que ud esta logeado, lo cual significa que el documento que ud pueda descargar y/o vizualizar tiene un codigo de descarga y todos tus datos estan siendo registrados, por ello mismo hacemos una redundancia en las recomencaciones, todo con la finalidad de poder hacer un adecuado uso de las politicas de privacidad del paciente en el manejo de datos sencibles como lo son el Historial Clínico
				</p>
				<p class="justificado">
					En el caso de requerir registrar un nuevo paciente, lo que ud. debe es de solicitoar un permiso para poder realizar esta acción, recuerde que cada usuario posee permisos únicos y distintos. Para poder solicitar un permiso adicional, haga click en el siguente <a href="">enlace</a> y rellene los campos que se requieran.
				</p>
			</div>
		</div>
    </div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Tabla de Histórias Clínicas</div>
			<div class="panel-body">
				<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
				    <thead>
				    <tr>
				        <th data-field="code" data-sortable="true">Codigo HC</th>
				        <th data-field="name" data-sortable="true">Paciente</th>
				        <th data-field="diagnpreliminar"  data-sortable="true">Diagnostico Preliminar</th>
				        <th data-field="diagnfinal" data-sortable="true">Diagnostico Final</th>
				    </tr>
				    </thead>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
		<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Opciones de Histórias Clínicas</div>
			<div class="panel-body">
				<input type="button" value="Nueva Historia Clinica" class="btn btn-primary">
				<input type="button" value="Nuevo Paciente" class="btn btn-primary">
				<!--input type="button" value="Nueva Historia Clinica"-->
			</div>
		</div>
	</div>
</div>

<!--fin contenido-->
@endsection