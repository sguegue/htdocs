<?php

DEFINE('SERVIDOR','localhost');
DEFINE('USUARIO','ubd23');
DEFINE('CLAVE','invitado23');
DEFINE('BASE','bd23');


/* intento conectar */
if(!$conexion = mysqli_connect(SERVIDOR,USUARIO,CLAVE,BASE)){
	/* Si no puedo conectar muestro mensaje de error */
	echo "Error de Conexion";
	exit();
}else{
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$legajo = $_POST['legajo'];
	$mail = $_POST['mail'];
	
	$query = "UPDATE planta SET nombre = '".$nombre."', apellido = '".$apellido."',mail WHERE legajo=".$legajo;
	/* Consulto cadena en la base de datos*/
	mysqli_query($conexion,$query);
	}
	/* Redirecciono a la web logeado*/
	header('Location: ../index.php');
?>