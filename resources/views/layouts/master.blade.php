<!DOCTYPE html>
<html>
    <head>
        <title>App Name - @yield('title')</title>
        <!--Import Google Icon Font and Lato Font-->
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css" >
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link href="{{ URL::asset('css/materialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
        <!--Import custom css-->
        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        @section('sidebar')
            <p>This is the master sidebar.</p>
        @show

        <div class="container">
            @yield('content')
        </div>

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
        <script type="text/javascript" src="{{ URL::asset('js/materialize.min.js') }}"></script>
    </body>
</html>
