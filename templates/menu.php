<div id="menu">
<ul>
  <li><a href="<?php echo PATH_HTML ?>obra.php"><?php echo $text['obra']?></a></li>
  <li><a href="<?php echo PATH_PHP ?>muestras.php"><?php echo $text['muestras']?></a></li>
  <li><a href="<?php echo PATH_HTML ?>biografia.php"><?php echo $text['bio']?></a></li>
  <!--<li><a href="<?php echo PATH_HTML ?>obra-anterior.php"><?php echo $text['obra-anterior']?></a></li>-->
  <li><a href="<?php echo PATH_HTML ?>contacto.php"><?php echo $text['contacto']?></a></li>
  <li><a href="<?php echo PATH_HOME ?>index.php"><?php echo $text['inicio']?></a></li>

    <?php
        if(isset($_SESSION['Usuario']))
        {
            if($_SESSION['Usuario'] == "checked")
            {
                ?>
  <li><a class="botonCerrarSesion btnAdmin" href="<?php echo PATH_ADMIN ?>cerrarSesion.php" onclick="return confirm('¿Está segura que desear salir? ');">Cerrar Sesión</a></li>
                <?php
            }
        }
    ?>
</ul>
<a class="botonIdioma"><?php if($idioma == "es"){echo "English";}else{echo "Spanish";} ?></a>
<a class="botonFacebook" href="https://www.facebook.com/www.mariasanti.com.ar" target="_blanc"><span>María Santi en Facebook</span></a>
<a class="botonPinterest" href="http://www.pinterest.com/mariusanti/" target="_blanc"><span>María Santi en Pinterest</span></a>
</div><!--cierra menu-->