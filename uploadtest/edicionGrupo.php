<?php
require ("../php/funciones.php"); 
$conexion = conectar();
	
	//Editar titulo GRUPO
	
	$result = mysql_query("UPDATE titulos_grupos SET tituloGrupo = '".$_POST['title']."' WHERE idGrupo =".$_POST['group']." AND IdiomaTituloGrupo = '".$_POST['lang']."'");

?>