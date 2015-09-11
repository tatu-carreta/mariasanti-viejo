<?php
	include_once('../php/config.php'); 
	include_once('../php/funciones.php');
	////////HTML//////////////////
	include_once('head.php');
	/*
		SACAR ESTO DESPUES
	*/
?>
<!--  lightbox  -->
<script type="text/javascript" src="<?php echo PATH_JS ?>jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo PATH_CSS ?>jquery.lightbox-0.5.css" media="screen" />
	<script type="text/javascript">
    $(function() {
        $('.sliderImagenesAnteriores li a').lightBox();
    });
	</script>
<!--  fin lightbox  -->
</head>

<body id="interiores">
<div id="cabecera">
<div id="cont-cabecera">
<h1>maría santi </h1>
<?php require_once ("menu.php")?>
</div><!--cierra cont-cabecera-->
</div><!--cierra cabecera-->

<div id="cuerpo">
<h2><?php echo $text['obra-anterior']?></h2>


<div id="gallery" class="obraAnterior">

<h3><?php echo $text['2006-2007']?></h3>

 <ul id="" class="sliderImagenesAnteriores">
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/1-tendederos-150x150-acrilico-sobre-tela-2006_a.jpg" title="tendederos 1,50 x 1,50 acrilico sobre tela 2006"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/1-tendederos-150x150-acrilico-sobre-tela-2006.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/2-moscas-y-vestidos-140x140-acrilico-sobre-tela-2006_a.jpg" title="moscas y vestidos 1,40 x 1,40 acrilico sobre tela 2006"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/2-moscas-y-vestidos-140x140-acrilico-sobre-tela-2006.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/3-vestidas-para-matar-180x180-acrilico-sobre-tela-2006_a.jpg" title="vestidas para matar 1,80 x 1,80 acrilico sobre tela 2006"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/3-vestidas-para-matar-180x180-acrilico-sobre-tela-2006.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/4-vestido-pop-140x140-acrilico-sobre-tela-2006_a.jpg" title="vestido pop 1,40 x 1,40 acrilico sobre tela 2006"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/4-vestido-pop-140x140-acrilico-sobre-tela-2006.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/5-vestidos-y-ventanas-150x150-acrilico-sobre-tela-2006_a.jpg" title="vestidos y ventanas 1,50 x 1,50 acrilico sobre tela 2006"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/5-vestidos-y-ventanas-150x150-acrilico-sobre-tela-2006.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/6-y-yo-que-tqm-150x150-acrilico-sobre-tela-2006_a.jpg" title="y yo que tqm... 1,50 x 1,50 acrilico sobre tela 2006"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/6-y-yo-que-tqm-150x150-acrilico-sobre-tela-2006.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/7-vestido-turquesa-100x100-acrilico-sobre-tela-2006_a.jpg" title="vestido turquesa 1,00 x 1,00 acrilico sobre tela 2006"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/7-vestido-turquesa-100x100-acrilico-sobre-tela-2006.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/8-vestido-rojo-100x100-acrilico-sobre-tela-2006_a.jpg" title="vestido rojo 1,00 x 1,00 acrilico sobre tela 2006"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/8-vestido-rojo-100x100-acrilico-sobre-tela-2006.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/9-las-moscas-y-yo-100x100-acrilico-sobre-tela-2006_a.jpg" title="las moscas y yo 1,00 x 1,00 acrilico sobre tela 2006"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/9-las-moscas-y-yo-100x100-acrilico-sobre-tela-2006.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/10-sin-titulo-100x100-acrilico-sobre-tela-2006_a.jpg" title="sin titulo 1,00 x 1,00 acrilico sobre tela 2006"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/10-sin-titulo-100x100-acrilico-sobre-tela-2006.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/11-sin-titulo-acrilico-sobre-tela-2006_a.jpg" title="sin titulo acrilico sobre tela 2006"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidos/11-sin-titulo-acrilico-sobre-tela-2006.jpg"  /></a></li>
    </ul>
 

