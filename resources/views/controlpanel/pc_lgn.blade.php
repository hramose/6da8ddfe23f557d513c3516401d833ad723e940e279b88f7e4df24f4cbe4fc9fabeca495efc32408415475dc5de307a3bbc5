<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>

<!--flexbox-->
<script src="js/index.js"></script>


<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>	
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header center">
          <a href="">
          	<h2 class="navbar-brand vcenter" href="#">Telemedicina oftalmologica</h2> 
          </a>
        </div>
      </div>
</nav>
<div class='vdivisor'>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-sm-7 col-xs-12 ">
			<div class="center login-panel panel panel-default">
				<div class="panel-heading center-block">
					<p class="center-block">Recomendaciones</p>
				</div>
				<div class="panel-body">
					<div class="justificado">
						<p>Te recomendamos leer las siguientes indicaciones antes de ingresar al panel de control del sistema de red telemedica oftalmologica, para una mejor experiencia tuya.</p>
						<p>1.- Solo podran ingresar usuarios que se encuentren previamente registrados dentro de la plataforma.</p>
						<p>2.- Si tu eres paciente entonces no podras ver mas que tu historial clinico, no podras realizar ninguna modificacion sobre la informacion que logras vizualizar.</p>
						<p>3.- Si eres medico entonces podras desarrollar las funciones que te competen como rol, mas no podras desarrollar otro tipo de acividades que no competan con tu rol.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-sm-5 col-xs-12 ">
			<div class="center login-panel panel panel-default">
				<div class="panel-heading center-block">
					<p class="center-block">Acceso al sistema</p>
				</div>
				<div class="panel-body">
					<form role="form" action="post">
						<fieldset>
							<div class="form-group img-responsive">
								<img src="img/iconodoc.jpg" class='center-block img-borderraius50 img-responsive' alt="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Nombre de usuario" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
							</div>
							<div class="center">
								<a href="" class="btn btn-primary">Ingresar</a>
								<input type="reset" class="btn btn-teal" value="Limpiar">
							</div>
							<div class="center form-group">
								</br>
								<div>
									<a name="recoveryaccount" class="center" value="Recuperar mi Cuenta">Recuperar contraseña
									</a>	
								</div>
								<div>
									<a name="createaccount" class="center" value="Crear nueva mi cuenta">Crear  Nueva cuenta
									</a>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-sm-6 col-xs-12 ">
			<div class="center login-panel panel panel-default">
				<div class="panel-heading center-block">
					<p class="center-block">Que  ofrecemos?</p>
				</div>
				<div class="panel-body">
					<div class="center">
						<div id="myCarousel" class="carousel slide center" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#myCarousel" data-slide-to="1"></li>
						    <li data-target="#myCarousel" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img src="img/avatar4.png" alt="">
						    </div>

						    <div class="item">
						      <img src="img/avatar3.png" alt="">
						    </div>

						    <div class="item">
						      <img src="img/avatar1.png" alt="">
						    </div>
						  </div>

						  <!-- Left and right controls -->
						  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
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
