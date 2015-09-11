<?php
	include_once('config.php'); 


if(isset($_GET['idS']))
{
    $idSerie = $_GET['idS'];
}
    

	////////HTML//////////////////
	include_once('../templates/head.php');
	/*
		SACAR ESTO DESPUES
	*/
    require_once 'funciones.php';
?>
<!--  lightbox  -->
<script type="text/javascript" src="<?php echo PATH_JS ?>jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo PATH_CSS ?>jquery.lightbox-0.5.css" media="screen" />
	<script type="text/javascript">
    $(function() {
        $('.sliderImagenes li a').lightBox();
    });
	</script>
<!--  fin lightbox  -->
</head>

<body id="interiores">
<div id="cabecera">
<div id="cont-cabecera">
<h1>maría santi </h1>
<?php require_once ("../templates/menu.php")?>
</div><!--cierra cont-cabecera-->
</div><!--cierra cabecera-->

<div id="cuerpo" ><!--class="cpoInterior"-->
    <?php $serie = obtenerSeriePorId($idSerie); ?>
    <h2><?php echo $serie['tituloSerie'] ?></h2>
    <?php
        if(isset($_SESSION['Usuario']))
        {
            if($_SESSION['Usuario'] == "checked")
            {
                ?>
				<div class="btnGrupo">
					<input type="button" value="Nuevo Grupo" class="nuevoGrupo btnAdmin" data="<?php echo $serie['idSerie'] ?>" />
					<input type="button" value="Ordenar Grupos" class="ordenarGrupo btnAdmin" data="<?php echo $serie['idSerie'] ?>"/>
				</div>
                <?php
            }
        }
    ?>
    
    <div id="gallery">
    <?php
        $grupos = obtenerGruposPorIdSerie($idSerie, $idioma);
        
        switch ($grupos)
        {
            case -1:
                ?>
                    <p>Hubo un error en la base de datos. Notifíquelo.</p>
                <?php
                break;
            case 0:
                ?>
                    <p>No hay grupos cargados para dicha Serie.</p>
                <?php
                break;
            default :
                    while($datoGrupo = mysql_fetch_array($grupos))
                    {
                        ?>
                    <h3><?php echo $datoGrupo['tituloGrupo'] ?></h3>
                    <?php 
                        $imagenes = obtenerImagenesPorIdGrupo($datoGrupo['idGrupo'], $idioma);
                        
                        switch ($imagenes)
                        {
                            case -1:
                                ?>
                                    <p>Hubo un error en la base de datos. Notifíquelo.</p>
                                <?php
                                break;
                            case 0:
                                ?>
                                    <p>No hay fotos cargadas.</p>
                                <?php
                                break;
                            default :
                                ?>
                                    <ul class="sliderImagenes">
                                <?php
                                    while($datoImagen = mysql_fetch_array($imagenes))
                                    {
                                        $imagenGrande = obtenerImagenGrandePorIdGrupoPorChica($datoGrupo['idGrupo'], $datoImagen['Orden'], $idioma);
                                ?>
                                    
                                        <li><table><tr><td><a href="<?php echo PATH_IMAGES_GRUPOS_AMPLIADA.$imagenGrande['nombreImagenGrupo'] ?>" title="<?php echo $imagenGrande['nombreEpigrafeGrupo'] ?>"><img class="imagenCargada" alt="<?php echo $imagenGrande['nombreEpigrafeGrupo'] ?>" src="<?php echo PATH_IMAGES_GRUPOS_MINIATURA.$datoImagen['nombreImagenGrupo'] ?>"/></a></td></tr></table></li>
                                    
                                <?php
                                    }
                                ?>
                                    </ul>
                                <?php
                                break;
                        }
                    ?>
                    <?php
                    if(isset($_SESSION['Usuario']))
                    {
                        if($_SESSION['Usuario'] == "checked")
                        {
                            ?>
                    <input class="editarGrupo btnAdmin btnEditar" type="button" value="Editar Grupo" data="<?php echo $datoGrupo['idGrupo'] ?>"/>
                    <input type="button" class="borrarGrupo btnAdmin" value="Borrar Grupo" data="<?php echo $datoGrupo['idGrupo'] ?>"/>
                                    <?php
                            }
                        }
                    ?>
                        <?php
                    }
                break;
        }
    ?>
</div><!--cierra gallery-->

<div id="gruposOrdenados" style="display: none"></div>
<div id="agregarNuevoGrupo" style="display: none"></div>

<a href="<?php echo PATH_PHP ?>conceptoObra.php?iO=<?php echo $idSerie ?>" class="concepto">Concepto de obra</a>
</div><!--cierra cuerpo-->
<?php require_once ("../templates/footer.php")?>
</body>
</html>