<h3><?php echo $text['2004-2005']?></h3>
   <ul id="" class="sliderImagenesAnteriores">
   <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/poliptico-1_a.jpg" title="POLIPTICO 1. VINILOS SOBRE TELAS VARIAS. MEDIDAS VARIABLES"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/poliptico-1.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/poliptico-2_a.jpg" title="POLIPTICO 2. VINILOS SOBRE TELAS VARIAS. MEDIDAS VARIABLES"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/poliptico-2.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/poliptico-3_a.jpg" title="POLIPTICO 3. VINILOS SOBRE TELAS VARIAS. MEDIDAS VARIABLES"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/poliptico-3.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/detalle_a.jpg" title="DETALLE DE POLIPTICO 1"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/detalle.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/novillitos-en-red_a.jpg" title="NOVILLITOS EN RED. 150 X 150 .VINILOS Y ACRILICO SOBRE TELA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/novillitos-en-red.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/juego_a.jpg" title="CHAPA Y ACRILICO. 3 PRISMAS Y UNA CHAPA DE 140 X 125. FICHAS DE ACRILICO DE 10 X 10 CM IMANTADAS"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/juego.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/juego-1_a.jpg" title="CHAPA Y ACRILICO. 3 PRISMAS Y UNA CHAPA DE 140 X 125. FICHAS DE ACRILICO DE 10 X 10 CM IMANTADAS"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/juego-1.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/juego-2_a.jpg" title="CHAPA Y ACRILICO. 3 PRISMAS Y UNA CHAPA DE 140 X 125. FICHAS DE ACRILICO DE 10 X 10 CM IMANTADAS"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/juego-2.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/cajas-blancas_a.jpg" title="FOTO CAJAS BLANCAS"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/cajas-blancas.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/muestra_a.jpg" title="FOTOS DE LA MUESTRA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/muestra.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/muesra-2_a.jpg" title="FOTOS DE LA MUESTRA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/muesra-2.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/muestra-1_a.jpg" title="FOTOS DE LA MUESTRA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/vestidas-para-matar/muestra-1.jpg"  /></a></li>   
   </ul>
  
<h3><?php echo $text['2001-2003']?></h3>
  <ul id="" class="sliderImagenesAnteriores">
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/01-nuevo-1_a.jpg" title="Novillitos. 120 x 120 cm. Acrilico sobre tela"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/01-nuevo-1.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/03-nuevo-3_a.jpg" title="Moscas en la casa. 180 x 180 cm . Tecnica mixta sobre tela"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/03-nuevo-3.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/04-vacas-1_a.jpg" title="Sin titulo. 100 x 130 cm. Acrilico sobre tela"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/04-vacas-1.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/05-vacas-3_a.jpg" title="Sin titulo. 180 x 180 cm. Acrilico sobre tela"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/05-vacas-3.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/06-vacas-4_a.jpg" title="Rojo mosca.180 x 180 cm. Tecnica mixta sobre tela"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/06-vacas-4.jpg"  /></a></li>
    
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/2--180-x-180-cm_a.jpg" title="1,80  x 1,80 mts. ACRILICO SOBRE TELA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/2--180-x-180-cm.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/3--120-x-120-cm_a.jpg" title="1,20  x 1,20 mts. ACRILICO SOBRE TELA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/3--120-x-120-cm.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/4--150-x-150_a.jpg" title="1,50 X 1,50 MTS. ACRILICO SOBRE TELA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/4--150-x-150.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/5--100-x-100-cm_a.jpg" title="1,00 X 1,00 MTS. ACRILICO SOBRE TELA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/5--100-x-100-cm.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/6--180-x-180-cm_a.jpg" title="Todas. 1,80 X 1,80 MTS. ACRILICO SOBRE TELA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/6--180-x-180-cm.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/7--130-x-130-cm_a.jpg" title="Yo sola. 1,30 X 1,30 MTS. ACRILICO SOBRE TELA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/7--130-x-130-cm.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/8--180-x-180-cm_a.jpg" title="De compras. 1,80 X 1,80 MTS. ACRILICO SOBRE TELA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/8--180-x-180-cm.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/9--150-x-150-cm_a.jpg" title="1,50 X 1,50 MTS. ACRILICO SOBRE TELA   "><img src="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/9--150-x-150-cm.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/chanchos_a.jpg" title="CHANCHOS.1,50 X 1,50 MTS. ACRILICO SOBRE TELA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/chanchos.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/detalle-2_a.jpg" title="DETALLE"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/detalle-2.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/detalle_a.jpg" title="DETALLE"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/detalle.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/130-X-160-CM_a.jpg" title="1,30 x 1,60 ACRILICO SOBRE TELA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/novillos-negros/130-X-160-CM.jpg"  /></a></li>
    
    </ul>
    
