@extends('layouts.pc_Master')<!--padre-->

@section('title', 'Panel de Control')<!--title-->

@section('content')
<!--contenido del cuerpo aqui dentro-->  

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>



<div clas="container">
	<div class="col-md-12">
		<h1 class="page-header">Paciente</h1>
		<h3>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"</h3>
		<div class="col-md-6">
			<div class="form-group">
				<h4><label>Nombres:</label></h4>
					<input class="form-control" placeholder="">
			</div>
			<div class="form-group">
				<h4><label>Apellidos:</label></h4>
					<input class="form-control" placeholder="">
			</div>
			<div class="form-group">
				<h4><label>Nombres:</label></h4>
					<input class="form-control" placeholder="">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<h4><label>Nombres:</label></h4>
					<input class="form-control" placeholder="">
			</div>
			<div class="form-group">
				<h4><label>Nombres:</label></h4>
					<input class="form-control" placeholder="">
			</div>
			<div class="form-group" style="padding-top: 20px;">
				<center>
					<button class="btn btn-primary" type="submit">Registrar</button>
					<button class="btn btn-primary" type="submit">Modificar</button>
					<button class="btn btn-primary" type="submit">Actualizar</button>
					<button class="btn btn-primary" type="submit">Nuevo</button>
				</center>
			</div>
		</div>

		<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Advanced Table</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" >Item ID</th>
						        <th data-field="id" data-sortable="true">Item ID</th>
						        <th data-field="name"  data-sortable="true">Item Name</th>
						        <th data-field="price" data-sortable="true">Item Price</th>
						    </tr>
						    </thead>
						</table>
					</div>
				</div>
			</div>




	</div>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
</div>
<!-- Fin de container ->
@endsection