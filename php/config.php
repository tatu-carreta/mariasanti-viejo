<?php
session_start(); //comentar esta linea si no se trabaja con sesiones
$localhost = true; //define si se esta trabajando a modo local o no
$proyecto = "MariaSanti";
//define("URL_PRODUCCION", "http://www.mariasanti.com/");
define("URL_PRODUCCION","http://200.58.126.242/~mariasan/");
define("URL_LOCAL", "http://localhost/mariasanti/");

if (!$localhost)
{
	define("REDIRECT_PATH" , URL_PRODUCCION); //URL absoluta a donde redirige luego de iniciar o cerrar sesion
	define("PATH_HOME", URL_PRODUCCION."");
	define("PATH_CSS", URL_PRODUCCION."css/");
	define("PATH_PHP", URL_PRODUCCION."php/");
	define("PATH_HTML", URL_PRODUCCION."templates/");
	define("PATH_JS", URL_PRODUCCION."js/");
	define("PATH_ADMIN", URL_PRODUCCION."admin/");
	define("PATH_IMAGES", URL_PRODUCCION."images/");
        define("PATH_IMAGES_SERIES", URL_PRODUCCION."images/slide-series/");
        define("PATH_IMAGES_GRUPOS", URL_PRODUCCION."images/grupos/");
        define("PATH_IMAGES_MUESTRAS", URL_PRODUCCION."images/muestras/");
        define("PATH_IMAGES_GRUPOS_AMPLIADA", URL_PRODUCCION."images/grupos/ampliadas/");
        define("PATH_IMAGES_GRUPOS_MINIATURA", URL_PRODUCCION."images/grupos/miniaturas/");
        define("PATH_UPLOAD", URL_PRODUCCION."uploadtest/");
}
else
{
	define("REDIRECT_PATH" , URL_LOCAL); //URL absoluta a donde redirige luego de iniciar o cerrar sesion
	define("PATH_HOME", URL_LOCAL);
	define("PATH_CSS", URL_LOCAL."css/");
	define("PATH_PHP", URL_LOCAL."php/");
	define("PATH_HTML", URL_LOCAL."templates/");
	define("PATH_JS", URL_LOCAL."js/");
	define("PATH_ADMIN", URL_LOCAL."admin/");
	define("PATH_IMAGES", URL_LOCAL."images/");
        define("PATH_IMAGES_SERIES", URL_LOCAL."images/slide-series/");
        define("PATH_IMAGES_GRUPOS", URL_LOCAL."images/grupos/");
        define("PATH_IMAGES_MUESTRAS", URL_LOCAL."images/muestras/");
        define("PATH_IMAGES_GRUPOS_AMPLIADA", URL_LOCAL."images/grupos/ampliadas/");
        define("PATH_IMAGES_GRUPOS_MINIATURA", URL_LOCAL."images/grupos/miniaturas/");
        define("PATH_UPLOAD", URL_LOCAL."uploadtest/");
}

$redirect_path = REDIRECT_PATH;

$aDb = array(
				'nombre_de_la_tabla' => array(
											"campo_de_la_tabla" => "tipo_de_dato",
											"campo_de_la_tabla" => "tipo_de_dato",
											"campo_de_la_tabla" => "tipo_de_dato",
				),
				
				'nombre_de_la_tabla' => array(
											"campo_de_la_tabla" => "tipo_de_dato",
											"campo_de_la_tabla" => "tipo_de_dato",
											
				),
				

);

$aConfig = array(
					
				//CONFIG BASE DE DATOS
				'usuario_db' => 'root',
				'clave_usuario_db' => '',
				'db_seleccionada' => '',
				
				//CONFIG FORMULARIOS
				'campos_form' => array(
									"nombre" => "text",
									"imagen" => "file"
									
									
				),
				
);

//////////TEXTOS///////////////
/*
$textos = "_ES";
$textos = "_EN";
*/

if(isset($_SESSION['lang']))
{
    $idioma = $_SESSION['lang'];
}
else
{
    $_SESSION['lang'] = "es";
    $idioma = "es";
}

if($idioma == "es")
{
    $textos = "_ES";
}
else
{
    $textos = "_EN";
}

/*
 * Establece los path del index para poder hacer el require de los textos
 */

if($localhost)
{
    $indexPath = "/mariasanti/index.php";
    $indexPathAlternative = "/mariasanti/";
}
else
{
    $indexPath = "/~mariasan/index.php";
    $indexPathAlternative = "/~mariasan/";
}

//if(($_SERVER['REQUEST_URI'] == "/mariasanti/index.php" || ($_SERVER['REQUEST_URI'] == "/mariasanti/"))
if(($_SERVER['REQUEST_URI'] == $indexPath) || ($_SERVER['REQUEST_URI'] == $indexPathAlternative))
{
    require("texts/".$textos."/texts.php");
}
else
{
    require("../texts/".$textos."/texts.php");
}

?>