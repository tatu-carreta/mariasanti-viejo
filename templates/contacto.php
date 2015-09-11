<?php
	include_once('../php/config.php'); 
	include_once('../php/funciones.php');
	////////HTML//////////////////
	include_once('head.php');
	/*
		SACAR ESTO DESPUES
	*/
?>

<?php

if (!$_POST){
?>
<script type="text/javascript">
	$(document).ready(function() {
	
		//COLOR Y BORDE DE LA CAJA DE TEXTO
        //nombre
        $('#nombre').focus(function() {
            $('#nombre').css('background-color', '#fff');
            $('#nombre').css('border', '1px solid #A80036');
        });
        $('#nombre').blur(function() {
            $('#nombre').css('background-color', '#F4F4F4');
            $('#nombre').css('border', '1px solid #CCC');
        });
        //apellido
        $('#apellido').focus(function() {
            $('#apellido').css('background-color', '#fff');
            $('#apellido').css('border', '1px solid #A80036');
        });
        $('#apellido').blur(function() {
            $('#apellido').css('background-color', '#F4F4F4');
            $('#apellido').css('border', '1px solid #CCC');
        });
        //email
        $('#email').focus(function() {
            $('#email').css('background-color', '#fff');
            $('#email').css('border', '1px solid #A80036');
        });
        $('#email').blur(function() {
            $('#email').css('background-color', '#F4F4F4');
            $('#email').css('border', '1px solid #CCC');
        });
        //consulta
        $('#consulta').focus(function() {
            $('#consulta').css('background-color', '#fff');
            $('#cnsulta').css('border', '1px solid #A80036');
        });
        $('#consulta').blur(function() {
            $('#consulta').css('background-color', '#F4F4F4');
            $('#consulta').css('border', '1px solid #CCC');
        });
        //FIN DE COLOR Y BORDE
	
	
	
        //CAMPOS NECESARIOS
        $('#button').click(function(e) {

            //nombre
            if ($('#nombre').val() == '') {
                $('#nombre').focus();
                e.preventDefault();
            }
            //apellido
            if ($('#apellido').val() == '') {
                $('#apellido').focus();
                e.preventDefault();
            }
            //email
            if ($('#email').val() == '') {
                $('#email').focus();
                e.preventDefault();
            }
            //consulta
            if ($('#consulta').val() == '') {
                $('#consulta').focus();
                e.preventDefault();
            }
           
        });
		//FIN CAMPOS NECESARIOS
	});
</script>
</head>

<body id="interiores">
<div id="cabecera">
<div id="cont-cabecera">
<h1>mar&iacute;a santi </h1>
<?php require_once ("menu.php")?>
</div><!--cierra cont-cabecera-->
</div><!--cierra cabecera-->

<div id="cuerpo">
<h2><h2><?php echo ucfirst($text['contacto'])?></h2></h2>
<h3>	<?php echo $text['representacion']?></h3>
<p> PRAXIS INTERNATIONAL ART<br />
  <a href="http://www.praxis-art.com/index.php?lang=es&amp;view=21&amp;ida=31" target="_blank">www.praxis-art.com</a></p>

<h3>  <?php echo $text['representacion-online']?></h3>
<p> SAATCHI ART<br />
  <a href="http://www.saatchiart.com/profiles/portfolio/id/497959" target="_blank">www.saatchiart.com</a></p>


<form method="post"  action="contacto.php" class="formContacto">
      <h3><?php echo $text['comentarios']?></h3>
      <p><?php echo $text['podes-comunicarte']?></p>
      <p><?php echo $text['nombre']?><br />
         <label>
         <input type="text" name="nombre" id="nombre" />
         </label>
      </p>
      <p><?php echo $text['apellido']?><br />
         <label>
         <input type="text" name="apellido" id="apellido" />
         </label>
      </p>
      <p><?php echo $text['email']?><br />
         <label>
         <input type="text" name="email" id="email" />
         </label>
      </p>
      <p><?php echo $text['comentario']?><br />
         <label>
         <textarea name="consulta" id="consulta" rows="8" ></textarea>
         </label>
      </p>
      <p>
         <label>
         <input type="submit" id="button" value="<?php echo $text['envioEmail'] ?>" />
         </label>
      </p>
    </form>

</div><!--cierra cuerpo-->
<?php require_once ("footer.php")?>
<?php
}else{
	$remitente = $_POST['email'];
	$destinatario = 'mariasanti38@hotmail.com';
        $asunto = 'Comentarios desde el sitio web';
	 
    $cuerpo = "Nombre: " . $_POST["nombre"] . "\r \n"; 
    $cuerpo .= "Apellido: " . $_POST["apellido"] . "\r \n";
    $cuerpo .= "Email: " . $_POST["email"] . "\r \n";
    $cuerpo .= "Consulta: " . $_POST["consulta"] . "\r\n";

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." ".$_POST['apellido']."\" <".$remitente.">\n";

    if(mail($destinatario, $asunto, $cuerpo, $headers))
    {
        include 'confirma.php';
    }
    else
    {
        die("ERROR MAIL");
    }
    
    
}
?>
</body>
</html>