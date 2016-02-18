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
            <!--script>
              window.liveSettings = {
                api_key: "a0b49b34b93844c38eaee15690d86413",
                picker: "bottom-right",
                detectlang: true,
                dynamic: true,
                autocollect: true
              };
            </script>
            <script src="//cdn.transifex.com/live.js"></script-->
</head>
<body>
<header>
  <div class="navbar-fixed ">
    
    <!-- Dropdown Structure -->
    <ul id="tlmdcn" class="dropdown-content">
      <li><a href="#!">Video conferencia</a></li>
      <li><a href="#!">Historia Clinica</a></li>
      <li class="divider"></li>
      <li><a href="#!">Biblioteca especializada</a></li>
    </ul>



    <nav>
      <div class="nav-wrapper default_color">
        <!--a href="#!" class="brand-logo">Logo</a-->
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a class="dropdown-button" href="#" data-activates="tlmdcn">Telemedicina<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#">congreso<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#">Acerca de<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#">Login<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a class="dropdown-button" href="#">Telemedicina<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#">congreso<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#">Acerca de<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" ref="#">Login<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>
  <!--Contenido de las demas paginas-->
  <div>
     @yield('content')
  </div>
    <!--div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
      <a class="btn-floating btn-large red">
        <i class="material-icons">question_answer</i>
      </a>
      <ul>
        <li><a style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;" class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
        <li><a style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;" class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
        <li><a style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;" class="btn-floating green"><i class="material-icons">publish</i></a></li>
        <li><a style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;" class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
      </ul>
    </div-->


  <div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large red">
            <i class="material-icons">question_answer</i>
          </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
        
  <!--Fin de contenido-->

  <!--Footer-->
<footer id="contact" class="page-footer default_color scrollspy">
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
                            <button class="btn-floating btn-large waves-effect waves-light red" type="submit" name="action">
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
</footer>

   <!--  Scripts-->
    <script>
        
    </script>
    <script>
        $(".button-collapse").sideNav();      
        $(".dropdown-button").dropdown(); 
    </script>
    <script gapi_processed="true" src="https://apis.google.com/js/platform.js" async="" defer="">
    </script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="{{URL::asset('js/moderniszr.js')}}"></script>
    <script src="{{URL::asset('js/materialize.js')}}"></script>
    <script src="{{URL::asset('js/init.js')}}"></script>
    <script src="js/jquery.timeago.min.js"></script>
    <script src="js/prism.js"></script>
    <script src="jade/lunr.min.js"></script>
    <script src="jade/search.js"></script>
    <script src="js/init.js"></script>
</body>