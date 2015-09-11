<?php
require ("../php/funciones.php"); 
$conexion = conectar();
	
	//CREAR GRUPO
	
	$result = mysql_query("SELECT MAX(Orden) AS ultimo FROM grupos WHERE idSerie = ".$_POST['serie']);
	if(!$result)
	{
		die('select max');
	}
	$row = mysql_fetch_array($result);
	
	$newOrder = $row['ultimo'] +1;
	
	$result = mysql_query("INSERT INTO grupos (idSerie, Orden ) VALUES ('".$_POST['serie']."' , '".$newOrder."')");
	if(!$result)
	{
		die('insertar grupo');
	}
	
	$idGrupo = mysql_insert_id();
	
	$result = mysql_query("INSERT INTO titulos_grupos (idGrupo, tituloGrupo, IdiomaTituloGrupo) VALUES ('".$idGrupo."', '".$_POST['title']."', '".$_POST['lang']."')" );
	if(!$result)
	{
		die("No se ha podido crear el grupo");
	}
	
	echo json_encode($idGrupo);
	
	
?>