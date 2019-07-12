<?php
	/* Verifico si hay sesion iniciada*/
	session_start();
	if (!isset($_SESSION['idSesion']))
	{
		/* si no redirecciono a la web para el login */
		header('Location:./login/login.php');
		exit();
	};	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nuevo</title>
	<link rel="stylesheet" type="text/css" href="../estilo.css">
</head>
<body>
<div id="topbar"> 
		<img src="../img/8.png" width="30px" height="30px" class="sesend" ><a class="sesend"><?php echo $_SESSION['usuario'] ?></a>
</div>

<div id="contenido">

<form method="POST" action="./editar.php">

	<fieldset id="fldstMod">
	<legend>Alta registro</legend>

		<label for="nombre">Nombre</label></br>
		<input type="text" name="nombre"  placeholder="Nombre"autofocus ></input></br>

		<label for="apellido">Apellido</label></br>
		<input type="text" name="apellido" placeholder="Apellido"></input></br>

		<label for="legajo">Legajo</label></br>
		<input type="number" name="legajo" id="precio" value= ""></input></br>

		<label for="mail">Mail</label></br>
		<input type="email" name="mail" id = "mail" placeholder="Mail"></input></br>

		<input type="submit" id="enviar" value="Enviar" disabled></input>
	</fieldset>
</form>

</div>
	<script>
		
	</script>

</body>
</html>
