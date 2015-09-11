<?php
    session_start();
    session_destroy();
    
    if($_SERVER['HTTP_REFERER'] != PATH_HOME."carrito"){
        $path_anterior = $_SERVER['HTTP_REFERER'];
    }
    else
    {
        $path_anterior = PATH_HTML."obra.php";
    }
    header("Location:".$path_anterior);
?>
