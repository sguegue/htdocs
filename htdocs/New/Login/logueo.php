<?php
/* Obetener datos del formulario */
$usuario = $_POST['user'];
$clave = $_POST['pass'];
$clave = sha1($clave);
/* Conexion a base de datos*/
	/* configuracion */
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
	/* Creo cadena a consultar */
	$query = "SELECT * FROM usuarios WHERE user='".$usuario."' and pass='".$clave."'";
	/* Consulto cadena en la base de datos*/
	$resultado = mysqli_query($conexion,$query);


	/* Convierto la consulta a un array*/
	$tabla= mysqli_fetch_assoc($resultado);
	/* Verifico si hay datos*/
	if($tabla['id'] > 0){
		/* Inicio sesion y seteo valores de la sesion */
		session_start();
		$_SESSION['idSesion'] = session_id();
		$_SESSION['usuario'] = $tabla['user'];
	}
}
/* Redirecciono a la web logeado*/
header('Location: ../index.html');
?>