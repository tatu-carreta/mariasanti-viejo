<?php


	/*
	funcion conectar
	*/
	
$localhost = true;
if($localhost)
{
	function conectar()
	{
		$conexion = mysql_connect('localhost','root','') or die(mysql_error());
                mysql_set_charset('utf8');
		mysql_select_db('mariasanti',$conexion) or die(mysql_error());
		return $conexion;
	}
}
else
{
        function conectar()
	{
		$conexion = mysql_connect('localhost','mariasan','mariasan9Oct') or die(mysql_error());
                mysql_set_charset('utf8');
		mysql_select_db('mariasan_db_access',$conexion) or die(mysql_error());
		return $conexion;
	}
}


	
///////////////////////////////////////SQL///////////////////////////////////

        
	
	/*
	trae el contenido de una tabla con o sin filtro
	la variable filtro debe incluir JOIN, WHERE, ORDER BY, etc..
	si el filtro no esta seteado y no estan seteados los campos trae todo
	html es la estructura html en la que se desea imprimir, si es null no se imprime nada
	*/
	function selectFromTable ($tabla, $campos="*" , $filtros = "", $html = "")
	{
		$conexion = conectar();
		if(! (isset($campos)) or $campos == '')
		{
			$campos = "*";
		}
		$query = "SELECT ".$campos." FROM ".$tabla;
		if($filtros != "")// si esta seteado algun filtro u orden lo agrega a la consulta
		{
			$query .= " ".$filtros;
		}
		$result = mysql_query($query, $conexion);
		if (!$result)
		{
			echo 'no se realizo la consulta';
		}
		echo $html;
		
		if ($html != "")// si esta seteada alguna estructura html la imprime
		{
			imprimir($result, $html);
		}
		
		if( isset($_GET['debug']))
			{
				echo $query;
			}
		return $result;
	}
	////////////////////////////////////////////////////////////////////////////////////////////////
	
	
	/*
	imprime producto en html
	*/
	function imprimir($result, $html)
	{
		
		while ($row = mysql_fetch_assoc($result))
		{
			echo $html; //html contiene la estructura html en la que se deben insertar los resultados
		}
	}
	////////////////////////////////////////////////////////////////////////////////////////////////
	
	/*
	Dar de alta en la tabla
	
	devuelve boolean si la consulta se realizo o no
	
	el arreglo de datos debe llegar con los datos en el mismo orden que deben ser insertados en la tabla
	el arreglo atributos son los campos de la tabla, tiene que tener el mismo orden que datos
	tabla es la tabla donde se insertan los datos
	*/
	function alta($datos = array(), $tabla, $atributos = array())
		{
			$g = count($atributos);
			$i = count($datos);
			if ($g != $i)
			{
				return (false);
			}
			$conexion = conectar();
			$query = "INSERT INTO ".$tabla." (";
			$i = count($atributos) - 1;
			for ($j = 0; $j<= $i; $j++)
			{
				if ($j == $i) //si es el ultimo no pone la coma
				{
					$query .= " '".$atributos[$j]."' ";
				}
				else //sino pone coma
				{
					$query .= " '".$atributos[$j]."' , ";
				}
			}
			$query .= ") VALUES (";
			
			$i = count($datos) - 1;
			for ($j = 0; $j<= $i; $j++)
			{
				if ($j == $i)
				{
					$query .= " '".$datos[$j]."' ";
				}
				else
				{
					$query .= " '".$datos[$j]."' , ";
				}
			}
			
			$query .= " )";
			
			$result = mysql_query($query);
			
			return ($result);
		}
		
	/*
	elimina de la tabla segun el id
	devuelve true or false segun si se llevo a cabo o no la consulta
	*/
	function eliminarSegunID ($id, $tabla)
	{
		$conexion = conectar();
		$query = " DELETE FROM ".$tabla." WHERE id='".$id."'";
		$result = mysql_query($query);
		return ($result);
	}
	
	/*
	edita determinados campos de una tabla
	devuelve true or false segun si se llevo a cabo o no la consulta
	
	datos son los datos nuevos
	atributos son los atributos a modificar
	filtro es el where
	*/
	function editar ($datos = array(), $tabla, $atributos = array(), $filtro = "")
	{
		
		$g = count($atributos);
		$i = count($datos);
		if ($g != $i)
		{
			return (false);
		}
		$conexion = conectar();
		$query = " UPDATE ".$tabla." SET ";
		for ($j = 0; $j< $i; $j++)
		{
			if ($j == ($i - 1)) //si es el ultimo no pone la coma
			{
				$query .= " '".$atributos[$j]."' = '".$datos[$j]."'  ";
			}
			else //sino pone coma
			{
				$query .= " '".$atributos[$j]."' = '".$datos[$j]."' , ";
			}
			
		}
		$query .= $filtro;
		$result = mysql_query($query);
		return ($result);
	}
	
	
	/*
	inicia sesion para el administrador
	*/
	function iniciar_sesion()
	{
		/*
		en algun futuro
		*/
	}
	
	/*
	cierra sesion para el administrador
	*/
	function cerrar_sesion()
	{
		session_start();
		session_unset();
		session_destroy();
		?>
		<script type="text/javascript">
			alert("Se ha cerrado la sesión");
			window.location.href = <?php echo $redirect_path ?>;
		</script>
		<?php
	}
	
	/*
	crea un formulario de alta o de modificacion
	*/
	function crearFormulario($campos = array(), $modificacion = false, $method = "GET", $action ="form.php")
	{
		echo '<form method="'.$method.'" action="'.$action.'" >';
		foreach($campos as $a)
		{
			switch ($a['type'])
			{
				case "select": //si el input es de tipo select debe imprimir las opciones
					echo '<select id="'.$a['name'].'">';
					foreach ($a['select'] as $options)
					{
						echo '<option value="'.$option['value'].'">'.$options['option'].'</option>';
					}
					echo '</select>';
					break;
				
				case "textarea": 
					echo '<textarea rows="4" cols="50">';
					break;
					
				default:
					echo '<label for="'.$a['name'].'" >'.$a['name'].'</form>';
					echo '<input type="'.$a['type'].'" name="'.$a['name'].'" id="'.$a['name'].'" />';
			}
		}
		echo '</form>';
	}
	
        
        ////////////////////////////// FUNCIONES PHP OBTENER... ////////////////////////////////
        
        function obtenerSeriePorId($idSerie)
        {
            $conexion = conectar();
            $sql = "SELECT *
                    FROM series
                    WHERE idSerie = ".$idSerie;
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                if(mysql_num_rows($res)==0)
                {
                    return 0;
                }
                else
                {
                    $row = mysql_fetch_array($res);
                    return $row;
                }
            }
        }
		
		function obtenerGrupoPorId($idGrupo)
        {
            $conexion = conectar();
            $sql = "SELECT *
                    FROM grupos
                    WHERE idGrupo = ".$idGrupo;
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                if(mysql_num_rows($res)==0)
                {
                    return 0;
                }
                else
                {
                    $row = mysql_fetch_array($res);
                    return $row;
                }
            }
        }
		
		function obtenerTituloGrupoPorIdioma($idGrupo, $idioma)
        {
            $conexion = conectar();
            $sql = "SELECT *
                    FROM titulos_grupos
                    WHERE idGrupo = ".$idGrupo."
					AND IdiomaTituloGrupo ='".$idioma."'";
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                if(mysql_num_rows($res)==0)
                {
                    return 0;
                }
                else
                {
                    $row = mysql_fetch_array($res);
                    return $row;
                }
            }
        }
        
        
        function obtenerGruposPorIdSerie($idSerie,$idioma)
        {
            $conexion = conectar();
            $sql = "SELECT *
                    FROM grupos as g
                    INNER JOIN titulos_grupos as tg ON (tg.idGrupo = g.idGrupo)
                    WHERE g.idSerie = ".$idSerie."
                    AND tg.idiomaTituloGrupo = '".$idioma."'
                    ORDER BY g.Orden";
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                if(mysql_num_rows($res)==0)
                {
                    $sql = "SELECT *
                            FROM grupos as g
                            INNER JOIN titulos_grupos as tg ON (tg.idGrupo = g.idGrupo)
                            WHERE g.idSerie = ".$idSerie."
                            AND tg.idiomaTituloGrupo = 'es'
                            ORDER BY g.Orden";
                    $res = mysql_query($sql, $conexion);
                    
                    if(!$res)
                    {
                        return -1;
                    }
                    else
                    {
                        if(mysql_num_rows($res)==0)
                        {
                            return 0;
                        }
                        else
                        {
                            return $res;
                        }
                    }
                }
                else
                {
                    return $res;
                }
            }
        }
        
        function obtenerImagenGrandePorIdGrupoPorChica($idGrupo, $Orden, $idioma)
        {
            $conexion = conectar();
            $sql = "SELECT *
                    FROM imagenes_grupos as ig
                    INNER JOIN epigrafes_imagenes_grupos as eig ON (eig.idImagenGrupo = ig.idImagenGrupo)
                    WHERE ig.idGrupo = ".$idGrupo."
                    AND ig.Tipo = 'G' 
                    AND ig.Orden = ".$Orden."
                    AND eig.idiomaEpigrafeGrupo = '".$idioma."'
                    ORDER BY ig.Orden";
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else 
            {
                if(mysql_num_rows($res)==0)
                {
                    $sql = "SELECT *
                            FROM imagenes_grupos as ig
                            INNER JOIN epigrafes_imagenes_grupos as eig ON (eig.idImagenGrupo = ig.idImagenGrupo)
                            WHERE ig.idGrupo = ".$idGrupo."
                            AND ig.Tipo = 'G' 
                            AND ig.Orden = ".$Orden."
                            AND eig.idiomaEpigrafeGrupo = 'es'
                            ORDER BY ig.Orden";
                    $res = mysql_query($sql, $conexion);
                    
                    if(!$res)
                    {
                        return -1;
                    }
                    else
                    {
                        if(mysql_num_rows($res)==0)
                        {
                            return 0;
                        }
                        else
                        {
                            $row = mysql_fetch_array($res);
                            return $row;
                        }
                    }
                }
                else
                {
                    $row = mysql_fetch_array($res);
                    return $row;
                }
            }
        }
	
        function obtenerImagenesPorIdGrupo($idGrupo)
        {
            $conexion = conectar();
            $sql = "SELECT *
                    FROM imagenes_grupos				
                    WHERE idGrupo = ".$idGrupo."
                    AND Tipo = 'C'
                    ORDER BY Orden";
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                if(mysql_num_rows($res)==0)
                {
                    return 0;
                }
                else
                {
                    return $res;
                }
            }
        }
        
		  function obtenerImagenesSlide()
        {
            $conexion = conectar();
            $sql = "SELECT *
                    FROM imagenes_grupos				
                    WHERE Tipo = 'S'
                    ORDER BY Orden";
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                if(mysql_num_rows($res)==0)
                {
                    return 0;
                }
                else
                {
                    return $res;
                }
            }
        }
        function obtenerConceptoPorIdSerie($idSerie, $idioma)
        {
            $conexion = conectar();
            $sql = "SELECT *
                    FROM conceptos_series
                    WHERE idSerie = ".$idSerie."
                    AND idiomaConcepto = '".$idioma."'";
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                if(mysql_num_rows($res)==0)
                {
                    $sql = "SELECT *
                            FROM conceptos_series
                            WHERE idSerie = ".$idSerie."
                            AND idiomaConcepto = 'es'";
                    $res = mysql_query($sql, $conexion);
                    
                    if(!$res)
                    {
                        return -1;
                    }
                    else
                    {
                        if(mysql_num_rows($res)==0)
                        {
                            return 0;
                        }
                        else
                        {
                            $row = mysql_fetch_array($res);
                            return $row;
                        }
                    }
                }
                else
                {
                    $row = mysql_fetch_array($res);
                    return $row;
                }
            }
                
        }
        
        function obtenerMuestraPorId($idMuestra, $idioma)
        {
            $conexion = conectar();
            $sql = "SELECT *
                    FROM muestras as m
                    INNER JOIN titulos_muestras as tm ON (tm.idMuestra = m.idMuestra)
                    INNER JOIN descripciones_muestras as dm ON (dm.idMuestra = m.idMuestra)
                    WHERE m.idMuestra = ".$idMuestra."
                    AND tm.IdiomaTituloMuestra = '".$idioma."'
                    AND dm.IdiomaDescripcionMuestra = '".$idioma."'";
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                if(mysql_num_rows($res) == 0)
                {
                    return 0;
                }
                else
                {
                    $row = mysql_fetch_array($res);
                    return $row;
                }
            }
        }
        
        function obtenerMuestrasPorIdioma()
        {
            $conexion = conectar();
            $sql = "SELECT *
                    FROM muestras ORDER BY idMuestra DESC ";
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                if(mysql_num_rows($res)==0)
                {
                    return 0;
                }
                else
                {
                    return $res;
                }
            }
        }
        
        function obtenerDatosMuestrasPorIdMuestra($idMuestra, $idioma)
        {
            $conexion = conectar();
            $sql = "SELECT *
                    FROM titulos_muestras as tm
                    INNER JOIN muestras ON (muestras.idMuestra = tm.idMuestra)
                    INNER JOIN descripciones_muestras as dm ON (dm.idMuestra = tm.idMuestra)
                    WHERE tm.idMuestra = ".$idMuestra." 
                    AND tm.IdiomaTituloMuestra = '".$idioma."' 
                    AND dm.idiomaDescripcionMuestra = '".$idioma."'";
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else 
            {
                if(mysql_num_rows($res)==0)
                {
                    $sql = "SELECT *
                            FROM titulos_muestras as tm
                            INNER JOIN muestras ON (muestras.idMuestra = tm.idMuestra)
                            INNER JOIN descripciones_muestras as dm ON (dm.idMuestra = tm.idMuestra)
                            WHERE tm.idMuestra = ".$idMuestra." 
                            AND tm.IdiomaTituloMuestra = 'es' 
                            AND dm.idiomaDescripcionMuestra = 'es'";
                    $res = mysql_query($sql, $conexion);
                    
                    if(!$res)
                    {
                        return -1;
                    }
                    else
                    {
                        if(mysql_num_rows($res)==0)
                        {
                            return 0;
                        }
                        else
                        {
                            $row = mysql_fetch_array($res);
                            return $row;
                        }
                    }
                }
                else
                {
                    $row = mysql_fetch_array($res);
                    return $row;
                }
            }
        }
	
        function obtenerImagenesPorIdMuestra($idMuestra)
        {
            $conexion = conectar();
            $sql = "SELECT *
                    FROM imagenes_muestras
                    WHERE idMuestra = ".$idMuestra;
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                if(mysql_num_rows($res)==0)
                {
                    return 0;
                }
                else 
                {
                    return $res;
                }
            }
        }
        
        function obtenerImagenesGrandesPorIdGrupo($idGrupo)
        {
            $conexion = conectar();
            $sql = "SELECT *
                    FROM imagenes_grupos
                    WHERE idGrupo = ".$idGrupo."
                    AND Tipo = 'G'";
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                if(mysql_num_rows($res)==0)
                {
                    return 0;
                }
                else
                {
                    return $res;
                }
            }
        }
        
        function obtenerTextoPagina($pagina, $idioma)
        {
            $conexion = conectar();
            $sql = "SELECT *
                    FROM textos
                    WHERE Pagina = ".$pagina."
                    AND idiomaTexto = '".$idioma."'";
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                if(mysql_num_rows($res) == 0)
                {
                    $sql = "SELECT *
                    FROM textos
                    WHERE Pagina = ".$pagina."
                    AND idiomaTexto = 'es'";
                    $res = mysql_query($sql, $conexion);

                    if(!$res)
                    {
                        return -1;
                    }
                    else
                    {
                        if(mysql_num_rows($res) == 0)
                        {
                            return 0;
                        }
                        else
                        {
                            $row = mysql_fetch_array($res);
                            return $row;
                        }
                    }
                }
                else
                {
                    $row = mysql_fetch_array($res);
                    return $row;
                }
            }
        }
        
        ////////////////////////////// FUNCIONES PHP BAJA GRUPO... ////////////////////////////////
        
        // BORRA LOS EPIGRAFES POR ID IMAGEN GRUPO //
        function realizarBajaEpigrafesImagenesGruposPorIdImagenGrupo($idImagenGrupo)
        {
            $conexion = conectar();
            $sql = "DELETE FROM epigrafes_imagenes_grupos WHERE idImagenGrupo = ".$idImagenGrupo;
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                return 1;
            }
        }
        
        // BORRA LAS POR ID GRUPO + LOS EPIGRAFES LLAMANDO A LA FUNCION DE ARRIBA //
        function realizarBajaImagenesGruposPorIdGrupo($idGrupo)
        {
            $conexion = conectar();
            
            $imagenes = obtenerImagenesGrandesPorIdGrupo($idGrupo);
            
            switch ($imagenes)
            {
                case -1:
                    $res = false;
                    break;
                case 0:
                    $res = true;
                    break;
                default :
                        while($row = mysql_fetch_array($imagenes))
                        {
                            //$epigrafes = obtenerEpigrafesPorIdImagenGrupo($row['idImagenGrupo']);
                            $estado = realizarBajaEpigrafesImagenesGruposPorIdImagenGrupo($row['idImagenGrupo']);
                        }
                        
                        if($estado == 1)
                        {
                            $sql = "DELETE FROM imagenes_grupos WHERE idGrupo = ".$idGrupo;
                            $res = mysql_query($sql, $conexion);
                        }
                        else
                        {
                            $res = false;
                        }
                    break;
            }
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                return 1;
            }
        }
        
        // BORRA LOS TITULOS DEL GRUPO POR ID GRUPO //
        function realizarBajaTitulosGruposPorIdGrupo($idGrupo)
        {
            $conexion = conectar();
            $sql = "DELETE FROM titulos_grupos WHERE idGrupo = ".$idGrupo;
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                return 1;
            }
        }
        
        // BORRA LOS GRUPOS POR ID GRUPO //
        function realizarBajaPorIdGrupo($idGrupo)
        {
            $conexion = conectar();
            $estado = realizarBajaImagenesGruposPorIdGrupo($idGrupo);
            if($estado == 1)
            {
                $estado = realizarBajaTitulosGruposPorIdGrupo($idGrupo);
                if($estado == 1)
                {
                    $sql = "DELETE FROM grupos WHERE idGrupo = ".$idGrupo;
                    $res = mysql_query($sql, $conexion);
                }
                else
                {
                    $res = false;
                }
            }
            else
            {
                $res = false;
            }
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                return 1;
            }
            
        }
        
        ////////////////////////////// FUNCIONES PHP BAJA MUESTRA... ////////////////////////////////
                
        function realizarBajaDescripcionesMuestrasPorIdMuestra($idMuestra)
        {
            $conexion = conectar();
            $sql = "DELETE FROM descripciones_muestras WHERE idMuestra = ".$idMuestra;
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                return 1;
            }
        }
        
        function realizarBajaTitulosMuestrasPorIdMuestra($idMuestra)
        {
            $conexion = conectar();
            $sql = "DELETE FROM titulos_muestras WHERE idMuestra = ".$idMuestra;
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                return 1;
            }
        }
        
        function realizarBajaImagenesMuestrasPorIdMuestra($idMuestra)
        {
            $conexion = conectar();
            
            $sql = "DELETE FROM imagenes_muestras WHERE idMuestra = ".$idMuestra;
            $res = mysql_query($sql, $conexion);
                        
            if(!$res)
            {
                return -1;
            }
            else
            {
                return 1;
            }
        }
        
        function realizarBajaPorIdMuestra($idMuestra)
        {
            $conexion = conectar();
            $estado = realizarBajaImagenesMuestrasPorIdMuestra($idMuestra);
            if($estado == 1)
            {
                $estado = realizarBajaTitulosMuestrasPorIdMuestra($idMuestra);
                if($estado == 1)
                {
                    $estado = realizarBajaDescripcionesMuestrasPorIdMuestra($idMuestra);
                    if($estado == 1)
                    {
                        $sql = "DELETE FROM muestras WHERE idMuestra = ".$idMuestra;
                        $res = mysql_query($sql, $conexion);
                    }
                    else
                    {
                        $res = false;
                    }
                }
                else
                {
                    $res = false;
                }
            }
            else
            {
                $res = false;
            }
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                return 1;
            }
        }
        
        function realizarModificacionTextoPorIdPorIdioma($texto, $idTexto, $idioma)
        {
            $conexion = conectar();
            $sql = "UPDATE textos SET cuerpoTexto = '".$texto."' WHERE idTexto = ".$idTexto." AND idiomaTexto = '".$idioma."' ";
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                return 1;
            }
        }
        
        function realizarModificacionConceptoPorIdPorIdioma($texto, $idConcepto, $idioma)
        {
            $conexion = conectar();
            $sql = "UPDATE conceptos_series SET textoConcepto = '".$texto."' WHERE idConcepto = ".$idConcepto." AND idiomaConcepto = '".$idioma."' ";
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return -1;
            }
            else
            {
                return 1;
            }
        }
        
        ////////////////////////////////////////////////////////////////////////
        
        function obtenerUsuario($us, $cl)
        {
            $conexion = conectar();
            $sql = "SELECT *
                    FROM usuarios
                    WHERE nombreUsuario = '".encriptado($us)."' 
                    AND claveUsuario = '".encriptado($cl)."'";
            $res = mysql_query($sql, $conexion);
            
            if(!$res)
            {
                return " ";
            }
            else
            {
                if(mysql_num_rows($res)==0)
                {
                    return "  ";
                }
                else
                {
                    return 9;
                }
            }
        }
        
        ////////////////////////////////////////////////////////////////////////////////////////////////
        
        function encriptado($texto)
        {
            return str_pad($texto, 30, "uyqwnp9231maria902santiohzsxcb_:;_PQWBD2)!", STR_PAD_BOTH);
        }
        
        function ordenarGrupos($orden, $idGrupo)
        {
            $conexion = conectar();
            $sql = "UPDATE grupos SET Orden = ".$orden."
                    WHERE idGrupo = ".$idGrupo;
            $res = mysql_query($sql, $conexion);
        }
?>