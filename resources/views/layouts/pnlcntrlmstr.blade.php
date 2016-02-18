<!DOCTYPE html>
<html>
<head>
    <title>Telemedicina - @yield('title')</title>
        <title>Telemedicina - Portal Web</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css" >
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link href="{{URL::asset('css/materialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<header>
  <!--div class="navbar-fixed ">
    <nav>
      <div class="nav-wrapper default_color">
        <a href="#!" class="brand-logo">Logo</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="">Telemedicina</a></li>
          <li><a href="">congreso</a></li>
          <li><a href="">Acerca de</a></li>
          <li><a href="">Login</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="">Telemedicina</a></li>
          <li><a href="">congreso</a></li>
          <li><a href="">Acerca de</a></li>
          <li><a href="">Login</a></li>
        </ul>
      </div>
    </nav>
  </div-->
<header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="mdi-navigation-menu"></i></a></div>
      <ul style="width: 240px;" id="nav-mobile" class="side-nav fixed">
        
        <!--estructura del menu lateral-->
        <li class="bold"><a href="" class="waves-effect waves-teal">Introduccion</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold active"><a class="collapsible-header  waves-effect waves-teal active">Paciente</a>
              <div style="display: block;" class="collapsible-body">
                <ul>
                  <li><a href="">Buscar paciente</a></li>
                  <li><a href="">Registrar paciente</a></li>
                  <li><a href="">Actualizar paciente</a></li>
                </ul>
              </div>
            </li>
            <li class="bold active"><a class="collapsible-header  waves-effect waves-teal active">Medico</a>
              <div style="display: block;" class="collapsible-body">
                <ul>
                  <li><a href="">Buscar Medico</a></li>
                  <li><a href="">Registrar Medico</a></li>
                  <li><a href="">Actualizar Medico</a></li>
                  <li><a href="">Desactivar Medico</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Historias Clinicas</a>
              <div style="" class="collapsible-body">
                <ul>
                  <li><a href="">Buscar H.C.</a></li>
                  <li><a href="">Registrar H.C.</a></li>
                  <!--li><a href="">Actualizar paciente</a></li-->
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Videoconferencia</a>
              <div style="" class="collapsible-body">
                <ul>
                  <li><a href="">Buscar</a></li>
                  <li><a href="">Registrar</a></li>
                  <li><a href="">Actualizar</a></li>
                  <li><a href="">Eliminar</a></li>
                  <!--li><a href="">Actualizar paciente</a></li-->
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Biblioteca Medica</a>
              <div style="" class="collapsible-body">
                <ul>
                  <li><a href="">Buscar</a></li>
                  <li><a href="">Registrar</a></li>
                  <li><a href="">Actualizar</a></li>
                  <li><a href="">Eliminar</a></li>
                  <!--li><a href="">Actualizar paciente</a></li-->
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Protocolo</a>
              <div style="" class="collapsible-body">
                <ul>
                  <li><a href="">Buscar</a></li>
                  <li><a href="">Registrar</a></li>
                  <li><a href="">Actualizar</a></li>
                  <li><a href="">Eliminar</a></li>
                  <!--li><a href="">Actualizar paciente</a></li-->
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Administrador</a>
              <div style="" class="collapsible-body">
                <ul>
                  <li><a href="">Buscar usuario</a></li>
                  <li><a href="">Registrar usuario</a></li>
                  <li><a href="">Actualizar usuario</a></li>
                  <li><a href="">Deshabilitar usuario</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Organizacion</a>
              <div style="" class="collapsible-body">
                <ul>
                  <li><a href="">Ver informacion</a></li>
                  <li><a href="">Registrar Informacion</a></li>
                  <li><a href="">Actualizar Informacion</a></li>
                </ul>
              </div>
            </li>
            </li>
          </ul>
        </li>
      </ul>
    
</header>
  <!--Contenido de las demas paginas-->
  <div>
     @yield('content')
  </div>
  <!--Fin de contenido-->

  <!--Footer-->
<!--footer id="contact" class="page-footer default_color scrollspy">
    <div class="container center">  
        <div class="row center">
            <div class="col l12 m12 s12">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" type="text" class="validate white-text">
                            <label for="icon_prefix" class="white-text">Nombres completos</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="icon_email" type="email" class="validate white-text">
                            <label for="icon_email" class="white-text">Correo electronico</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="mdi-communication-business prefix white-text"></i>
                            <input id="icon_business" type="text" class="validate white-text">
                            <label for="icon_business" class="white-text">Represento a</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="mdi-action-announcement   prefix white-text"></i>
                            <input id="icon_business" type="text" class="validate white-text">
                            <label for="icon_business" class="white-text">Asunto </label>
                        </div>
                        <div class="input-field col s12 m6 l6">
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
        </div>
        <div class="row center">
            <div class="col l12 m12 s12">
                <h5 class="white-text ">Siguenos en las redes Sociales</h5>
                <ul class="row">
                    <li>
                        <a class="white-text col l4 m4 s12" href="#">
                            <i class="small fa fa-twitter-square white-text"></i> Twitter 
                        </a>
                    </li>
                    <li>
                        <a class="white-text col l4 m4 s12" href="#">
                            <i class="small fa fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a class="white-text colñ l4 m4 s12" href="#">
                            <i class="small fa fa-google-plus-square white-text"></i> Google+
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>    
    <div class="footer-copyright ">
        <div class="container"><a class="white-text" href="#">Telemedicina - Wanka</a>.
        </div>
    </div>
</footer-->

   <!--  Scripts-->
    <script>
        $(".button-collapse").sideNav();
    </script>
    <script gapi_processed="true" src="https://apis.google.com/js/platform.js" async="" defer="">
    </script>
    <script src="{{URL::asset('js/jquery-2.1.1.min.js')}}"></script>
    <script src="{{URL::asset('js/moderniszr.js')}}"></script>
    <script src="{{URL::asset('js/materialize.js')}}"></script>
    <script src="{{URL::asset('js/init.js')}}"></script>
</body>