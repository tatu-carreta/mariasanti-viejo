<?php
require ("../php/funciones.php"); 
$conexion = conectar();
	
	$result = mysql_query("INSERT INTO muestras ( Nota ) VALUES ('Muestra')");
	if(!$result)
	{
		die('insertar muestra');
	}
	
	$idMuestra = mysql_insert_id();
	
	$result = mysql_query("INSERT INTO titulos_muestras (idMuestra, tituloMuestra, IdiomaTituloMuestra) VALUES ('".$idMuestra."', '".$_POST['title']."', '".$_POST['lang']."')" );
	if(!$result)
	{
		die("INSERT INTO titulos_grupos (idGrupo, tituloGrupo, IdiomaTituloGrupo) VALUES ('".$idMuestra."', '".$_POST['title']."', '".$_POST['lang']."')");
	}
	
        $result = mysql_query("INSERT INTO descripciones_muestras (idMuestra, descripcionMuestra, idiomaDescripcionMuestra) VALUES('".$idMuestra."','".$_POST['descript']."','".$_POST['lang']."')");
        if(!$result)
        {
            die("INSERT DESCRIPCION");
        }
        
        
	echo json_encode($idMuestra);
	
	
?>