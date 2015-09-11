<?php

    require_once '../php/funciones.php';
    
    if($_POST['idGrupo'])
    {
        $idGrupo = $_POST['idGrupo'];
        $estadoBaja = realizarBajaPorIdGrupo($idGrupo);
        
    }
    else
    {
        $text = "Hubo un error al querer dar de baja al grupo. Intente nuevamente.";
    }
    
    if($estadoBaja == 1)
    {
        $text = "El grupo se ha borrado correctamente.";
    }
    else
    {
        $text = "Hubo un error al querer dar de baja al grupo. Intente nuevamente.";
    }

    $data = array(
        "texto" => $text,
        "estado" => $estadoBaja
    );
    
    echo json_encode($data);
?>
