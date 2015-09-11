<?php

require ("../php/funciones.php"); 
require_once ('SimpleImage.php');
 
// We're putting all our files in a directory called images.
$uploaddir = '../images/grupos/ampliadas/';
$uploaddir_small = "../images/grupos/miniaturas/";

// The posted data, for reference
$file = $_POST['arrayImage']['value'];
$name = $_POST['arrayImage']['name'];
// Get the mime
$getMime = explode('.', $name);
$mime = end($getMime);

// Separate out the data
$data = explode(',', $file);

// Encode it correctly
$encodedData = str_replace(' ','+',$data[1]);
$decodedData = base64_decode($encodedData);

// You can use the name given, or create a random name.
// We will create a random name!

$randomName1 = substr_replace(sha1(microtime(true)), '', 12);
$randomName = $randomName1.'.'.$mime;


if(file_put_contents($uploaddir.$randomName, $decodedData)) {
	
	//CREAR MINIATURA
	
	$image = new SimpleImage();
	$image->load($uploaddir.$randomName);
	
	if($image->get_height() > 300)
	{
		$image->fit_to_height(300);
	}

	if($image->get_width() > 300)
	{
		$image->fit_to_width(300);
	} 
	
	$image->save($uploaddir_small.$randomName1.'_small.'.$mime);
	echo $uploaddir_small.$randomName1.'_small.'.$mime;
	//SUBIR A LA BD
	
	$conexion = conectar();
	
	$idGrupo = $_POST["group"];
	
	
	//INSERTAR IMAGENES
	
	$result = mysql_query("INSERT INTO imagenes_grupos ( idGrupo, nombreImagenGrupo, Tipo, Orden) VALUES ('".$idGrupo."','".$randomName."', 'G', '".$_POST['order']."')");
	if (!$result)
	{
		die("no se realizo la consulta");
	}
        
        $idChica = mysql_insert_id();
        
	$result = mysql_query("INSERT INTO imagenes_grupos ( idGrupo, nombreImagenGrupo, Tipo, Orden, idImagenRecursiva) VALUES ('".$idGrupo."','".$randomName1."_small.".$mime."', 'C', '".$_POST['order']."', '".$idChica."')");
	if (!$result)
	{
		die("no se realizo la consulta");
	}
        $idGrande = mysql_insert_id();
        
        $result = mysql_query("UPDATE imagenes_grupos SET idImagenRecursiva = ".$idGrande." WHERE idImagenGrupo = ".$idChica);
        if(!$result)
        {
            die("no se realizo la consulta");
        }
	
	
	$result = mysql_query("SELECT idImagenGrupo FROM imagenes_grupos WHERE idGrupo = ".$idGrupo." AND Orden ='".$_POST['order']."' AND Tipo = 'G'");
	$row = mysql_fetch_array($result);
	//agrega epigrafe
	$result = mysql_query("INSERT INTO epigrafes_imagenes_grupos ( idImagenGrupo, nombreEpigrafeGrupo, idiomaEpigrafeGrupo) VALUES ('".$idChica."','".$_POST['arrayText']."', 'es')");
	
	
	echo $randomName.":se ha subido correctamente";
}
else {
	// Show an error message should something go wrong.
	echo "Hubo algún error. Verifique que el archivo no esté dañado";
}


?>

