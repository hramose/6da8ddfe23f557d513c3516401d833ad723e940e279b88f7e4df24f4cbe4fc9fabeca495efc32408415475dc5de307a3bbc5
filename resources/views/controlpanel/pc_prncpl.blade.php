@extends('layouts.pc_Master')<!--padre-->

@section('title', 'Panel de Control')<!--title-->

@section('content')
<!--contenido del cuerpo aqui dentro-->  
<div class="tittle">
	<h3 class="txtgothic">Este es el título</h3>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-lg-12">
    	<p class="justificado">
    		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nulla, corrupti ipsa rem deserunt pariatur, voluptatem quis porro velit ad, cupiditate accusamus autem recusandae minima voluptas exercitationem possimus magni eum!
    		<blockquote> Esta es una cita Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, vel fugiat atque et, neque, quam conseca magni ratione doloremque nobis officia quo.</blockquote>
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