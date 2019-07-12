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

	if(isset($_POST['busca']))
		$orden= $_POST['busca'];
	else
		$orden= "Nombre";
	
	$consulta = mysqli_query($conexion, "SELECT * FROM planta oder by $orden");

	echo"<table>
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Legajo</th>
				<th>Mail</th>
				<th>Modificar</th>
				<th>Baja</th>
			</tr>

	";
	while($registro = mysqli_fetch_array($consulta)){
			echo "
			<tr>
				<td id='nombre'>".$registro["Nombre"]."</td>
				<td id='apellido'>".$registro["Apellido"]."</td>
				<td id='legajo'>".$registro["Legajo"]."</td>
				<td id='mail'>".$registro["Mail"]."</td>
				<td><button id='modi' data-id='".$registro["Legajo"]."'>Modificar</button> </td>				
				<td><button id='baja' data-id='".$registro["Legajo"]."'>Baja</button></td>
			</tr>";
	}

	echo "</table>";
}



?>