<?PHP

require 'conexion.php';

$usuarios = $enlace->query("SELECT nombre
FROM user WHERE nombreUsuario = '".$_POST['usuariolog']."'
AND password = '".$_POST['passlg']."'");

if($usuarios->num_rows == 1):
  $datos = $usuarios->fetch_assoc();
echo json_encode(array('error' => false));
else:
echo json_encode(array('error'=>true));
endif;

$enlace->close();
?>