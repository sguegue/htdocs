<?php
echo 	"<script>
				var objBuscar= document.createElement('button');
				objBuscar.innerHTML='Buscar';
				objBuscar.id='buscar';
				objBuscar.class='btn';
				objCP.appendChild(objBuscar);
				objBuscar.setAttribute("class","btn");
			
				var objAlta= document.createElement('button');
				objAlta.innerHTML='Alta';
				objAlta.id='alta';
				objAlta.class='btn';
				objCP.appendChild(objAlta);
				objAlta.setAttribute("class","btn");
				objAlta.onclick=function(){
					location.href = ".Alta/alta.php";
				}

				var objBorrar= document.createElement('button');
				objBorrar.innerHTML='Borrar';
				objBorrar.class='btn';
				objBorrar.id='borrar_filtro';
				objBorrar.setAttribute("class","btn");
				objCP.appendChild(objBorrar);
				objBorrar.onclick=function(){
					
				}

				var objInpB= document.createElement('input');
				objInpB.id='busca';
				objInpB.name='busca';
				objInpB.placeholder="Buscar...";
				objCP.appendChild(objInpB);
		}
		</script>";
?>