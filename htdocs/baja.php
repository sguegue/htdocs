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
	$id = $_POST["id"];

	$consulta = mysqli_query($conexion,"DELETE FROM planta WHERE legajo= $id "); 

	if (!$consulta) {
		echo "Error al elimiar el registro!";
		exit();
	}
	else{
		echo "El registro se ha eliminado.";
	}
}
?>