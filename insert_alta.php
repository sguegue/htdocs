<?php  
DEFINE('SERVIDOR','localhost');
DEFINE('USUARIO','ubd23');
DEFINE('CLAVE','invitado23');
DEFINE('BASE','bd23');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$legajo = $_POST['legajo'];
$mail = $_POST['mail'];

if(!$conexion = mysqli_connect(SERVIDOR,USUARIO,CLAVE,BASE)){
 	/* Si no puedo conectar muestro mensaje de error */
	echo "Error de Conexion";
 	exit();
}else{

	$query="INSERT INTO planta VALUES('".$nombre."','".$apellido."', $legajo, '".$mail."') ";
	$consulta = mysqli_query($conexion,$query);

	if (!$consulta) {
		echo "Error al insertar el registro!";
		echo "$nombre";
		echo "$apellido";
		echo "$legajo";
		echo "$mail";
		exit();
	}
	else{
		echo "El registro se ha insertado.";
	} 
}

header('Location: ./index.php');

?>