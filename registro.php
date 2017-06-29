<?php
// process form
$link = mysql_connect("localhost", "root");
mysql_select_db("aitepractica");

$nombre = $_POST["nombre"];

$telefono = $_POST["telefono"];
$email = $_POST["email"];
foreach ($_POST["amigos"] as $amigo);


$sql = "INSERT INTO usuarios (nombre, telefono, email, amigos) 
  VALUES ('$nombre','$telefono', '$email', '$amigo')";
$result = mysql_query($sql);
echo"<script language='javascript'>window.location='listado.php'</script>";

?>