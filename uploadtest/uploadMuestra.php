<?php

require ("../php/funciones.php"); 
require_once ('SimpleImage.php');
 
// We're putting all our files in a directory called images.
$uploaddir = '../images/muestras/';


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
	
	if($image->get_height() > 180)
	{
		$image->fit_to_height(180);
	}

  // NO AJUSTA EL ANCHO
	
	$image->save($uploaddir.$randomName);
	echo $uploaddir.$randomName;
	//SUBIR A LA BD
	
	$conexion = conectar();
	
	$idMuestra = $_POST["muestra"];
	
	
	//INSERTAR IMAGENES
	
	$result = mysql_query("INSERT INTO imagenes_muestras ( idMuestra, nombreImagenMuestra) 
	
                            VALUES ('".$idMuestra."','".$randomName."')");
	if (!$result)
	{
		die("no se realizo la consulta");
	}
	
	echo $randomName.":se ha subido correctamente";
}
else {
	// Show an error message should something go wrong.
	echo "Hubo algún error. Verifique que el archivo no esté dañado";
}


?>

