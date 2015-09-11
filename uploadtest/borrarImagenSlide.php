<?php
require ("../php/funciones.php"); 
$conexion = conectar();
	
	$idDelete = $_POST['image'];
	
	$result = mysql_query("DELETE FROM imagenes_grupos WHERE idImagenGrupo = ".$idDelete);
	if(!$result)
	{
		echo "La imagen no se pudo borrar. Intenta nuevamente.";
	}
	else
        {
            echo "La imagen se borró correctamente.";
        }
        
?>