<?php
    require_once '../php/config.php';
    require_once '../php/funciones.php';



    
    $imagenesSlide = obtenerImagenesSlide();
    $result = mysql_query("SELECT MAX( Orden ) AS idOrden FROM imagenes_grupos WHERE Tipo =  'S'");
	$orden = mysql_fetch_array($result);
    
?>
<script type="text/javascript">
    dataArray2 = [];
	orden = <?php echo $orden['idOrden']?>;
    <?php while($images = mysql_fetch_array($imagenesSlide)){  ?>
        dataArray2.push({id: <?php echo $images['idImagenGrupo'] ?>, imagen:'<?php echo PATH_IMAGES_GRUPOS.$images['nombreImagenGrupo'] ?>', name: '<?php echo $images['nombreImagenGrupo'] ?>', value:'<?php echo PATH_IMAGES_GRUPOS.$images['nombreImagenGrupo'] ?>'});
    <?php
    }
    ?>
        console.log(dataArray2);
</script>

<script src="<?php echo PATH_UPLOAD ?>javascriptSlide.js"></script>



</head>
<body>
<div id="modal">
	<div class="titulo" id="titulo">Slide Jardines</div>

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