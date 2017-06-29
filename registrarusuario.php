
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

	<title></title>
	    <meta name="viewport" content="width=device-width">

	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<!-- Latest compiled and minified CSS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> <!--script ajax-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
										<?php
										include("navbar.html");
 
$servidor       = "localhost";
$usuario        = "root";
$clave          = "";
$basedatos      = "aitepractica";
 
$conexion       =mysql_connect ($servidor, $usuario, $clave) or die ('problema conectando porque :' . mysql_error());
mysql_select_db ($basedatos,$conexion);
 
$cadena         ="SELECT * FROM usuarios";
$tabla          = mysql_query($cadena, $conexion) or die ("problema con cadena de conexion<br><b>" . mysql_error()."</b>");

?>
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							
							<div style="text-align: center">
								<a href="#" id="register-form-link">Registro de Usuarios</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
						
								<form id="register-form" action="registro.php"  method="post" role="form" >
									<div class="form-group">
									<label>Nombres *:</label>
										<input type="text" name="nombre" id="username" tabindex="1" class="form-control" value="">
									</div>
									<div class="form-group">
									<label>Teléfono*:</label>
										<input type="text" name="telefono" id="email" tabindex="1" class="form-control" value="">
									</div>
									<div class="form-group">
									<label>E-mail:</label>
										<input type="email" name="email" id="password" tabindex="2" class="form-control" >
									</div>

									     <div class="form-group">
									<label>Amigos:</label><br>
                                       <?php 
                                       while ($registro = mysql_fetch_array($tabla))
                                       	{
                                       		echo "<input type='checkbox' name='amigos[]'*
                                       		 value='$registro[nombre]' >
                                       		 $registro[nombre]</br>";
                                       		}
                                       		?>
									</div>

	             

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="btn btn-success" value="Guardar">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>	
</body>
</html>