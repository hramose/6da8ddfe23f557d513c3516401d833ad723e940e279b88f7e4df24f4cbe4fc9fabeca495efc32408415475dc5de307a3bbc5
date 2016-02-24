<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row center-block ">
		<div class="col-xs-12 col-sm-5 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="center login-panel panel panel-default">
				<div class="panel-heading center-block">
					<p class="center-block">Acceso al sistema</p>
				</div>
				<div class="panel-body">
					<form role="form">
						<fieldset>
							<div class="form-group img-responsive">
								<img src="img/img-user-300x300.jpg" class='center-block img-borderraius50 img-responsive' alt="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Nombre de usuario" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<a name="recovery" value="Remember Me">Recuperar contraseña
								</a>
								</br>
								<a name="recovery" value="Remember Me">Crear  Nueva cuenta
								</a>
							</div>
							<div class="center">
								<a href="index.html" class="btn btn-primary">Ingresar</a>
								<input type="reset" class="btn btn-teal" value="Limpiar">
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

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
