<?php

require_once '../php/funciones.php';

if (isset($_POST))
{
    $texto = $_POST['textoConcepto'];
    $idTexto = $_POST['idConcepto'];
    $idioma = $_POST['idioma'];
    
    if ( ( !is_string($texto) && !is_numeric($texto) ) )
        continue;

    if ( get_magic_quotes_gpc() )
        //$texto = htmlspecialchars( stripslashes((string)$texto) );
        $texto = stripslashes ((string)$texto);
    else
        //$texto = htmlspecialchars( (string)$texto );
        $texto = (string)$texto;
            
    $estadoModificacion = realizarModificacionConceptoPorIdPorIdioma($texto, $idTexto, $idioma); 
}
else
{
    $estadoModificacion = -1;
}

if($estadoModificacion == 1)
{
    echo "El concepto se cargó correctamente.";
}
else
{
    echo "Hubo un error al cargar el texto.";
}

?>
