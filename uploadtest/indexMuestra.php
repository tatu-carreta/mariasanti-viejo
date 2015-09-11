<?php
    require_once '../php/config.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">

<title>File Upload!</title>
<script src="<?php echo PATH_UPLOAD ?>javascriptMuestra.js"></script>



</head>
<body>
<div id="modal">
	<input type="text" class="titulo" id="titulo" value="Ingrese título de la muestra"/>
        <textarea id="descripcion" class="descripcionMuestra">Ingrese descripción de la muestra</textarea>
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