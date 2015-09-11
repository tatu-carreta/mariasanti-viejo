<?php
    require_once '../php/config.php';
    require_once '../php/funciones.php';

    
    if($_GET['idM'])
    {
        $idGrupo = $_GET['idM'];
    }
    else
    {
        $idGrupo = 0;
    }
    
    $grupo = obtenerGrupoPorId($idGrupo);
    $titulo_grupo = obtenerTituloGrupoPorIdioma($idGrupo, "es");
    $imagenesGrupo = obtenerImagenesPorIdGrupo($idGrupo);
	$result = mysql_query("SELECT MAX(idImagenGrupo) AS idImagen FROM imagenes_grupos");
	$row = mysql_fetch_array($result);
	$idStart = $row['idImagen'] + 1;
 
    
?>
<script type="text/javascript">
    dataArray2 = [];
	sortedIDs = [];
	epigrafes = [];
	idGrupo = <?php echo $idGrupo ?>;
    <?php while($images = mysql_fetch_array($imagenesGrupo)){
				
						
						$result = mysql_query("SELECT * FROM epigrafes_imagenes_grupos WHERE idImagenGrupo = ".$images['idImagenRecursiva']." AND idiomaEpigrafeGrupo = '".$idioma."'");
						if(!$result){
							echo 'something2';
						}
						$epigrafes = mysql_fetch_array($result);
					
						if($epigrafes['nombreEpigrafeGrupo'] == '' and $idioma != 'es')
						{
							$result = mysql_query("SELECT * FROM epigrafes_imagenes_grupos WHERE idImagenGrupo = ".$images['idImagenRecursiva']." AND idiomaEpigrafeGrupo = 'es' ");
							$epigrafes = mysql_fetch_array($result);
						}
						
	?>
        dataArray2.push({id: <?php echo $images['idImagenGrupo'] ?>, imagen:'<?php echo PATH_IMAGES_GRUPOS_MINIATURA.$images['nombreImagenGrupo'] ?>', name: '<?php echo $images['nombreImagenGrupo'] ?>', value:'<?php echo PATH_IMAGES_GRUPOS_MINIATURA.$images['nombreImagenGrupo'] ?>'});
		sortedIDs.push("<?php echo $images['idImagenGrupo'] ?>");
		epigrafes.push({id: <?php echo $images['idImagenGrupo'] ?>, text: '<?php echo $epigrafes['nombreEpigrafeGrupo']?>'});
		<?php
	
    }
    ?>

	idStart = <?php echo $idStart ?>;
        
</script>

<script src="<?php echo PATH_UPLOAD ?>editarGrupo.js"></script>



</head>
<body>
<?php ?>
<div id="modal">
	<input type="text" class="titulo" id="titulo" value="<?php echo  $titulo_grupo['tituloGrupo']?>"/>
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
					<span>0 Fotos nuevas</span>
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
		
		
		
		<div id="file-name-holder">
			<ul id="uploaded-files">

			</ul>
		</div>
	</div>
	
	
</div>

<div id="loading">
			<div class="textoLoading">Aguarde un momento por favor...</div>
			<img class="imgLoading"src="http://i.stack.imgur.com/FhHRx.gif" />
</div>

</body>
</html>