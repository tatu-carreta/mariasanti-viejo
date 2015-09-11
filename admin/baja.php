<?php
    require_once '../php/funciones.php';

    echo "USER = ". md5(encriptado('maria38'))."\n";
    echo "PASS = ".md5(encriptado('salvajeblanco'))."\n";
?>