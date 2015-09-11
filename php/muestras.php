<?php
	include_once('config.php'); 
	include_once('funciones.php');
	////////HTML//////////////////
	include_once('../templates/head.php');
	/*
		SACAR ESTO DESPUES
	*/
?>
</head>

<body id="interiores">
<div id="cabecera">
<div id="cont-cabecera">
<h1>maría santi </h1>
<?php require_once ("../templates/menu.php")?>
</div><!--cierra cont-cabecera-->
</div><!--cierra cabecera-->

<div id="cuerpo">
    
    <h2><?php echo ucfirst($text['muestras'])?></h2>
    <?php
        if(isset($_SESSION['Usuario']))
        {
            if($_SESSION['Usuario'] == "checked")
            {
                ?>
    <div class="btnGrupo">
        <input type="button" value="Nueva Muestra" class="nuevaMuestra btnAdmin" />
    </div>
    <?php
            }
        }
    ?>
    <?php
        $muestras = obtenerMuestrasPorIdioma();
        
        switch ($muestras)
        {
            case -1:
                break;
            case 0:
                break;
            default :
                    while($datoMuestra = mysql_fetch_array($muestras))
                    {
                        $infoMuestra = obtenerDatosMuestrasPorIdMuestra($datoMuestra['idMuestra'], $idioma);
                        
                        ?>
    <h4><?php echo $infoMuestra['tituloMuestra'] ?></h4>
    
    <p class="descripcionMuestra"><?php echo $infoMuestra['descripcionMuestra'] ?></p>
    <div class="muestras">
                        <?php
                            $imagenes = obtenerImagenesPorIdMuestra($infoMuestra['idMuestra']);
                            
                            switch ($imagenes)
                            {
                                case -1:
                                break;
                                case 0:
                                break;
                                default :
                                    while($datoImagen = mysql_fetch_array($imagenes))
                                {
                                    ?>
        <img src="<?php echo PATH_IMAGES_MUESTRAS.$datoImagen['nombreImagenMuestra'] ?>" />
                                    <?php
                                }
                                break;
                            }
    ?>    
    </div>
    <?php
        if(isset($_SESSION['Usuario']))
        {
            if($_SESSION['Usuario'] == "checked")
            {
                ?>
        <input class="editarMuestra btnAdmin" type="button" value="Editar Muestra" data="<?php echo $datoMuestra['idMuestra'] ?>"/>
    <input type="button" class="borrarMuestra btnAdmin" value="Borrar Muestra" data="<?php echo $datoMuestra['idMuestra'] ?>"/>
                    <?php
            }
        }
    ?>
                        <?php
                    }
                break;
        }
    ?>
    <div id="agregarNuevaMuestra" style="display: none"></div>
</div><!--cierra cuerpo-->
<?php require_once ("../templates/footer.php")?>
</body>
</html>