<?php
require ("../php/funciones.php"); 
$conexion = conectar();
	
	$result = mysql_query("DELETE FROM imagenes_muestras WHERE idImagenMuestra = ".$_POST['image'] );
	if(!$result)
	{
		echo "La imagen no se pudo borrar. Intenta nuevamente.";
	}
	else
        {
            echo "La imagen se borró correctamente.";
        }
        
?>