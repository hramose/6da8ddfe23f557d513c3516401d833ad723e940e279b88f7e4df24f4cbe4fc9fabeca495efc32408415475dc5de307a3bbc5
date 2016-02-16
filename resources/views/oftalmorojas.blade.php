@extends('layouts.oftalmorojasMaster')<!--padre-->

@section('title', 'Oftalmologico Rojas')<!--title-->


@section('content')
<!--Titulo de la pagina-->
<h2 class="gray">
	Oftalmologica rojas
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
                    <i class="mdi-social-group"></i>
                    <h5 class="promo-caption"> Mision </h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-social-group"></i>
                    <h5 class="promo-caption"> Vision </h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-social-group"></i>
                    <h5 class="promo-caption">Objetivos</h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')