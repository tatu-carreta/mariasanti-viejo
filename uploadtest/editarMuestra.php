<?php
    require_once '../php/config.php';
    require_once '../php/funciones.php';

    
    if($_GET['idM'])
    {
        $idMuestra = $_GET['idM'];
    }
    else
    {
        $idMuestra = 0;
    }
    
    $muestra = obtenerMuestraPorId($idMuestra, $idioma);
    
    $imagenesMuestra = obtenerImagenesPorIdMuestra($idMuestra);
    
    
?>
<script type="text/javascript">
    dataArray2 = [];
    <?php while($images = mysql_fetch_array($imagenesMuestra)){  ?>
        dataArray2.push({id: <?php echo $images['idImagenMuestra'] ?>, imagen:'<?php echo PATH_IMAGES_MUESTRAS.$images['nombreImagenMuestra'] ?>', name: '<?php echo $images['nombreImagenMuestra'] ?>', value:'<?php echo PATH_IMAGES_MUESTRAS.$images['nombreImagenMuestra'] ?>'});
    <?php
    }
    ?>
        console.log(dataArray2);
</script>

<script src="<?php echo PATH_UPLOAD ?>javascriptEditarMuestra.js"></script>



</head>
<body>
<div id="modal">
	<input type="text" class="titulo" id="titulo" value="<?php echo $muestra['tituloMuestra'] ?>"/>
        <textarea id="descripcion" class="descripcionMuestra"><?php echo $muestra['descripcionMuestra'] ?></textarea>
        <input type="hidden" id="muestra" value="<?php echo $muestra['idMuestra'] ?>" />
	<div class="content uploadContainer">
		<div class="image" style="float:left" id="drop-files" ondragover="return false">
			<span>Arrastre imágenes aquí</span>
		</div>
		
		<div id="uploaded-holder">
			<div id="dropped-files">
			<ul id="ulCarga" class="imgCarga sortable">
			</ul>
			<div class="clear"></div>
				<div id="upload-button">
					<input type="button" value="Publicar" style="margin-right:10px" class="upload btnAdmin">
					<input type="button" value="Cancelar" class="eliminar btnAdmin">
					<span>0 Fotos</span>
				</div>
			</div>
			<div id="extra-files">
				<div class="number">
					
				</div>
				<div id="file-list">
					<ul></ul>
				</div>
			</div>
		</div>
		
		<div id="loading">
			<div id="loading-bar">
				<div class="loading-color"> </div>
			</div>
			<div id="loading-content"></div>
		</div>
		
		<div id="file-name-holder">
			<ul id="uploaded-files">
				
			</ul>
		</div>
	</div>
	
</div>

</body>
</html>