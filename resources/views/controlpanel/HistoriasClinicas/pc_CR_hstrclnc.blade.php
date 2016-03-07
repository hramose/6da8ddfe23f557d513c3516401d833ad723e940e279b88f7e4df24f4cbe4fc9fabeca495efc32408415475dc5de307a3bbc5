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
				<h3 class="txtgothic">Creación de H.C.</h3>
			</div>
			<div class="panel-body">
				<h4>Importante!!!</h4>
				<p class="justificado">
					Se encuentra en el sistema de registro de Historias cinicas, cabe mecionar que ud esta logeado y cada creacion de historia clinica tiene un registro de actividad, por tanto le recomendamos manejar de la manera mas responsable y adecuada, el registro de los campos que se le soliciten, gran parte del adecuado manejo del sistema depende de Ud.
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
			<div class="panel-heading">Formulario de Creación de H.C.</div>
			<div class="panel-body">
				<div>
					anamnesis
					Examen Clinico
					Biomicroscopia
					fondo del ojo
					Motilidad Ocular
					Refra
				</div>
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