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
		<div class="col-lg-6 col-sm-6 col-xs-12 ">
			<div class="center login-panel panel panel-default">
				<div class="panel-heading center-block">
					<p class="center-block">Importante!!</p>
				</div>
				<div class="panel-body">
					<div class="justificado">
						<b><p>Reglas</p></b>
						<p>1.- Solo podran ingresar usuarios que se encuentren previamente registrados dentro de la plataforma.</p>
						<p>2.- Si tu eres paciente entonces no podras ver mas que tu historial clinico, no podras realizar ninguna modificacion sobre la informacion que logras vizualizar.</p>
						<p>3.- Si eres medico entonces podras desarrollar las funciones que te competen como rol, mas no podras desarrollar otro tipo de acividades que no competan con tu rol.</p>
					</div>
					<div class="justificado">
							<b><p>Soy Nuevo</p></b>
							<p>1.- Solo podran ingresar usuarios que se encuentren previamente registrados dentro de la plataforma.</p>
							<p>2.- Si tu eres paciente entonces no podras ver mas que tu historial clinico, no podras realizar ninguna modificacion sobre la informacion que logras vizualizar.</p>
						</div>				
					<div class="justificado">
						<p><a href="">Quiero obtener una cuenta</a></p>
					</div>
					<div class="justificado">
						<p><a href="">Sacame de Aqui!!</a></p>
					</div>
				</div>

			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-xs-12 ">
			<div class="center login-panel panel panel-default">
				<div class="panel-heading center-block">
					<p class="center-block">Chatea con expertos</p>
				</div>
				<div class="panel-body">
					<div class="center">
						<img src="img/giphy2.gif" width="auto" height="auto" class="img-responsive blur" alt="">
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
