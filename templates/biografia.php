<?php
	include_once('../php/config.php'); 
	include_once('../php/funciones.php');
	////////HTML//////////////////
	include_once('head.php');
	/*
		SACAR ESTO DESPUES
	*/
?>
<script type="text/javascript">
    $(document).ready(function(){
        $( 'textarea#editor31' ).ckeditor();
        $( 'textarea#editor32' ).ckeditor();
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
  <h2>Bio</h2>
  <div class="txtEditado">
	<?php
            $text = obtenerTextoPagina(31, $idioma);

            switch ($text) {
                case 0:
                    break;
                default:
                    if(isset($_SESSION['Usuario']) && ($_SESSION['Usuario'] == "checked"))
                    {
                        ?>
        <form id="formTextoPagTresUno" action="<?php echo PATH_ADMIN ?>agregarTexto.php" method="post">
                <textarea id="editor31" name="cuerpoTexto"><?php echo $text['cuerpoTexto']; ?></textarea>
                <input type="hidden" name="idTexto" value="<?php echo $text['idTexto'] ?>" />
                <input type="hidden" name="idioma" value="<?php echo $idioma ?>" />
                <input class="enviarTextoPagTresDos btnAdmin" type="button" value="Publicar"/>
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
	</div>
    <img class="biografia" src="<?php echo PATH_IMAGES ?>maria-santi.jpg" width="940" height="315" alt="María Santi" />
	<div class="txtEditado">
	<?php
            $text = obtenerTextoPagina(32, $idioma);

                switch ($text) {
                    case 0:
                        break;
                    default:
                        if(isset($_SESSION['Usuario']) && ($_SESSION['Usuario'] == "checked"))
                        {
                            ?>
            <form id="formTextoPagTresDos" action="<?php echo PATH_ADMIN ?>agregarTexto.php" method="post">
                    <textarea id="editor32" name="cuerpoTexto"><?php echo $text['cuerpoTexto']; ?></textarea>
                    <input type="hidden" name="idTexto" value="<?php echo $text['idTexto']; ?>" />
                    <input type="hidden" name="idioma" value="<?php echo $idioma ?>" />
                    <input class="enviarTextoPagTresDos btnAdmin" type="button" value="Publicar"/>
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
    </div>
    <!--<h3>Datos Personales: </h3>
    
    <p>Mi dirección: Calle 483 entre 19 y 19 bis, City Bell, La Plata (CP1896)<br />
    Mi teléfono: 0221-4712665 y 0221 155030736<br />
    Mi e-mail:  mariasanti38@hotmail.com.-<br /></p>-->
    
</div><!--cierra cuerpo-->
<?php require_once ("footer.php")?>
</body>
</html>