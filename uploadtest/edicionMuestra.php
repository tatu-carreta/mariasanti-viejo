<?php
require ("../php/funciones.php"); 
$conexion = conectar();
	
	$idMuestra = $_POST['muestra'];
	
	$result = mysql_query("UPDATE titulos_muestras SET tituloMuestra = '".$_POST['title']."' WHERE idMuestra = ".$idMuestra );
	if(!$result)
	{
		die("UPDATE titulo");
	}
	
        $result = mysql_query("UPDATE descripciones_muestras SET descripcionMuestra = '".$_POST['descript']."' WHERE idMuestra = ".$idMuestra);
        if(!$result)
        {
            die("UPDATE DESCRIPCION");
        }
        
        
	echo $idMuestra;
	
	
?>