@extends('layouts.oftalmorojasMaster')<!--padre-->

@section('title', 'Oftalmologico Rojas')<!--title-->


@section('content')
<!--Titulo de la pagina-->
<h2 class="container">
	<div class="row">
		<div class="col s12 m12 12">
			<h2>Sobre la Organizacion</h2>
		</div>
	</div>
</h2>
 <!--Parallax plaza constitucion-->
<div class="parallax-container">
    <div class="parallax">
        <img class="activator" src="{{URL::asset('img/wanka - copia.jpg')}}">
    </div>
</div>
<!--Mision vision del proyecto-->
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <h5 class="promo-caption"> Quienes somos </h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <h5 class="promo-caption"> Mision </h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <h5 class="promo-caption">Vision</h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Servicios-->
<h2 class="container">
	<div class="row">
		<h3>Que ofrecemos?</h3>
	</div>
</h2>
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
					<div class="card">
		            <div class="card-image">
		              <img src="images/sample-1.jpg">
		              <span class="card-title">Card Title</span>
		            </div>
		            <div class="card-content">
		              <p>I am a very simple card. I am good at containing small bits of information.
		              I am convenient because I require little markup to use effectively.</p>
		            </div>
		            <div class="card-action">
		              <a href="#">This is a link</a>
		            </div>
		          </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
					<div class="card">
		            <div class="card-image">
		              <img src="images/sample-1.jpg">
		              <span class="card-title">Card Title</span>
		            </div>
		            <div class="card-content">
		              <p>I am a very simple card. I am good at containing small bits of information.
		              I am convenient because I require little markup to use effectively.</p>
		            </div>
		            <div class="card-action">
		              <a href="#">This is a link</a>
		            </div>
		          </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
		          <div class="card">
		            <div class="card-image">
		              <img src="images/sample-1.jpg">
		              <span class="card-title">Card Title</span>
		            </div>
		            <div class="card-content">
		              <p>I am a very simple card. I am good at containing small bits of information.
		              I am convenient because I require little markup to use effectively.</p>
		            </div>
		            <div class="card-action">
		              <a href="#">This is a link</a>
		            </div>
		          </div>
                </div>
            </div>
        </div>
    </div>
</div>

<h2 class="container">
	<div class="row">
		<h3>Staff medico de la clinica</h3>
	</div>
</h2>

<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
					<div class="card">
		            <div class="card-image">
		              <img src="images/sample-1.jpg">
		              <span class="card-title">Card Title</span>
		            </div>
		            <div class="card-content">
		              <p>I am a very simple card. I am good at containing small bits of information.
		              I am convenient because I require little markup to use effectively.</p>
		            </div>
		            <div class="card-action">
		              <a href="#">This is a link</a>
		            </div>
		          </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
					<div class="card">
		            <div class="card-image">
		              <img src="images/sample-1.jpg">
		              <span class="card-title">Card Title</span>
		            </div>
		            <div class="card-content">
		              <p>I am a very simple card. I am good at containing small bits of information.
		              I am convenient because I require little markup to use effectively.</p>
		            </div>
		            <div class="card-action">
		              <a href="#">This is a link</a>
		            </div>
		          </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
		          <div class="card">
		            <div class="card-image">
		              <img src="images/sample-1.jpg">
		              <span class="card-title">Card Title</span>
		            </div>
		            <div class="card-content">
		              <p>I am a very simple card. I am good at containing small bits of information.
		              I am convenient because I require little markup to use effectively.</p>
		            </div>
		            <div class="card-action">
		              <a href="#">This is a link</a>
		            </div>
		          </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')