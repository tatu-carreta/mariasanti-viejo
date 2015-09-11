<?php
	include_once('../php/config.php'); 
	include_once('../php/funciones.php');
	////////HTML//////////////////
	include_once('head.php');
	/*
		SACAR ESTO DESPUES
	*/
        
	$result = selectFromTable("textos","" , "where Pagina = 1 and idiomaTexto = '".$idioma."' ");
	$row = mysql_fetch_array($result);
	$text['blanco-sobre-blanco'] = $row["cuerpoTexto"];
	
	
?>
<script type="text/javascript">
    $(document).ready(function(){
        $( 'textarea#editor1' ).ckeditor();
    });
</script>
</head>

<body id="interiores">
<div id="cabecera">
<div id="cont-cabecera">
<h1>maría santi </h1>
<?php require_once ("menu.php")?>

</div><!--cierra cont-cabecera-->
</div><!--cierra cabecera-->

<div id="cuerpo">
<h2><?php echo ucfirst($text['obra'])?></h2>
<div class="serie-jardines">
<h2 class="titulo-serie"><span><?php echo $text['jardines-transportables']?></span></h2>
<div class="slideshow">
<?php
	$conexion = conectar();
	$result = mysql_query("SELECT * FROM imagenes_grupos WHERE Tipo = 'S' ");
	while($row = mysql_fetch_array($result))
	{
		echo 
					'<a href="'.PATH_PHP.'galeriaGrupos.php?idS=1"><img src="'. PATH_IMAGES_GRUPOS.$row['nombreImagenGrupo'].'" width="250" height="250" alt="Jardines Transportables" /></a>';
	}
?>
<!---

<a href="<?php echo PATH_PHP ?>galeriaGrupos.php?idS=1"><img src="<?php echo PATH_IMAGES_SERIES ?>jardines1.jpg" width="250" height="250" alt="Jardines Transportables" /></a>
<a href="<?php echo PATH_PHP ?>galeriaGrupos.php?idS=1"><img src="<?php echo PATH_IMAGES_SERIES ?>jardines2.jpg" width="250" height="250" alt="Jardines Transportables" /></a>
<a href="<?php echo PATH_PHP ?>galeriaGrupos.php?idS=1"><img src="<?php echo PATH_IMAGES_SERIES ?>jardines3.jpg" width="250" height="250" alt="Jardines Transportables" /></a>
<a href="<?php echo PATH_PHP ?>galeriaGrupos.php?idS=1"><img src="<?php echo PATH_IMAGES_SERIES ?>jardines4.jpg" width="250" height="250" alt="Jardines Transportables" /></a>
<a href="<?php echo PATH_PHP ?>galeriaGrupos.php?idS=1"><img src="<?php echo PATH_IMAGES_SERIES ?>jardines5.jpg" width="250" height="250" alt="Jardines Transportables" /></a>
<a href="<?php echo PATH_PHP ?>galeriaGrupos.php?idS=1"><img src="<?php echo PATH_IMAGES_SERIES ?>jardines6.jpg" width="250" height="250" alt="Jardines Transportables" /></a> --->
</div>
<a href="<?php echo PATH_PHP ?>galeriaGrupos.php?idS=1"><?php echo $text['ver-la-obra']?></a></div>




<div class="serie-circular">
<h2 class="titulo-serie"><span><?php echo $text['circular-en-blanco']?></span></h2>
<div class="slideshow">
<a href="<?php echo PATH_PHP ?>galeriaGrupos.php?idS=2"><img src="<?php echo PATH_IMAGES_SERIES ?>circular1.jpg" width="250" height="250" alt="Circular en blanco" /></a>
<a href="<?php echo PATH_PHP ?>galeriaGrupos.php?idS=2"><img src="<?php echo PATH_IMAGES_SERIES ?>circular2.jpg" width="250" height="250" alt="Circular en blanco" /></a>
<a href="<?php echo PATH_PHP ?>galeriaGrupos.php?idS=2"><img src="<?php echo PATH_IMAGES_SERIES ?>circular3.jpg" width="250" height="250" alt="Circular en blanco" /></a>
<a href="<?php echo PATH_PHP ?>galeriaGrupos.php?idS=2"><img src="<?php echo PATH_IMAGES_SERIES ?>circular4.jpg" width="250" height="250" alt="Circular en blanco" /></a>
<a href="<?php echo PATH_PHP ?>galeriaGrupos.php?idS=2"><img src="<?php echo PATH_IMAGES_SERIES ?>circular5.jpg" width="250" height="250" alt="Circular en blanco" /></a>
<a href="<?php echo PATH_PHP ?>galeriaGrupos.php?idS=2"><img src="<?php echo PATH_IMAGES_SERIES ?>circular6.jpg" width="250" height="250" alt="Circular en blanco" /></a>
</div>
<a href="<?php echo PATH_PHP ?>galeriaGrupos.php?idS=2"><?php echo $text['ver-la-obra']?></a></div>

<div class="clear"></div>

<?php
  if(isset($_SESSION['Usuario']))
        {
            if($_SESSION['Usuario'] == "checked")
            {
               ?>
<input type="button" value="Editar Slide" class="editarSlide btnAdmin" />
			<?php
			}
		}
?>


<div class="txtEditado">
<?php
    $text = obtenerTextoPagina(1, $idioma);
    
    switch ($text) {
        case 0:
            break;
        default:
            if(isset($_SESSION['Usuario']) && ($_SESSION['Usuario'] == "checked"))
            {
                ?>
<form id="formTextoPagUno" action="<?php echo PATH_ADMIN ?>agregarTexto.php" method="post">
        <textarea id="editor1" name="cuerpoTexto"><?php echo $text['cuerpoTexto']; ?></textarea>
        <input type="hidden" name="idTexto" value="<?php echo $text['idTexto'] ?>" />
        <input type="hidden" name="idioma" value="<?php echo $idioma ?>" />
        <input class="enviarTexto btnAdmin" type="button" value="Publicar"/>
</form>
                <?php
            }
            else
            {
                echo $text['cuerpoTexto'];
            }
            break;
    }
?>
	</div><!--cierra txtEditado-->
	<div id="agregarNuevoGrupo" style="display: none"></div>
</div><!--cierra cuerpo-->
<?php require_once("footer.php");?>
</body>
</html>