@extends('layouts.pc_Master')<!--padre-->

@section('title', 'Panel de Control')<!--title-->

@section('content')
<!--contenido del cuerpo aqui dentro-->  
<div class="tittle">
	<h3 class="txtgothic">Un poco de Historia </h3>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-lg-12">
    	<p>
    		<p  class="justificado">el sistema de red de telemedicina oftalmologica diseñada con la finalidad de brindar un mejor servicio acorde a las tendecnias del presente siglo para la poblacion peruana, la medicina oftalmologica</p>
    		<i><b>Sistema de red telemedica oftalmologica desarrollado por inicativa de la Oftalmologica del centro del Perú y bajo la financiacion del estado Peruano.</b></i>

    		<blockquote class="justificado"> Esta plataforma ha sido desarrollada bajo el principio KISS (del ingles "Keep It Simple, Stupid")
    		Hazlo sencillo, Estupido!!!</blockquote>
    	</p>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-lg-4">
		<div>
			<h4>titulo</h4>
		</div>
		<div>
			<p class="justificado">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam unde, nemo earum corporis sint hic sit illum quas vitae commodi dolorem id iusto quisquam expedita voluptates amet eligendi. Asperiores, sit.
			</p>
		</div>
		<div>
			<p class="justificado">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa voluptatem voluptas, nobis deserunt quibusdam quia nam alias molestias adipisci non dolorum velit harum veritatis voluptates, quam beatae voluptate, cum. Velit!
			</p>
		</div>
    </div>
    <div class="col-xs-12 col-sm-12 col-lg-8">
       <img class="img-responsive" width="auto" height="auto" src="img/tbbut.png" alt="">
	</div>
</div>
<!--fin contenido-->
@endsection