<h3><?php echo $text['1999-2000']?></h3>
  <ul id="" class="sliderImagenesAnteriores">
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/01--120-x-120--los-4-elementos_a.jpg" title="Todos. 120 x 120 cm. Tecnica mixta."><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/01--120-x-120--los-4-elementos.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/02--120-x-120--AGUA_a.jpg" title="Agua. 120 x 120 cm . Tecnica mixta"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/02--120-x-120--AGUA.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/03--120-X-120---TIERRA_a.jpg" title="Tierra. 120 x 120 cm. Tecnica Mixta"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/03--120-X-120---TIERRA.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/04--120-X-120---AIRE_a.jpg" title="Tierra. 120 x 120 cm. Tecnica Mixta"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/04--120-X-120---AIRE.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/05--120-X-120--FUEGO_a.jpg" title="Fuego. 120 x 120 cm. Tecnica Mixta"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/05--120-X-120--FUEGO.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/06--120-X-120_a.jpg" title="Fuego. 120 x 120 cm. Tecnica Mixta"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/06--120-X-120.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/1--120-x-120-cm_a.jpg" title="TRES SOLES-1,20  x 1,20 mts. ACRILICO SOBRE TELA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/1--120-x-120-cm.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/3--120-x-120-cm_a.jpg" title="FIGURITAS 2-1,20  x 1,20 mts. ACRILICO SOBRE TELA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/3--120-x-120-cm.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/4--120-x-120-cm_a.jpg" title="CAIGA DONDE CAIGA-1,20  x 1,20 mts. ACRILICO SOBRE TELA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/4--120-x-120-cm.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/5--150-x-100-cm_a.jpg" title="SIN TITULO-1,50 X 1,20 MTS. ACRILICO SOBRE TELA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/5--150-x-100-cm.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/6--180-x-100-cm_a.jpg" title="FIGURITAS ANTIGUAS- 1,80 X 1,00 MTS. ACRILICO SOBRE TELA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/6--180-x-100-cm.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/7--diptico-050-x-180-cm-cada-uno_a.jpg" title="FUEGO Y AGUA. DIPTICO.0,50 X 1,80 MTS.CADA UNO. ACRILICO SOBRE TELA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/7--diptico-050-x-180-cm-cada-uno.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/8--150-x-100-cm_a.jpg" title="FIGURITAS.1,50 X 1,00 MTS. ACRILICO SOBRE TELA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/8--150-x-100-cm.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/9-60-x-45-cm_a.jpg" title="0,60 X 0,45 MTS. DIBUJO SOBRE TELA"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/9-60-x-45-cm.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/10-60-x-45-cm_a.jpg" title="0,60 X 0,45 MTS. DIBUJO SOBRE TELA  "><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/10-60-x-45-cm.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/caja-045-x-035-1_a.jpg" title="CAJA DEL AIRE-0,45 X 0,35 MTS."><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/caja-045-x-035-1.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/caja-045-x-035-2_a.jpg" title="CAJA DEL FUEGO-0,45 X 0,35 MTS."><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/caja-045-x-035-2.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/caja-045-x-035_a.jpg" title="CAJA DEL AGUA- 0,45 X 0,35 MTS"><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/caja-045-x-035.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/BIOMBO-1_a.jpg" title=""><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/BIOMBO-1.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/BIOMBO-2_a.jpg" title=""><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/BIOMBO-2.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/BIOMBO-3_a.jpg" title=""><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/BIOMBO-3.jpg"  /></a></li>
    <li><a href="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/BIOMBO-4_a.jpg" title=""><img src="<?php echo PATH_IMAGES ?>obras/anteriores/los-4-elementos/BIOMBO-4.jpg"  /></a></li>
   </ul>
  
</div><!--cierra gallery-->
</div><!--cierra cuerpo-->
<?php require_once ("footer.php")?>
</body>
</html>