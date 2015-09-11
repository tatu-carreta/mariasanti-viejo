<?php
require ("../php/funciones.php"); 
$conexion = conectar();
	
	$idImagen = $_POST['arrayImage']['id'];
        
	$result = mysql_query("SELECT * FROM imagenes_grupos WHERE  idImagenGrupo =".$idImagen);
		if(!$result)
	{
		die("UPDATE imagen chica");
	}
	
	$imagen_chica = mysql_fetch_array($result);
	
        /*
	$result = mysql_query("SELECT * FROM imagenes_grupos WHERE  idGrupo = '".$_POST['group']."' AND Orden = ".$imagen_chica['Orden']." AND Tipo ='G' " );
	if(!$result)
	{
		die("UPDATE imagen grande");
	}
	$imagen_grande = mysql_fetch_array($result);
	
        echo "IDIMAGENGRANDE RESULT -> ".$imagen_grande['idImagenGrupo']." - Orden grande -> ".$imagen_grande['Orden']."\n";
*/
	$result = mysql_query("UPDATE imagenes_grupos SET Orden = ".$_POST['order']." WHERE idImagenGrupo = ".$imagen_chica['idImagenGrupo']);
	$result = mysql_query("UPDATE imagenes_grupos SET Orden = ".$_POST['order']." WHERE idImagenGrupo = ".$imagen_chica['idImagenRecursiva']);
	
	
	if(isset($_POST['text']))
	{
		$text = $_POST['text'];
	}
	else
	{
		$text = '';
	}
	
	$result = mysql_query("UPDATE epigrafes_imagenes_grupos SET nombreEpigrafeGrupo = '".$text."' WHERE idImagenGrupo = ".$imagen_chica['idImagenRecursiva']);
	if(!$result)
	{
		die("UPDATE DESCRIPCION");
	}
        
	
	
?>