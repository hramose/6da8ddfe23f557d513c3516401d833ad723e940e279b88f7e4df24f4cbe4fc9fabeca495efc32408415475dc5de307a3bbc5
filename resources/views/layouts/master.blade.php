<!DOCTYPE html>
<html>
    <head>
        <title>Telemedicina - @yield('title')</title>
        <!--Import Google Icon Font and Lato Font-->
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css" >
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link href="{{URL::asset('css/materialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        
        <link href="{{URL::asset('css/style.css')}}" type="text/css" rel="stylesheet" >
        <link href="{{URL::asset('css/font-awesome.min.css')}}" type="text/css" rel="stylesheet" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <script>
          window.liveSettings = {
            api_key: "a0b49b34b93844c38eaee15690d86413",
            picker: "bottom-right",
            detectlang: true,
            dynamic: true,
            autocollect: true
          };
        </script>
    </head>

<body>
<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<!--Nab-->
 <div class="navbar-fixed darken-3">
    <nav id="nav_f" class="default_color default_color" role="navigation">
        <div class="container">
            <div class="nav-wrapper"><a id="logo-container" href="#top" class="brand-logo">Telemedicina</a>
            <ul id="nav-mobile" class="right side-nav">
                 <li><a href="#telemedicina">Telemedicina?</a></li>
                 <li><a href="#mision">Mision</a></li>
                <li><a href="#vision">Vision</a></li>
                <li><a href="#invitacion">Sobre mi</a></li>
                <li><a href="#invitacion">Solicitar Invitacion</a></li>
                <li><a href="#auspiciador">Auspiciadores</a></li>
            </ul><a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

<!--Contenido de las demas paginas-->
<div>
   @yield('content')
</div>



<!--Footer-->
<footer id="contact" class="page-footer  default_color scrollspy">
    <div class="container">  
        <div class="row">
            <div class="col l9 m9 s12">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" type="text" class="validate white-text">
                            <label for="icon_prefix" class="white-text">Nombres completos</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="icon_email" type="email" class="validate white-text">
                            <label for="icon_email" class="white-text">Correo electronico</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-business prefix white-text"></i>
                            <input id="icon_business" type="text" class="validate white-text">
                            <label for="icon_business" class="white-text">Represento a</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-action-announcement   prefix white-text"></i>
                            <input id="icon_business" type="text" class="validate white-text">
                            <label for="icon_business" class="white-text">Asunto </label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="icon_prefix2" class="materialize-textarea white-text"></textarea>
                            <label for="icon_prefix2" class="white-text">Mensaje</label>
                        </div>
                        <div class="col offset-s7 s5">
                            <button class="btn waves-effect waves-light red darken-1" type="submit" name="action">Enviar
                                <i class="mdi-content-send right white-text"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col l3 m3 s12">
                <h5 class="white-text">Siguenos en las redes Sociales</h5>
                <ul>
                    <li>
                        <a class="white-text" href="#">
                            <i class="small fa fa-twitter-square white-text"></i> Twitter 
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="#">
                            <i class="small fa fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="#">
                            <i class="small fa fa-googleplus-square white-text"></i> Google+
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright default_color">
        <div class="container">
            Hecho para <a class="white-text" href="#">Telemedicina - Wanka</a>.
        </div>
    </div>

</footer>

    <!--  Scripts-->
    <script src="{{URL::asset('js/jquery-2.1.1.min.js')}}"></script>
    <script src="{{URL::asset('js/moderniszr.js')}}"></script>
    <script src="{{URL::asset('js/materialize.js')}}"></script>
    <script src="{{URL::asset('js/init.js')}}"></script>
</body>
</html>