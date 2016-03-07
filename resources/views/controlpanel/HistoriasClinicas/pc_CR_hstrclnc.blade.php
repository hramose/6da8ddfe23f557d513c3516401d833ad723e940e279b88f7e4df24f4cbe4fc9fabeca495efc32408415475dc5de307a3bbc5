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

<div class="divider" role="presentation" >
	
</div>

<!--div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Formulario de Creación de H.C.
			</div>
		</div>
	</div>
</div-->


<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Anamnesis
			</div>
			<div class="panel-body">
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<h4>Antecedentes refractivos</h4>
					<p class="justificado">
						<ul>
							<li>
								<label><input type="checkbox" value=" Usuario de lentes"> Usuario de lentes</label>
								<ul>
									<li>
										<label>
											<input type="checkbox" value=" lejos"> Lejos
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" value=" cerca"> Cerca
											</label>
									</li>
								</ul>
							</li>
							<li> UR</li>
							<li>
								<label><input type="checkbox" value="Lentes de contacto"> Lentes de Contacto</label>
							</li>
						</ul>
					</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<div class="col-xs-12 col-sm-6 col-lg-4 centro">
						<h4>TE</h4>
					</div>
					<div class="col-xs-12 col-sm-6 col-lg-4 centro">
						<h4>F.I.</h4>
					</div>
					<div class="col-xs-12 col-sm-6 col-lg-4 centro">
						<h4>CURSO</h4>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-lg-12 centro">
						<h4>Motivo de consulta:</h4>
						<textarea class="form-control" id="txtconsulta" name="message" placeholder="Describa aqui el motivo de la consulta" rows="8">
						</textarea>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<h4>Antecedentes Patológicos</h4>
					<ul>
						<li><label><input type="checkbox" value=" HTA"> HTA</label></li>
						<li><label><input type="checkbox" value=" DM"> DM</label></li>
						<li><label><input type="checkbox" value=" AR"> AR</label></li>
						<li><label><input type="checkbox" value=" OX Ocular"> OX Ocular</label></li>
						<li><label><input type="checkbox" value=" Alergias"> Alergias</label></li>
					</ul>
					<h4>Antecedentes Familiares</h4>
						<textarea class="form-control" id="txtconsulta" name="message" placeholder="Describa aqui los antecedentes familiares" rows="1">
						</textarea>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Examen Clinico 
			</div>
			<div class="panel-body">
				<div class="col-lg-6">
					<table class="table table-hover col-lg-12" data-toggle="table">
						<thead>
							<tr>
								<td>AV</td>
								<td>SC</td>
								<td>CC</td>
								<td>AE</td>
								<td>CC/AE</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>OD</td>
								<td><input type="text" class="tr-in"></td>
								<td><input type="text" class="tr-in"></td>
								<td><input type="text" class="tr-in"></td>
								<td><input type="text" class="tr-in"></td>
							</tr>
							<tr>
								<td>OI</td>
								<td><input type="text" class="tr-in"></td>
								<td><input type="text" class="tr-in"></td>
								<td><input type="text" class="tr-in"></td>
								<td><input type="text" class="tr-in"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-lg-6">
					<table class="table table-hover col-lg-12" data-toggle="table">
						<thead>
							<tr>
								<td>Refraccion:</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>OD</td>
								<td><input type="text" class="tr-in"></td>
							</tr>
							<tr>
								<td>OI</td>
								<td><input type="text" class="tr-in"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-lg-6">
					<table class="table table-hover col-lg-12" data-toggle="table">
						<thead>
							<tr>
								<td>Keratometria</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>OD</td>
								<td><input type="text" class="tr-in"></td>
							</tr>
							<tr>
								<td>OI</td>
								<td><input type="text" class="tr-in"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Biomicroscopia 
			</div>
			<div class="panel-body">
				<div class="col-lg-5">
					<table class="table table-hover col-lg-12" data-toggle="table">
						<thead>
							<tr>
								<td>Refraccion:</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<label>
										<input type="checkbox" value="Cornea"> Cornea
									</label>
								</td>
								<td><input type="text" class="tr-in" disabled="true"></td>
							</tr>
							<tr>
								<td>
									<label>
										<input type="checkbox" value="Cristalino"> Cristalino
									</label>
								</td>
								<td><input type="text" class="tr-in" disabled="true"></td>
							</tr>
							<tr>
								<td>
									<label>
										<input type="checkbox" value="Parpados"> Parpados
									</label>
								</td>
								<td><input type="text" class="tr-in" disabled="true"></td>
							</tr>
							<tr>
								<td>
									<label>
										<input type="checkbox" value="Conjuntiva"> Conjuntiva
									</label>
								</td>
								<td><input type="text" class="tr-in" disabled="true"></td>
							</tr>
							<tr>
								<td>
									<label>
										<input type="checkbox" value="Esclera"> Esclera
									</label>
								</td>
								<td><input type="text" class="tr-in" disabled="true"></td>
							</tr>
							<tr>
								<td>
									<label>
										<input type="checkbox" value="Camara Anterior"> Camara Anterior
									</label>
								</td>
								<td><input type="text" class="tr-in" disabled="true"></td>
							</tr>
							<tr>
								<td>
									<label>
										<input type="checkbox" value="Iris y pupila" disabled=""> Iris y pupila
									</label>
								</td>
								<td><input type="text" class="tr-in" disabled=""></td>
							</tr>
							<tr>
								<td>
									<label>
										<input type="checkbox" value="Via lagrimal"> Via lagrimal
									</label>
								</td>
								<td><input type="text" class="tr-in" disabled="true"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-lg-7">
					<img src="img/ojosimg.PNG" class="img-responsive" width="auto">
				</div>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Fondo del ojo 
			</div>
			<div class="panel-body">
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Motilidad Ocular 
			</div>
			<div class="panel-body">
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Motilidad Ocular 
			</div>
			<div class="panel-body">
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Refraccion Final
			</div>
			<div class="panel-body">
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Impresion diagnostica
			</div>
			<div class="panel-body">
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Tratamiento
			</div>
			<div class="panel-body">
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Plan
			</div>
			<div class="panel-body">
			</div>
		</div>
	</div>
</div>

<div class="row">
		<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Opciones de Histórias Clínicas</div>
			<div class="panel-body">
				<div>
					<input type="button" value="Nueva Historia Clinica" class="btn btn-primary">
					<input type="button" value="Nuevo Paciente" class="btn btn-primary">
					<!--input type="button" value="Nueva Historia Clinica"-->
				</div>
				
			</div>
		</div>
	</div>
</div>

<!--fin contenido-->
@endsection