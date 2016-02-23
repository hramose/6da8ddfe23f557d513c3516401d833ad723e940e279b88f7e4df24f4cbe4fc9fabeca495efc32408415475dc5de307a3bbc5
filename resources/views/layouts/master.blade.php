<!DOCTYPE html>
<html>
<head>
    <title>Telemedicina - @yield('title')</title>
    
    <!--del index-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">

    <!-- CSS  -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet" >
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" >
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
</head>
<body id="top" class="scrollspy">
 
 <!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<!--Navigation-->
<div class="navbar-fixed">
  <nav id="nav_f" class="default_color" role="navigation">
      <div class="container">
          <div class="nav-wrapper"><a id="logo-container" href="#top" class="brand-logo"> logo</a>
          <ul id="nav-mobile" class="right side-nav">
              <li><a href="#intro">Service</a></li>
              <li><a href="#work">Work</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="" target="_blank">Download</a></li>
          </ul>
              <a href="#" data-activates="nav-mobile" class="button-collapse">
                  <i class="mdi-navigation-menu"></i>
              </a>
          </div>
      </div>
  </nav>
</div>

  <div>
     @yield('content')
  </div>

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
  <!--Contenido de las demas paginas-->


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

    </body>
</html>