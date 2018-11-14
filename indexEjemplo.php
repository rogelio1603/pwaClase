<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="https://wayf.ucol.mx/ucol_mini.png"/>
    <link rel="shortcut" href="img/icon2-ucol-128.png"  type="image/x-icon" >
	<link rel="apple-touch-icon" href="https://wayf.ucol.mx/ucol_mini.png" />
	<link rel="manifest" href="/asistencia/manifest.json">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Directorio_Royer">
	<link rel="apple-touch-icon" href="img/icon2-ucol-128.png">
	<meta name="application-name" content="Directorio_Royer"/>
	<meta name="msapplication-TileImage" content="img/icon2-ucol-128.png">
	<meta name="msapplication-TileColor" content="#2F3BA2">
    <title>Universidad de Colima</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
  </head>

  <body>
    <div class="container" id="form-center">
	        <div class="form-signin-heading">
				<img src="img/ucol_black.png" class="img-fluid" alt="logo">
				<h5>PWA</h5>
	        </div>
	        <button class="btn btn-lg btn-info btn-ucol btn-block" id="ini" type="submit">Iniciar sesión</button>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="dist/js/vendor/jquery-3.2.1.slim.min.js"><\/script>')</script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="dist/js/vendor/ie10-viewport-bug-workaround.js"></script>
    <script>
	    $( '#ini' ).on( 'click', function() {
		 	window.location.href = "planteles.php";
		});
		 if(navigator.userAgent.match(/Android/i)){
			window.scrollTo(0,1);
		}
    </script>
	<script src="index.js"></script>	
  </body>
</html>
