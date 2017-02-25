<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url();?>bootstrap/Login/css/bootstrap.min.css" rel="stylesheet">    <!-- ESTO CAMBIE -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?=base_url();?>bootstrap/Login/css/ie10-viewport-bug-workaround.css" rel="stylesheet">   <!-- FATLA ESTE ARCHIVO BUSCARLO PORINTERNET -->

    <!-- Custom styles for this template -->
    <link href="<?=base_url();?>bootstrap/Login/css/ornamentals.css" rel="stylesheet"> <!-- ESTO CAMBIE para solo de esa pagina --> <!-- <link href="signin.css" rel="stylesheet">  -->    <!-- ESTE CSS LO AGREGUE Y SI TUBIERA ALGO PRIMERO LO EJECUTA Y DESPUES LOS OTROS CSS -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?=base_url();?>bootstrap/Login/js/ie-emulation-modes-warning.js"></script> 
    <script src="<?=base_url();?>bootstrap/Login/js/bootstrap.js"></script>
     <script src="<?=base_url();?>bootstrap/Login/js/bootstrap.min.js"></script>
      <script src="<?=base_url();?>bootstrap/Login/js/npm.js"></script>
      <script src="<?=base_url();?>bootstrap/Login/js/jquery-3.1.1.js"></script>
    
        <!-- ESTO CAMBIE -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>


<!-- Esto agregue para las columnas y centar dependiento tamaño de pantalla -->
    <div class="container">

<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ORNACOL</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Inicio</a></li>
              <li><a href="#">Mis Viveros</a></li>
              <li><a href="#">Mis Cultivos</a></li>
               <li><a href="#">Trazabilidad</a></li>
              <li class="dropdown">
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
    Action
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu">
    <!-- dropdown menu links -->
  </ul>
              </li>
            </ul>
           
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>


     <div class="row">
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lx-4 col-lx-offset-4">



      <form class="form-signin">
        <h2 class="form-signin-heading">Introduce tus credenciales</h2>
        <label for="inputEmail" class="sr-only">Correo electrónico</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recordarme
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div>
  </div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
