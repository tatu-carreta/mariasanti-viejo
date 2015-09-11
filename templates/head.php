<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>María Santi - Obra</title>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script src="<?php echo PATH_HOME ?>ckeditor/ckeditor.js"></script>
<script src="<?php echo PATH_HOME ?>ckeditor/adapters/jquery.js"></script>

<link href="<?php echo PATH_CSS?>estilos.css" rel="stylesheet">
<link href="<?php echo PATH_HOME?>ckeditor/contents.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo PATH_JS ?>jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo PATH_JS?>modernizr.custom.38026.js"></script>
<script type="text/javascript" src="<?php echo PATH_JS?>funcs.js?i=<?php echo rand(0,99)?>"></script>



<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
<link href="favicon.ico" rel="shortcut icon"  type="image/x-icon" />
<script type="text/javascript" src="<?php echo PATH_JS?>jquery.cycle.all.2.74.js"></script>

<script type="text/javascript">
        $(document).ready(function() {
            $('.slideshow').cycle({
                fx: 'fade'
            });
        });
</script>
<!-- estad�sticas de Google -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4612841-16']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- fin estad�sticas de Google -->

<script type="text/javascript">
		var PATH_HOME = <?php echo json_encode (PATH_HOME)?>;
		var PATH_PHP = <?php echo json_encode (PATH_PHP)?>;
                var PATH_HTML = <?php echo json_encode(PATH_HTML)?>;
                var PATH_ADMIN = <?php echo json_encode(PATH_ADMIN)?>;
                var PATH_IMAGES = <?php echo json_encode (PATH_IMAGES)?>;
                var PATH_UPLOAD = <?php echo json_encode(PATH_UPLOAD)?>;
		var REDIRECT_PATH = <?php echo json_encode (REDIRECT_PATH)?>;	
                lang = <?php echo json_encode($idioma) ?>;
                <?php
                    if(isset($idSerie))
                    {
                ?>
                serie = <?php echo json_encode($idSerie) ?>; 
                <?php
                    }
                ?>
		//var sAdvertenciaEliminar = <?php //echo json_encode($aTexts['advertencia_eliminar']) ?>;
</script>

