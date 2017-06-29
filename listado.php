<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

	<title></title>
	    <meta name="viewport" content="width=device-width">
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
<div class="container" style="text-align: center">
								<a href="#" ">Lista de usuarios</a>
								<hr>
								<div class="panel panel-default">
								
								<div class="table-responsive">
							
<?php


echo "<table class='table table-striped' responsive>";  
echo "<thead>";
echo "<tr>";  
echo "<th  style='text-align:center'>#</th>";  

echo "<th  style='text-align:center'>Nombre</th>";  
echo "<th  style='text-align:center'>Telefono</th>";  
echo "<th  style='text-align:center'>Email  </th>";  
echo "<th  style='text-align:center'>Amigos  </th>"; 


echo "</tr>"; 
echo "</thead>"; 
while ($registro = mysql_fetch_array($tabla))
{
	echo "<tbody>";
	   echo "<tr>"; 
	       echo "<td>".$registro['codUsuario']."</td>";

    echo "<td>".$registro['nombre']."</td>";
        echo "<td>".$registro['telefono']."</td>";
            echo "<td>".$registro['email']."</td>";
            echo "<td>".$registro['amigos']."</td";
    echo "</tr>";
    echo "</tbody>";
}
echo "</table>";
?>
</div>
</div>
</div>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</body>
</html>