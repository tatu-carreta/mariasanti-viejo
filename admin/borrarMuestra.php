<?php

    require_once '../php/funciones.php';
    
    if($_POST['idMuestra'])
    {
        $idMuestra = $_POST['idMuestra'];
        $estadoBaja = realizarBajaPorIdMuestra($idMuestra);
        
    }
    else
    {
        $text = "Hubo un error al querer dar de baja la muestra. Intente nuevamente.";
    }
    
    if($estadoBaja == 1)
    {
        $text = "La muestra se ha borrado correctamente.";
    }
    else
    {
        $text = "Hubo un error al querer dar de baja la muestra. Intente nuevamente.";
    }

    $data = array(
        "texto" => $text,
        "estado" => $estadoBaja
    );
    
    echo json_encode($data);
?>
