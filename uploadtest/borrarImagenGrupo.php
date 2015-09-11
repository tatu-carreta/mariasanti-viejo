<?php
require ("../php/funciones.php"); 
$conexion = conectar();
	
	$result = mysql_query("SELECT * FROM imagenes_grupos WHERE  idImagenGrupo = ".$_POST['image']);
	
	$row = mysql_fetch_array($result);
	
	$result = mysql_query("DELETE FROM imagenes_grupos WHERE idGrupo = ".$row['idGrupo']." AND Orden = ".$row['Orden']);
	if(!$result)
	{
		echo "La imagen no se pudo borrar. Intenta nuevamente.";
	}
	else
        {
            echo "La imagen se borró correctamente.";
        }
        
?>