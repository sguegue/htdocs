<?php
DEFINE('SERVIDOR','localhost');
DEFINE('USUARIO','root');
DEFINE('CLAVE','');
DEFINE('BASE','bd23');


/* intento conectar */
if(!$conexion = mysqli_connect(SERVIDOR,USUARIO,CLAVE,BASE)){
 /* Si no puedo conectar muestro mensaje de error */
 echo "Error de Conexion";
 exit();
}else{

 if(isset($_POST['busca'])){
  $orden= $_POST['busca'];
  }
 else{
  $orden= "Nombre";
 }
 
 $consulta = mysqli_query($conexion, "SELECT * FROM planta order by '".$orden ."'");

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

   echo "<tr>
    <td id='nombre'>".$registro["NOMBRE"]."</td>
    <td id='apellido'>".$registro["APELLIDO"]."</td>
    <td id='legajo'>".$registro["LEGAJO"]."</td>
    <td id='mail'>".$registro["MAIL"]."</td>
    <td><button id='modi' data-id='".$registro["LEGAJO"]."'>Modificar</button> </td>    
    <td><button id='baja' data-id='".$registro["LEGAJO"]."'>Baja</button></td>
   </tr>";
 }

 echo "</table>";
}
?>