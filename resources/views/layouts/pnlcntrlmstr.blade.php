<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-tap-highlight" content="no">
    <title>Panel de control - @yield('title')</title>
    
    <!-- CSS-->
    <!--link href="{{URL::asset('css/materialize.css')}}" rel="stylesheet"-->
    <link href="{{URL::asset('css/prism.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/ghpages-materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--script>
      window.liveSettings = {
        api_key: "a0b49b34b93844c38eaee15690d86413",
        picker: "bottom-right",
        detectlang: true,
        dynamic: true,
        autocollect: true
      };
    </script-->
    <script src="//cdn.transifex.com/live.js"></script>
  </head>

  <!--inicio del cuerpo Cuerpo-->
  <body>
    <header>

      <!--TITULO del portal-->
      <nav class="top-nav blue darken-2">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title">Pacientes</a></div>
        </div>
      </nav>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a></div>
      <ul style="width: 240px;" id="nav-mobile" class="side-nav fixed">
        <!--estructura del menu lateral-->
        <li class="bold"><a href="" class="waves-effect waves-teal">Introduccion</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold active"><a class="collapsible-header  waves-effect waves-teal active">Paciente</a>
              <div style="display: block;" class="collapsible-body">
                <ul>
                  <li><a href="#">Buscar paciente</a></li>
                  <li><a href="#">Registrar paciente</a></li>
                  <li><a href="#">Actualizar paciente</a></li>
                </ul>
              </div>
            </li>
            <li class="bold active"><a class="collapsible-header  waves-effect waves-teal active">Medico</a>
              <div style="display: block;" class="collapsible-body">
                <ul>
                  <li><a href="#">Buscar Medico</a></li>
                  <li><a href="#">Registrar Medico</a></li>
                  <li><a href="#">Actualizar Medico</a></li>
                  <li><a href="#">Desactivar Medico</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Historias Clinicas</a>
              <div style="" class="collapsible-body">
                <ul>
                  <li><a href="#">Buscar H.C.</a></li>
                  <li><a href="#">Registrar H.C.</a></li>
                  <!--li><a href="">Actualizar paciente</a></li-->
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Videoconferencia</a>
              <div style="" class="collapsible-body">
                <ul>
                  <li><a href="#">Buscar</a></li>
                  <li><a href="#">Registrar</a></li>
                  <li><a href="#">Actualizar</a></li>
                  <li><a href="#">Eliminar</a></li>
                  <!--li><a href="">Actualizar paciente</a></li-->
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Biblioteca Medica</a>
              <div style="" class="collapsible-body">
                <ul>
                  <li><a href="#">Buscar</a></li>
                  <li><a href="#">Registrar</a></li>
                  <li><a href="#">Actualizar</a></li>
                  <li><a href="#">Eliminar</a></li>
                  <!--li><a href="">Actualizar paciente</a></li-->
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Protocolo</a>
              <div style="" class="collapsible-body">
                <ul>
                  <li><a href="#">Buscar</a></li>
                  <li><a href="#">Registrar</a></li>
                  <li><a href="#">Actualizar</a></li>
                  <li><a href="#">Eliminar</a></li>
                  <!--li><a href="">Actualizar paciente</a></li-->
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Administrador</a>
              <div style="" class="collapsible-body">
                <ul>
                  <li><a href="#">Buscar usuario</a></li>
                  <li><a href="#">Registrar usuario</a></li>
                  <li><a href="#">Actualizar usuario</a></li>
                  <li><a href="#">Deshabilitar usuario</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal">Organizacion</a>
              <div style="" class="collapsible-body">
                <ul>
                  <li><a href="#">Ver informacion</a></li>
                  <li><a href="#">Registrar Informacion</a></li>
                  <li><a href="#">Actualizar Informacion</a></li>
                </ul>
              </div>
            </li>
            </li>
          </ul>
        </li>
      </ul>
    </header>

    <main>
    <div class="container">

    <div class="row">
      <div class="col s12 m12 l12">

        <!--  Collections Section  -->
        <div id="basic" class="section scrollspy">

          <div class="row">
            <div class="col s12">
              <p class="caption">Breadcrumbs are a good way to display your current location. This is usually used when you have multiple layers of content. </p>
              <h2 class="header">Basic</h2>

                <!--Contenido del cuerpo-->
                <div class="row">
                  <div class="col s12">
                    <p class="caption"><!--Agregar caption para que salgan letras grises.... :D-->
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur nam libero voluptatem assumenda veniam vitae minus dolores atque labore ipsam, repellendus, iste officiis placeat, velit non fuga totam. Iusto.
                    </p>
                  </div>
                </div>


              <br>
            </div>
          </div>
        </div>
        <!-- End collections -->


      </div>
    </div>
</div>


    </main>    
    <footer class="page-footer blue darken-2">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Help Materialize Grow</h5>
            <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
          </div>
          <div class="col l6 s12">
            <h5 class="white-text">Join the Discussion</h5>
            <p class="grey-text text-lighten-4">We have a Gitter chat room set up where you can talk directly with us. Come in and discuss new features, future goals, general problems or questions, or anything else you can think of.</p>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        Telemedicina Wanka
        <a class="grey-text text-lighten-4 right" href="">Basado en Materialize 2016</a>
        </div>
      </div>
    </footer>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }
    </script>
    <script src="{{URL::asset('js/jquery.timeago.min.js')}}"></script>
    <script src="{{URL::asset('js/prism.js')}}"></script>
    <script src="{{URL::asset('jade/lunr.min.js')}}"></script>
    <script src="{{URL::asset('jade/search.js')}}"></script>
    <script src="{{URL::asset('bin/materialize.js')}}"></script>
    <script src="{{URL::asset('js/init.js')}}"></script>
  </body>
</html>