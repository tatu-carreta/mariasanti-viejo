<?php
	include_once('../php/config.php'); 
	include_once('../php/funciones.php');
	////////HTML//////////////////
	include_once('../templates/head.php');
	/*
		SACAR ESTO DESPUES
	*/
?>

</head>

<body id="interiores">
<div id="cabecera">
<div id="cont-cabecera">
<h1>maría santi </h1>
<p style="font-size:24px;">administrador</p>
</div><!--cierra cont-cabecera-->
</div><!--cierra cabecera-->

<div id="cuerpo">

	<form action="<?php echo PATH_ADMIN ?>iniciarSesion.php" method="post" class="formAdmin">
		<label for="user">Usuario</label>
		<input type="text" id="user" name="user">

		<label for="pass">Password</label>
		<input type="password" id="pass" name="pass">

		<input type="submit" value="ENTRAR" class="btnForm">
	</form>
</div>
</body>
</html>