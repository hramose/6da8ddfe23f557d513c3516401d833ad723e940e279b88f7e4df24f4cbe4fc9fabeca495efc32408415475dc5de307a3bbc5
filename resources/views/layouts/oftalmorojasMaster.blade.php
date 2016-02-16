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
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper blue darken-3">
        <a href="#!" class="brand-logo">Logo</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="sass.html">Sass</a></li>
          <li><a href="badges.html">Components</a></li>
          <li><a href="collapsible.html">Javascript</a></li>
          <li><a href="mobile.html">Mobile</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="sass.html">Sass</a></li>
          <li><a href="badges.html">Components</a></li>
          <li><a href="collapsible.html">Javascript</a></li>
          <li><a href="mobile.html">Mobile</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>
  <!--Contenido de las demas paginas-->
  <div>
     @yield('content')
  </div>
  <!--Fin de contenido-->

  <!--footer-->
   <footer class="page-footer blue darken-3">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          Año 2016 - Telemdicina waka
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
   </footer>

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