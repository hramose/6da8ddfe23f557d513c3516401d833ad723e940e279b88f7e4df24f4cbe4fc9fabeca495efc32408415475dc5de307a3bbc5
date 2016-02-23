@extends('layouts.master')<!--padre-->

@section('title', 'login')<!--title-->


@section('content')
<!--formulario login-->
    <div class="container">  
        <div class="row center-align">
            <div class="col l12 m12 s12">
                <form class="col s12" role="form" method="POST" action="{{ url('/mylogin') }}">
                {!! csrf_field() !!}
                    <div class="row ">
                        <div class="input-field col l6 s12">
                            <i class="mdi-action-account-circle prefix "></i>
                            <input id="username" name="username" type="text" class="validate ">
                            <label for="username" class="">Ingresa tu nombre de usuario</label>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="input-field col l6 s12">
                            <i class="mdi-communication-vpn-key prefix"></i>
                            <input id="password" name="password" type="password" class="validate " >
                            <label for="password" class="">Ingresa tu contraseña</label>
                        </div>
                    </div>
                    <input type="submit" value='Ingresar' class="btn waves-effect waves-light blue darken-1" >
					<input type="reset" value="Limpiar" class="btn waves-effect waves-light red darken-1" >
                </form>
	                
            </div>
        </div>
    </div>
</footer>
@endsection