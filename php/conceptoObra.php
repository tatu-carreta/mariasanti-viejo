<?php
	include_once('config.php'); 

	////////HTML//////////////////
	include_once('../templates/head.php');
	/*
		SACAR ESTO DESPUES
	*/
    require_once 'funciones.php';
    
    if($_GET['iO'])
    {
        $idSerie = $_GET['iO'];
    }
?>
<script type="text/javascript">
    $(document).ready(function(){
        $( 'textarea#editorConcepto' ).ckeditor();
    });
</script>
</head>

<body id="interiores">
<div id="cabecera">
<div id="cont-cabecera">
<h1>maría santi </h1>
<?php require_once ("../templates/menu.php")?>
</div><!--cierra cont-cabecera-->
</div><!--cierra cabecera-->
<?php

if(isset($_GET['idS']))
{
    $idSerie = $_GET['idS'];
}
    $serie = obtenerSeriePorId($idSerie);
?>
<div id="cuerpo">
    <h2><?php echo $serie['tituloSerie'] ?></h2>
	<h3 class="concepto">Concepto de obra</h3>
    <div class="clear"></div>
	<div class="txtEditado">
    <?php
        $concepto = obtenerConceptoPorIdSerie($idSerie, $idioma);
        
        switch ($concepto)
        {
            case -1:
                break;
            case 0:
                    echo "No existe concepto para esta serie.";
                break;
            default :
                if(isset($_SESSION['Usuario']) && ($_SESSION['Usuario'] == "checked"))
                {
                    ?>
    <form id="formConcepto" action="<?php echo PATH_ADMIN ?>agregarConcepto.php" method="post" >
            <textarea id="editorConcepto" name="textoConcepto"><?php echo $concepto['textoConcepto'] ?></textarea>
            <input type="hidden" name="idConcepto" value="<?php echo $concepto['idConcepto'] ?>" />
            <input type="hidden" name="idioma" value="<?php echo $idioma ?>" />
            <input type="hidden" class="pageBack" value="<?php echo $idSerie ?>" />
            <input class="enviarConcepto btnAdmin" type="button" value="Publicar"/>
    </form>
                    <?php
                }
                else
                {
                    echo $concepto['textoConcepto'];
                }
                break;
        }
    ?>
  </div>
<a href="<?php echo PATH_PHP ?>galeriaGrupos.php?idS=<?php echo $idSerie ?>" class="concepto">Volver a la obra</a>
</div><!--cierra cuerpo-->
<?php require_once ("../templates/footer.php")?>
</body>
</html>