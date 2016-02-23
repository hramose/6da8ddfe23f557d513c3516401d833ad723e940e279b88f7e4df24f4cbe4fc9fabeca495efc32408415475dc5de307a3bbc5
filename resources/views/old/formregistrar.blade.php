@extends('layouts.master')<!--padre-->

@section('title', 'Portal Web')<!--title-->

@section('content')
<div class="container">  
        <div class="row">
            <div class="col l12 m12 s12">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col l6 s12">
                        <div class="dividir"></div>
                        <div class="section"></div>
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
<!--slogan dinamico-->
<div class="row">
	<div class="divider"></div>
  	<div class="section">
    	<h5>D.N.I.</h5>
    	<p>Stuff</p>
  	</div>
  	<div class="divider"></div>
  	<div class="section">
    	<h5>Apellidos</h5>
    	<p>Stuff</p>
  	</div>
  	<div class="divider"></div>
  	<div class="section">
    	<h5>Nombres</h5>
    	<p>Stuff</p>
  	</div>
 </div>
<div class="section scrollspy" id="work">
    <div class="container">
        <h2 class="header text_b">Registro de Usuario </h2>
        <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">auspiciador 1<br/>
                        <id=div ""
                        </span>
                       
                    </div>
       
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection