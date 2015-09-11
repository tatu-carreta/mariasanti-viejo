<?php
require_once('../php/config.php'); 
        //require_once ('seguridad.php'); //Controla que sea administrador..
        require_once '../templates/head.php';
 ?>
</head>
<?php
        require_once ('../php/funciones.php');
        
if ($_POST) 
{  
    $i=1;  
    foreach ($_POST['order'] as $order_id) {    
        ordenarGrupos($i, mysql_real_escape_string($order_id));
        $i++;  

    }
}
?>
<script type="text/javascript">
   $(function(){  
       $('.sortable').sortable({
			update: function( event, ui ) {
			$(this).parent().submit();
		  }
		});
          });
</script>
<div>
    <?php
    
    if($_GET['idS'])
    {
        $idSerie = $_GET['idS'];
    }
        $grupos = obtenerGruposPorIdSerie($idSerie, "es");
        $serie = obtenerSeriePorId($idSerie);
    ?>

    <h2><?php echo $serie['tituloSerie'] ?></h2>
    <form class="target" action="<?php echo PATH_ADMIN ?>ordenarGrupos.php?idS=<?php echo $idSerie ?>" method="post" target="prueba">
        <ul class="sortable">
        <?php
            switch ($grupos)
            {
                case -1: 
				?>
					<span class="observacion">Hubo un error en el sistema.</span>
				<?php
                    break;
                case 0: 
				?>
					<span class="observacion">No hay grupos en el sistema.</span>
				<?php
                    break;
                default :
                    while($grup = mysql_fetch_array($grupos))
                {
                    ?>
        <li><span><?php echo $grup['tituloGrupo']?></span><input type="hidden" name="order[]" value="<?php echo $grup['idGrupo'] ?>" /></li>
        
                    <?php
                }
                    break;
            }
        ?>
        </ul>
        <input type="button" class="aceptarOrden btnAdmin" value="Aceptar" />
    </form>
<iframe id="prueba" name="prueba" style="display: none">
</div>