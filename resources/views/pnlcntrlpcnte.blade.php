@extends('layouts.pnlcntrlmstr')<!--padre-->

@section('title', 'Panel de control pacientes')<!--title-->


@section('content')

<!--Descripcion-->
<div class="container">
	<h1>titulo</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat minima quam eum quisquam. Est dolor eum assumenda? Corporis ducimus voluptatibus vel, dolorum sequi quam minus quibusdam voluptatum id praesentium veritatis!</p>
</div>


<!--contenido del panel-->
<div class="row">
	<div class="container">
		  <table class="centered responsive-table">
		    <thead>
		      <tr>
		          <th data-field="id">Name</th>
		          <th data-field="name">Item Name</th>
		          <th data-field="price">Item Price</th>
		      </tr>
		    </thead>

		    <tbody>
		      <tr>
		        <td>Alvin</td>
		        <td>Eclair</td>
		        <td>$0.87</td>
		      </tr>
		      <tr>
		        <td>Alan</td>
		        <td>Jellybean</td>
		        <td>$3.76</td>
		      </tr>
		      <tr>
		        <td>Jonathan</td>
		        <td>Lollipop</td>
		        <td>$7.00</td>
		      </tr>
		    </tbody>
		  </table>	
	</div>
</div>

@endsection('content')