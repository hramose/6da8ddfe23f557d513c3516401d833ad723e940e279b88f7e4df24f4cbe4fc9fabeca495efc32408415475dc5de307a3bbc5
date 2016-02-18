@extends('layouts.master')<!--padre-->

@section('title', 'Portal Web')<!--title-->

@section('content')
<!--slogan dinamico-->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h3 class="text_h center header cd-headline letters type">
            <span class="sise">Pensando en </span> 
            </br>
            <span class="sise cd-words-wrapper waiting">
                <b class="is-visible">tu salud</b>
                <b>tu bienestar</b>
                <b>tus ojos</b>
            </span>
        </h3>
    </div>
</div> 

<!--Mision vision del proyecto-->
<div id="intro" class="section scrollspy">
    <div class="container">

        <div class="row">
            <div  class="col s12">
                <h2 class="center color sise"> Prestacion de  <span class="sise span_h3"> servicios médicos </span> a distancia mediante el adecuado manejo de lo mejor en <span class="span_h2"> tecnologías de la información y las comunicaciones </span>
                </h2>
            </div>
			<div class="row">
				<div  class="col s12">
				</div>
			</div>

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

 <!--Parallax-->
<div class="parallax-container">
    <div class="parallax">
        <img class="activator" src="{{URL::asset('img/wanka - copia.jpg')}}">
    </div>
</div>
    
<!--Work-->
<div class="section scrollspy" id="work">

    <div class="container center">
        <h2 class="header text_b">Nuestros servicios </h2>

    <div class="container">
        <h2 class="header text_b">Quienes participan? </h2>

        <div class="row">
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Carrera 1 <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Carrera 2</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">PCarrera 3 <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Carrera 1 <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Carrera 2</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">PCarrera 3 <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Carrera 1 <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Carrera 2</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">PCarrera 3 <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Carrera 1 <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Carrera 2</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">PCarrera 3 <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Carrera 1 <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Carrera 2</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">PCarrera 3 <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Carrera 1 <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Carrera 2</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">PCarrera 3 <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Carrera 1 <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Carrera 2</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">PCarrera 3 <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Carrera 1 <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Carrera 2</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">PCarrera 3 <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 <!--Parallax-->
<div class="parallax-container">
    <div class="parallax">
        <img class="activator" src="{{URL::asset('img/wanka - copia.jpg')}}">
    </div>
</div>

<!--Team-->
<div class="section scrollspy" id="auspiciador">
    <div class="container center">
        <h2 class="header text_b"> Auspiciadores </h2>
        <div class="row">
            <div class="col s12 m4 l3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">auspiciador 1<br/></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-googleplus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">auspiciador 1<br/>
                        </span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">auspiciador 1<br/>
                        </span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">auspiciador 1<br/>
                        </span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">auspiciador 1<br/>
                        </span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">auspiciador 1<br/>
                        </span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection