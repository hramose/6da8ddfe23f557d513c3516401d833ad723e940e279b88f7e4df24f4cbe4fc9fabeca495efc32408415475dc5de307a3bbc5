<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Control - Panel</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Control</span>Panel</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<svg class="glyph stroked male-user">
							<use xlink:href="#stroked-male-user"></use>
							</svg> 
								<!-- Authentication Links -->
			                    
			                    @if (Auth::check())
	                                {{ Auth::user()->getFullName() }}
			                    @endif
							<span class="caret">
							</span>
						</a>
						<ul class="dropdown-menu" role="menu">
							@if (Auth::guest())
			                        <li><a href="{{ url('/login') }}">Login</a></li>
			                        <li><a href="{{ url('/register') }}">Register</a></li>
		                    @else
								<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Perfil</a></li>
								<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Configuracion</a></li>
								<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Salir</a></li>
							@endif
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Buscar">
			</div>
		</form>
		<ul class="nav menu">
			<!--Paciente-->
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-8">
						<svg class="glyph stroked chevron-down">
							<use xlink:href="#stroked-chevron-down"></use>
						</svg>
					</span> Paciente
				</a>
				<ul class="children collapse" id="sub-item-8">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Buscar Paciente
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Registrar Paciente
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Actualizar Paciente
						</a>
					</li>
				</ul>
			</li>			
			<!--Medico-->
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-7">
						<svg class="glyph stroked male user ">
							<use xlink:href="#stroked-male-user"/>
						</svg>
					</span> Medico
				</a>
				<ul class="children collapse" id="sub-item-7">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Buscar Medico
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Registrar Medico
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Actualizar Medico
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Deshabilitar Medico
						</a>
					</li>
				</ul>
			</li>
			<!--Historias Clinicas-->
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-6">
						<svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/>
						</svg>
					</span> Historias Clinicas
				</a>
				<ul class="children collapse" id="sub-item-6">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Hitorias Clinicas
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Triaje y datos clinicos
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Examen regional
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Procedimientos
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Diagnostico Presuntivo
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Diagnostico definitivo
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Servicios Auxiliares
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Receta Medica
						</a>
					</li>
				</ul>
			</li>
			<!--Historias Clinicas-->
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-100">
						<svg class="glyph stroked chevron-down">
							<use xlink:href="#stroked-chevron-down"></use>
						</svg>
					</span> Asistencia Medica
				</a>
				<ul class="children collapse" id="sub-item-100">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Envio de ambulancias
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Control y seguimiento
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Comunicacion de entidad
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Comunicacion Paciente
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Primeros Auxilios
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Emergencia/Urgencia
						</a>
					</li>
				</ul>
			</li>
			<!--Biblioteca Medica-->
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-4">
						<svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>
					</span> Biblioteca Medica 
				</a>
				<ul class="children collapse" id="sub-item-4">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Buscar Biblioteca
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Diag. especializado
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/>
							</svg> Protocolos medicos
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Guias medicas
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Guias de salud
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Manuales Clinicos
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Posologia Farmaceutica
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Libros especializados
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Publicaciones medicas
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Investigaciones
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked video">
								<use xlink:href="#stroked-video"/>
								</use>
							</svg> Videos seleccionados
						</a>
					</li>

				</ul>
			</li>
			<!--Protocolo-->
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-3">
						<svg class="glyph stroked chevron-down">
							<use xlink:href="#stroked-chevron-down"></use>
						</svg>
					</span> Protocolo 
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Buscar Protocolo
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Registrar Protocolo
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Actualizar Protocolo
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Eliminar  Protocolo
						</a>
					</li>
				</ul>
			</li>
			<!--Administrador-->
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1">
						<svg class="glyph stroked chevron-down">
							<use xlink:href="#stroked-chevron-down"></use>
						</svg>
					</span> Administrador 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Buscar usuario
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Actualizar usuario
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Actualizar Informacion
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Deshabilitar usuario
						</a>
					</li>
				</ul>
			</li>
			<!--Organizacion-->
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-2">
						<svg class="glyph stroked chevron-down">
							<use xlink:href="#stroked-chevron-down"></use>
						</svg>
					</span> Organizacion 
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Ver informacion
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right">
								</use>
							</svg> Registrar Informacion
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right">
								<use xlink:href="#stroked-chevron-right"></use>
							</svg> Actualizar Informacion
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Cerrar Sesion</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<!--li class="active">Icons</li-->
			</ol>
		</div><!--/.row-->
		
<!--cuerpo-->
  <div>
     @yield('content')
  </div>
<!--fincuerpo-->

		</div><!--/.row-->
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
