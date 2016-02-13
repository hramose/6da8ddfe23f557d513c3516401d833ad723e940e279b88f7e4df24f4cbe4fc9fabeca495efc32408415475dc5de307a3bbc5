@extends('layouts.master')<!--padre-->

@section('title', 'login')<!--title-->


@section('content')
<!--formulario login-->
    <div class="container">  
        <div class="row">
            <div class="col l12 m12 s12">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col l6 s12">
                            <i class="mdi-action-account-circle prefix "></i>
                            <input id="usernam" type="text" class="validate ">
                            <label for="usernam" class="">Nombres completos</label>
                        </div>
                        <div class="input-field col l6 s12">
                            <i class="mdi-communication-vpn-key prefix"></i>
                            <input id="password" type="password" class="validate " >
                            <label for="password" class="">Ingresa contraseña</label>
                        </div>
                    </div>
                    <input type="submit" value='Ingresar' id='submit' class="btn waves-effect waves-light blue darken-1" >
					<input type="reset" id='reset' value="Limpiar" class="btn waves-effect waves-light red darken-1" >
                </form>
	                
            </div>
        </div>
    </div>
</footer>
@endsection