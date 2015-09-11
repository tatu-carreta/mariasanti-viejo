-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-10-2013 a las 19:41:32
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mariasanti`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptos_series`
--

CREATE TABLE IF NOT EXISTS `conceptos_series` (
  `idConcepto` int(11) NOT NULL AUTO_INCREMENT,
  `idSerie` int(11) NOT NULL,
  `textoConcepto` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `idiomaConcepto` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'es -> Español; en -> Inglés',
  PRIMARY KEY (`idConcepto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `conceptos_series`
--

INSERT INTO `conceptos_series` (`idConcepto`, `idSerie`, `textoConcepto`, `idiomaConcepto`) VALUES
(1, 1, '<h4>Blanco sobre blanco, capa sobre capa. Lo conocido y lo extraño.</h4>\n\n<p>Naturaleza viva, en blanco.<br>\nPaisaje selvático monocromático.<br>\nExhuberancia y sobriedad al mismo tiempo</p>\n\n\n<p><em>La obra de María Santi nos ofrece una imagen ambigua de un entorno natural logrado por ella a través de medios y materiales generalmente sintéticos. Balanceándose una y otra vez entre este par de opuestos y ordenando los elementos que componen su obra guiada más por una intención compositiva que por un modelo natural, la artista recrea y crea a la vez. Recrea un  ámbito que a primera vista resultaría familiar, relacionado con la exuberancia de lo vegetal, mientras crea uno totalmente distinto, que pareciera distanciarse de cualquier experiencia previa que se haya podido tener. </em></p>\n\n<p><em>Entre la casi total monocromía del blanco y la calidad sintética de los materiales, podría verse como si la obra de María congelara la cualidad orgánica de esa primera imagen inspiradora, manteniendo la suntuosidad en las formas pero no en las texturas, que se tornan más duras, brillantes y frías, relacionadas con la calidad sensorial de lo plástico. En la combinación de formas, colores y texturas, la artista pareciera elegir reducir su abanico de opciones (paleta de colores reducida, todos materiales sintéticos, todas formas orgánicas) sólo para demostrar combinaciones infinitas al lograr, a pesar de ello, una obra de alto atractivo visual.</em></p>\n\n<p><em>La artista realiza su trabajo capa sobre capa, superponiendo imágenes y tramas en un mismo soporte y superponiendo soportes transparentes entre sí. Su obra puede apreciarse del mismo modo, revelando diferentes niveles de profundidad a medida que se la contempla. María ofrece un paisaje no sólo a la vista sino a la totalidad de los sentidos. Su obra se puede recorrer, aún detenido frente a ella el espectador podría sentir como si adentrara casi físicamente en ese paisaje lleno de fantasía y dramatismo. La percepción parecería perder sus puntos de apoyo, perder toda seguridad sobre lo que se  le da a contemplar. De qué tipo de espacio se trata?</em></p>\n \n<p><em>Es aquí que la obra de María deja su aparente decorativismo detrás: a medida que se la recorre se pueden detectar algunas formas, unas más otras menos visibles. Algunas están incompletas o dos figuras hasta pueden compartir ciertos trazos y fundirse entre sí. Pájaros y flores se confunden, rara vez está cada figura completa. Hasta el orden de la imagen puede invertirse, lo que a su vez se traslada a que el peso visual también se invierta, reforzando aún más las sensaciones de extrañeza que el espectador pudiera tener.</em></p>\n\n<p><em>Y en esta ambigüedad la artista revela su intención: pareciera haber por su parte un intento de reflejar los cambios del paisaje por medio de los materiales sintéticos, aunque buscando recuperar su exhuberancia y sensualidad a pesar de los mismos. </em></p>\n\n<p><em>María confiesa ser una persona urbana, como si ella se moviera en la ciudad como pez en el agua. Tal vez su deseo sea compartir con el espectador la posibilidad que ella tiene de sentir un placer estético en un medio lleno de luces de neón y lonas vinílicas. María Santi nos ofrece así la posibilidad de reconciliarnos con un paisaje visual tecnologizado, al demostrar que por esos mismos medios se pueden crear imágenes altamente atractivas y entornos que recorrer.</em></p>\n                                                               <p class="firma"><strong> Flor Saba</strong>, 2011</p>\n\n\n<p><em>A través de trazos y diseños que podrían remitir a un interés puramente ornamental, entro en un espacio lleno de posibilidades. Trazos como senderos,  líneas curvas para recorrer.</em></p>\n<p><em>Pasada la instancia inicial, el  aspecto decorativo de mi obra, aparece otra instancia mucho más salvaje que me toma por sorpresa. Salvaje por lo frondoso de la imagen a pesar del blanco; salvaje por lo tupido del follaje; salvaje por lo confuso de las formas; salvaje por la diversidad de texturas logradas tan solo mediante la carga matérica; pero, sobre todo, salvaje porque a medida que  avanzo aumenta una inquietante sensación de extrañeza. </em></p>\n\n                                                                <p class="firma"><strong> Maria Santi</strong>, 2011</p>\n\n\n<h4>Frases que me han dicho o que me digo</h4>\n<p>La exposicion ya no es el resultado de un proceso, su happyend, sino un  lugar de produccion <br />\n  El espacio debe ser atravesado por el visitante de tal manera que  efectue por si mismo su propio montaje visual <br />\n  Solo podemos imaginar cosas que hemos visto antes, entonces hay que  pensar estrategias <br />\n  Uno se interesa por las cosas que le han interesado siempre <br />\n  No se resuelve el concepto por el lado formal <br />\n  Ajustar la nitidez y mantener el misterio <br />\n  Desplazar la pintura a la tridimension .Como? <br />\n  Necesidad de producir <br />\n  Profundizar los opuestos NATURAL-ARTIFICIAL para dar sentido e  incrementar la ambiguedad <br />\n  En la superposicionobturar.Tapar para ver es un buen recurso <br />\n  Lo natural, lo artificial,loorganico, los estampados, las mezclas de  imagenes, lo indefinido, lo inacabado. <br />\n  Pintar, superponer, llenar, manchar, tirar, cortar,&nbsp; <br />\n  El color, la superficie, lo brillante, lo opaco.El azar dirigido <br />\n  Usar la restriccion como herramienta <br />\n  Entre decorado, set de filmacion &nbsp;e instalacion&nbsp; <br />\n  Estrategias mimeticas <br />\n  Ciertos materiales como vinilos, esmaltes, nylon, pet, alto impacto <br />\n  Lo ornamental, lo geometrico, las redes, las tramas, las figuras  sintetizadas y entremezcladas <br />\n  Ecosistema inventado <br />\n  El pajaro y la flor transformados en un ornamento <br />\n  Tener un planteo intelectual de tu  obra, recorrela desde el conocimiento<br /><br /></p>\n  \n  \n  \n  \n<p>VERDE- BLANCO<br>\nLINEA- CUERPO<br>\nLUZ- LUMINOSIDAD<br>\nTRANSPARENCIA- RED<br>\nFONDO- RESPIRAR<br>\nSER- FALLECER<br>\nRESPIRAR- HABITAR<br>\nENCAJE- PLATA<br>\nCARNE- PERFUMADA<br>\nVACIO- SER<br>\nASFIXIA- INSTANTE<br>\nORO- FLAMANTE<br>\nBRILLAR- ESPEJO</p>', 'es'),
(2, 2, '<p>Pintar , tirar, manchar, superponer, llenar, tapar.<br />\r\nEl azar dirigido.<br />\r\nTodo blanco. Todo iluminado por los colores. <br />\r\nLiviano y desprejuiciado. Rebuscado y abigarrado.<br />\r\nEl recorte y la obturación.<br />\r\nCapas y capas de transparencias que van formando imágenes no imaginadas por mi. Las imágenes aparecen, crecen, y se transforman. La transparencia se va corporizando y formando imagen. El concepto de transparencia, no en el sentido de claridad, ni de mostrar todo lo que somos, sino como recurso para construir imagenes densas, complejas,  superponiendo varias capas. Más que la imagen final,  me interesa trabajar con esas capas  (imagenes secundarias) que componen y conforman la imagen protagonista.</p>\r\n<p>Alguien me dijo: “Lo tendría para mirarlo y encontrar cada vez un recorte, un paisaje, un adelante, una forma distinta. Como cuando de chicos mirábamos las nubes buscando figuras”\r\n</p>', 'es'),
(3, 1, '<h4>Blanco sobre blanco, capa sobre capa. Lo conocido y lo extraño.</h4>\r\n\r\n<p>Naturaleza viva, en blanco.<br>\r\nPaisaje selvático monocromático.<br>\r\nExhuberancia y sobriedad al mismo tiempo</p>\r\n\r\n\r\n<p><em>La obra de María Santi nos ofrece una imagen ambigua de un entorno natural logrado por ella a través de medios y materiales generalmente sintéticos. Balanceándose una y otra vez entre este par de opuestos y ordenando los elementos que componen su obra guiada más por una intención compositiva que por un modelo natural, la artista recrea y crea a la vez. Recrea un  ámbito que a primera vista resultaría familiar, relacionado con la exuberancia de lo vegetal, mientras crea uno totalmente distinto, que pareciera distanciarse de cualquier experiencia previa que se haya podido tener. </em></p>\r\n\r\n<p><em>Entre la casi total monocromía del blanco y la calidad sintética de los materiales, podría verse como si la obra de María congelara la cualidad orgánica de esa primera imagen inspiradora, manteniendo la suntuosidad en las formas pero no en las texturas, que se tornan más duras, brillantes y frías, relacionadas con la calidad sensorial de lo plástico. En la combinación de formas, colores y texturas, la artista pareciera elegir reducir su abanico de opciones (paleta de colores reducida, todos materiales sintéticos, todas formas orgánicas) sólo para demostrar combinaciones infinitas al lograr, a pesar de ello, una obra de alto atractivo visual.</em></p>\r\n\r\n<p><em>La artista realiza su trabajo capa sobre capa, superponiendo imágenes y tramas en un mismo soporte y superponiendo soportes transparentes entre sí. Su obra puede apreciarse del mismo modo, revelando diferentes niveles de profundidad a medida que se la contempla. María ofrece un paisaje no sólo a la vista sino a la totalidad de los sentidos. Su obra se puede recorrer, aún detenido frente a ella el espectador podría sentir como si adentrara casi físicamente en ese paisaje lleno de fantasía y dramatismo. La percepción parecería perder sus puntos de apoyo, perder toda seguridad sobre lo que se  le da a contemplar. De qué tipo de espacio se trata?</em></p>\r\n \r\n<p><em>Es aquí que la obra de María deja su aparente decorativismo detrás: a medida que se la recorre se pueden detectar algunas formas, unas más otras menos visibles. Algunas están incompletas o dos figuras hasta pueden compartir ciertos trazos y fundirse entre sí. Pájaros y flores se confunden, rara vez está cada figura completa. Hasta el orden de la imagen puede invertirse, lo que a su vez se traslada a que el peso visual también se invierta, reforzando aún más las sensaciones de extrañeza que el espectador pudiera tener.</em></p>\r\n\r\n<p><em>Y en esta ambigüedad la artista revela su intención: pareciera haber por su parte un intento de reflejar los cambios del paisaje por medio de los materiales sintéticos, aunque buscando recuperar su exhuberancia y sensualidad a pesar de los mismos. </em></p>\r\n\r\n<p><em>María confiesa ser una persona urbana, como si ella se moviera en la ciudad como pez en el agua. Tal vez su deseo sea compartir con el espectador la posibilidad que ella tiene de sentir un placer estético en un medio lleno de luces de neón y lonas vinílicas. María Santi nos ofrece así la posibilidad de reconciliarnos con un paisaje visual tecnologizado, al demostrar que por esos mismos medios se pueden crear imágenes altamente atractivas y entornos que recorrer.</em></p>\r\n                                                               <p class="firma"><strong> Flor Saba</strong>, 2011</p>\r\n\r\n\r\n<p><em>A través de trazos y diseños que podrían remitir a un interés puramente ornamental, entro en un espacio lleno de posibilidades. Trazos como senderos,  líneas curvas para recorrer.</em></p>\r\n<p><em>Pasada la instancia inicial, el  aspecto decorativo de mi obra, aparece otra instancia mucho más salvaje que me toma por sorpresa. Salvaje por lo frondoso de la imagen a pesar del blanco; salvaje por lo tupido del follaje; salvaje por lo confuso de las formas; salvaje por la diversidad de texturas logradas tan solo mediante la carga matérica; pero, sobre todo, salvaje porque a medida que  avanzo aumenta una inquietante sensación de extrañeza. </em></p>\r\n\r\n                                                                <p class="firma"><strong> Maria Santi</strong>, 2011</p>\r\n\r\n\r\n<h4>Frases que me han dicho o que me digo</h4>\r\n<p>La exposicion ya no es el resultado de un proceso, su happyend, sino un  lugar de produccion <br />\r\n  El espacio debe ser atravesado por el visitante de tal manera que  efectue por si mismo su propio montaje visual <br />\r\n  Solo podemos imaginar cosas que hemos visto antes, entonces hay que  pensar estrategias <br />\r\n  Uno se interesa por las cosas que le han interesado siempre <br />\r\n  No se resuelve el concepto por el lado formal <br />\r\n  Ajustar la nitidez y mantener el misterio <br />\r\n  Desplazar la pintura a la tridimension .Como? <br />\r\n  Necesidad de producir <br />\r\n  Profundizar los opuestos NATURAL-ARTIFICIAL para dar sentido e  incrementar la ambiguedad <br />\r\n  En la superposicionobturar.Tapar para ver es un buen recurso <br />\r\n  Lo natural, lo artificial,loorganico, los estampados, las mezclas de  imagenes, lo indefinido, lo inacabado. <br />\r\n  Pintar, superponer, llenar, manchar, tirar, cortar,&nbsp; <br />\r\n  El color, la superficie, lo brillante, lo opaco.El azar dirigido <br />\r\n  Usar la restriccion como herramienta <br />\r\n  Entre decorado, set de filmacion &nbsp;e instalacion&nbsp; <br />\r\n  Estrategias mimeticas <br />\r\n  Ciertos materiales como vinilos, esmaltes, nylon, pet, alto impacto <br />\r\n  Lo ornamental, lo geometrico, las redes, las tramas, las figuras  sintetizadas y entremezcladas <br />\r\n  Ecosistema inventado <br />\r\n  El pajaro y la flor transformados en un ornamento <br />\r\n  Tener un planteo intelectual de tu  obra, recorrela desde el conocimiento<br /><br /></p>\r\n  \r\n  \r\n  \r\n  \r\n<p>VERDE- BLANCO<br>\r\nLINEA- CUERPO<br>\r\nLUZ- LUMINOSIDAD<br>\r\nTRANSPARENCIA- RED<br>\r\nFONDO- RESPIRAR<br>\r\nSER- FALLECER<br>\r\nRESPIRAR- HABITAR<br>\r\nENCAJE- PLATA<br>\r\nCARNE- PERFUMADA<br>\r\nVACIO- SER<br>\r\nASFIXIA- INSTANTE<br>\r\nORO- FLAMANTE<br>\r\nBRILLAR- ESPEJO</p>', 'en'),
(4, 2, '<p>Pintar , tirar, manchar, superponer, llenar, tapar.<br />\r\nEl azar dirigido.<br />\r\nTodo blanco. Todo iluminado por los colores. <br />\r\nLiviano y desprejuiciado. Rebuscado y abigarrado.<br />\r\nEl recorte y la obturación.<br />\r\nCapas y capas de transparencias que van formando imágenes no imaginadas por mi. Las imágenes aparecen, crecen, y se transforman. La transparencia se va corporizando y formando imagen. El concepto de transparencia, no en el sentido de claridad, ni de mostrar todo lo que somos, sino como recurso para construir imagenes densas, complejas,  superponiendo varias capas. Más que la imagen final,  me interesa trabajar con esas capas  (imagenes secundarias) que componen y conforman la imagen protagonista.</p>\r\n<p>Alguien me dijo: “Lo tendría para mirarlo y encontrar cada vez un recorte, un paisaje, un adelante, una forma distinta. Como cuando de chicos mirábamos las nubes buscando figuras”\r\n</p>', 'en');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripciones_muestras`
--

CREATE TABLE IF NOT EXISTS `descripciones_muestras` (
  `idDescripcionMuestra` int(11) NOT NULL AUTO_INCREMENT,
  `idMuestra` int(11) NOT NULL,
  `descripcionMuestra` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `idiomaDescripcionMuestra` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idDescripcionMuestra`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `descripciones_muestras`
--

INSERT INTO `descripciones_muestras` (`idDescripcionMuestra`, `idMuestra`, `descripcionMuestra`, `idiomaDescripcionMuestra`) VALUES
(1, 1, 'Muestra(1) colectiva en Galería Praxis, CABA - Noviembre 2012', 'es'),
(2, 2, '16 artistas reunidos por la Escuela de Proyectos. Del 06 al 21 de Diciembre 2011- ARTE X ARTE Lavalleja 1062. Buenos Aires', 'es'),
(3, 3, 'Noviembre 2009 - Fundación Lebensohn, Barracas, Buenos Aires', 'es'),
(4, 4, 'Muestra del Taller de Instalaciones de Marta Ares - Centro Cultural Recoleta - Buenos Aires Verano 2010', 'es'),
(5, 5, 'Salones Regionales de Pintura 2007 - Fundación Avón para la mujer', 'es'),
(6, 6, 'Muestra en el Museo de Bellas Artes Bonaerense', 'es'),
(7, 7, 'Obra Gráfica - Espacio de arte/taller - City Bell', 'es'),
(8, 8, 'Itinerancia organizada por PisoUno Artediseño por las ciudades de Buenos Aires, Rosario, Córdoba y La Cumbre', 'es'),
(9, 9, 'Tercer ciclo de pintura y escultura - mayo, junio, julio y agosto 2011 - Runnies, La Plata', 'es'),
(10, 10, 'Ciclo de pintura, escultura y fotografía - abril, mayo, junio y julio - Runnies, La Plata', 'es'),
(11, 11, 'Ingrese descripción de la muestra', 'es'),
(12, 12, 'Ingrese descripción de la muestra', 'es'),
(13, 13, 'Ingrese descripción de la muestra', 'es'),
(14, 14, 'Ingrese descripción de la muestra', 'es'),
(15, 15, 'Ingrese descripción de la muestra', 'es'),
(16, 16, 'Descripción nueva muestra', 'es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `epigrafes_imagenes_grupos`
--

CREATE TABLE IF NOT EXISTS `epigrafes_imagenes_grupos` (
  `idEpigrafeGrupo` int(11) NOT NULL AUTO_INCREMENT,
  `idImagenGrupo` int(11) NOT NULL,
  `nombreEpigrafeGrupo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `idiomaEpigrafeGrupo` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idEpigrafeGrupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=180 ;

--
-- Volcado de datos para la tabla `epigrafes_imagenes_grupos`
--

INSERT INTO `epigrafes_imagenes_grupos` (`idEpigrafeGrupo`, `idImagenGrupo`, `nombreEpigrafeGrupo`, `idiomaEpigrafeGrupo`) VALUES
(1, 2, 'Caja dorada. Medidas:  40 x 45 cm. Técnica mixta.', 'es'),
(2, 4, 'Caja 1. Medidas: 40 x 45 cm. Técnica mixta.', 'es'),
(3, 6, 'Blancaestampa. Medidas: 0,45 x 0,42. Técnica: esmalte', 'es'),
(4, 8, 'Blancaestampa. Medidas: 0,45 x 0,42. Técnica: esmalte', 'es'),
(5, 10, 'Blancaestampa. Medidas: 0,45 x 0,42. Técnica: esmalte', 'es'),
(6, 12, 'Blancaestampa. Medidas: 0,45 x 0,42. Técnica: esmalte', 'es'),
(7, 14, 'ARBOLROJO. SOPORTE TELA. 1,20 X 1,20. TECNICA MIXTA', 'es'),
(8, 16, 'CABEZA DE PAJARO. SOPORTE TELA. 1,20 X 1,20 MTS. TECNICA MIXTA', 'es'),
(9, 18, 'Enrepajarodera. Técnica mixta SOBRE TELA. 150 x 150 cm año 2011', 'es'),
(10, 20, 'ROJO. SOPORTE TELA. 0,80 X 1,60 MTS. TECNICA MIXTA', 'es'),
(11, 22, 'CAJA BLANCA: PET, ESMALTE SINTETICO.MEDIDAS 0,45 X 0,42 MTS', 'es'),
(12, 24, 'Caja roja. Técnica mixta. Medidas 0,40 x 0.45cm año 2011', 'es'),
(13, 26, 'Rojo1. Pet y esmalte sintético. 100 x 100. Año 2011', 'es'),
(14, 28, 'Rojo2. Pet y esmalte sintético. 100 x 100. Año 2011', 'es'),
(15, 30, 'FLORPAJARO: PET.TEC. MIXTA. MEDIDAS 1,00 X 1,00 MTS', 'es'),
(16, 32, 'PAJAFLOR. PET. TECNICA MIXTA. MEDIDAS : 1,00 X 1,00 MTS', 'es'),
(17, 34, 'RET. TEC. MIXTA. MEDIDAS: 0,40 X 0,40 MTS', 'es'),
(18, 36, 'COLIBRI: TECNICA MIXTA. 0,32 X 0,62 MTS', 'es'),
(19, 38, 'EMPAPELADO FEFA: TECNICA MIXTA . MEDIDAS : 0,56 x 1,00 MTS', 'es'),
(20, 40, 'ENREDADO:  TEC. MIXTA. MEDIDAS : 0,32 X 0,62 MTS', 'es'),
(21, 42, 'ENREPAJAFLOREDA. Detalle. Técnica mixta. 250 x 180 cm.', 'es'),
(22, 44, 'ENREPAJAFLOREDA. Detalle. Técnica mixta. 250 x 180 cm.', 'es'),
(23, 46, 'MEDIDAS 0,20 X 0,20 MTS. SOPORTE: ALTO IMPACTO.TECNICA MIXTA', 'es'),
(24, 48, 'MEDIDAS 0,20 X 0,20 MTS. SOPORTE: ALTO IMPACTO.TECNICA MIXTA', 'es'),
(25, 50, 'MEDIDAS 0,20 X 0,20 MTS. SOPORTE: ALTO IMPACTO.TECNICA MIXTA', 'es'),
(26, 52, 'MEDIDAS 0,20 X 0,20 MTS. SOPORTE: ALTO IMPACTO.TECNICA MIXTA', 'es'),
(27, 54, 'MEDIDAS 0,20 X 0,20 MTS. SOPORTE: ALTO IMPACTO.TECNICA MIXTA', 'es'),
(28, 56, 'MEDIDAS 0,20 X 0,20 MTS. SOPORTE: ALTO IMPACTO.TECNICA MIXTA', 'es'),
(29, 58, 'MEDIDAS 0,20 X 0,20 MTS. SOPORTE: ALTO IMPACTO.TECNICA MIXTA', 'es'),
(30, 60, 'MEDIDAS 0,20 X 0,20 MTS. SOPORTE: ALTO IMPACTO.TECNICA MIXTA', 'es'),
(31, 62, 'MEDIDAS 0,20 X 0,20 MTS. SOPORTE: ALTO IMPACTO.TECNICA MIXTA', 'es'),
(32, 64, 'MEDIDAS 0,20 X 0,20 MTS. SOPORTE: ALTO IMPACTO.TECNICA MIXTA', 'es'),
(33, 66, 'MEDIDAS 0,20 X 0,20 MTS. SOPORTE: ALTO IMPACTO.TECNICA MIXTA', 'es'),
(34, 68, 'MEDIDAS 0,20 X 0,20 MTS. SOPORTE: ALTO IMPACTO.TECNICA MIXTA', 'es'),
(35, 70, 'Uno. Medidas: 40 x 45 cm. Técnica mixta.', 'es'),
(36, 72, 'Seres 1. Medidas: 40 x 45 cm. Técnica mixta.', 'es'),
(37, 74, 'Seres 2. Medidas: 40 x 45 cm. Técnica mixta.', 'es'),
(38, 76, 'Nimbus. Medidas: 40 x 45 cm. Técnica mixta.', 'es'),
(39, 78, 'Nimbus Alada. Medidas: 40 x 45 cm. Técnica mixta.', 'es'),
(40, 80, 'Limbus. Medidas: 40 x 45 cm. Técnica mixta.', 'es'),
(41, 82, 'Desarmables 1, 2 y 3. Medidas: 40 x 45 cm. Técnica mixta.', 'es'),
(42, 84, 'Desarmables 1, 2 y 3. Medidas: 40 x 45 cm. Técnica mixta.', 'es'),
(43, 86, 'Desarmables 1, 2 y 3. Medidas: 40 x 45 cm. Técnica mixta.', 'es'),
(44, 88, 'SALVAJE BLANCO 100 x 200 cm. Esmalte sintético sobre pet.', 'es'),
(45, 90, 'SALVAJES 2 Y SALVAJES: SUPERPOSICION DE VARIOS PET', 'es'),
(46, 92, 'SALVAJE.  PET, ESMALTE SINTETICO. MEDIDAS: 1,00 X 2,00 MTS', 'es'),
(47, 94, '6919.  PET, NYLON.', 'es'),
(48, 96, 'DETALLE', 'es'),
(49, 98, 'NYLONFLOR.  NYLON, ESMALTE SINTETICO. MEDIDAS:', 'es'),
(50, 100, 'ARBOLPLATA.    PET,ESMALTE SINTETICO, VINILOS. MEDIDA: 1,00 X 2,00 MTS', 'es'),
(51, 102, 'LIMPIOVIOLETA. PET, ESMALTE SINTETICO, VINILO. MEDIDAS: 1,00 X 2,00 MTS', 'es'),
(52, 104, 'TREE DORE . PET, ESMALTE SINTETICO, VINILOS. MEDIDAS 1,00 X 2,00 MTS', 'es'),
(53, 106, 'epigrafe', 'es'),
(54, 108, 'PIRAMIDE. ACETATO. MEDIDAS VARIABLES', 'es'),
(55, 110, 'CLASICO. 1.00 MTS DE ALTURA', 'es'),
(56, 112, '6772. 1,00 MTS DE ALTURA', 'es'),
(57, 114, '6778. 1,00 MTS DE ALTURA', 'es'),
(58, 116, 'TUBO 1. PVC Y VINILOS . 1,95 DE ALTURA', 'es'),
(59, 118, 'TUBO 2. PVC Y VINILOS. 1,75 DE ALTURA', 'es'),
(60, 120, 'TUBO 3 . PVC Y VINILOS. 1,75 DE ALTURA', 'es'),
(61, 122, 'PIRAMIDE. ACETATO. MEDIDAS VARIABLES', 'es'),
(62, 124, 'PLATAARBOL. VINILO Y ACETATO', 'es'),
(63, 126, 'ARBOLPLATACALADO. VINILO. MEDIDAS VARIABLES', 'es'),
(64, 128, 'PIRAMIDE. ACETATO. MEDIDAS VARIABLES', 'es'),
(65, 130, 'PIRAMIDE. ACETATO. MEDIDAS VARIABLES', 'es'),
(66, 132, 'FOTOS DE BLOCK DE DIBUJO CON DIBUJOS CALADOS', 'es'),
(67, 134, 'PIRAMIDE. ACETATO. MEDIDAS VARIABLES', 'es'),
(68, 136, 'Nylon Vegetal. Medidas: 40 x 45 cm. Técnica mixta.', 'es'),
(69, 138, 'Dibujos digitales. Medidas variables - Estampapajaros negro', 'es'),
(70, 140, 'Dibujos digitales. Medidas variables - Estampapajaros rojo', 'es'),
(71, 142, 'Dibujos digitales. Medidas variables - Ponja', 'es'),
(72, 144, 'Dibujos digitales. Medidas variables - Ponjaazul', 'es'),
(73, 146, 'Dibujos digitales. Medidas variables - Ponjanieve', 'es'),
(74, 148, 'COLGADA 1: Prueba.  Galeria Isidro Miranda, Escuela de Proyectos. Pet, nylon, vinilos, y mosaicos montados sobre muro', 'es'),
(75, 150, 'COLGADA 2: Prueba.  Galeria Isidro Miranda, Escuela de Proyectos. Pet, nylon, vinilos, y mosaicos montados sobre muro', 'es'),
(76, 152, 'BOSQUEMONTAJE - Distintas posibilidades de montaje de elementos de jardines transportables', 'es'),
(77, 154, 'ENTENDIARBOLES - Distintas posibilidades de montaje de elementos de jardines transportables', 'es'),
(78, 156, 'ENTENDIFLORES - Distintas posibilidades de montaje de elementos de jardines transportables', 'es'),
(79, 158, 'VEO VEO', 'es'),
(80, 160, 'VEO VEO', 'es'),
(81, 162, 'VEO VEO', 'es'),
(82, 164, '200 x 200 cm. Acrílico sobre  tela.', 'es'),
(83, 166, 'animal 140 x 200 cm. Acrílico sobre  tela.', 'es'),
(84, 168, 'Acrílico sobre  tela.', 'es'),
(85, 170, 'Acrílico sobre  tela.', 'es'),
(86, 172, '65 x 200 cm. Acrílico sobre tela', 'es'),
(87, 174, '65 x 200 cm. Acrílico sobre tela', 'es'),
(88, 176, '65 x 200 cm. Acrílico sobre tela', 'es'),
(89, 178, '65 x 200 cm. Acrílico sobre tela', 'es'),
(90, 180, '100 x 100 cm. Acrílico sobre tela', 'es'),
(91, 182, '100 x 100 cm. Acrílico sobre tela', 'es'),
(92, 184, '120 x 170 cm. Acrílico sobre tela', 'es'),
(93, 186, '120 x 170 cm. Acrílico sobre tela', 'es'),
(94, 188, '140 x 140 cm. Acrílico sobre tela', 'es'),
(95, 190, '140 x 140 cm. Acrílico sobre tela', 'es'),
(96, 192, '140 x 140 cm. Acrílico sobre tela', 'es'),
(97, 194, '140 x 140 cm. Acrílico sobre tela', 'es'),
(98, 196, '120 x 120 cm. Acrílico sobre tela', 'es'),
(99, 198, '160 x 160 cm. Acrílico sobre tela', 'es'),
(100, 200, '100 x 100 cm. Acrílico sobre tela', 'es'),
(101, 202, '180 x 180 cm. Acrílico sobre tela', 'es'),
(102, 204, '100 x 80 cm. Acrílico sobre tela', 'es'),
(103, 206, '180 x 30 cm. Acrílico sobre tela', 'es'),
(104, 208, '180 x 30 cm. Acrílico sobre tela', 'es'),
(105, 210, '1,50 x 1,50 MTS. ACRILICO SOBRE TELA', 'es'),
(106, 212, '1,40 X 1,40 MTS. ACRILICO SOBRE TELA Y NYLON', 'es'),
(107, 214, '1,70 X 1,20 MTS. ACRILICO SOBRE TELA', 'es'),
(108, 216, '1,70 X 1,20 MTS. ACRILICO SOBRE TELA', 'es'),
(109, 218, '1,30 X 1,30 MTS. ACRILICO SOBRE TELA', 'es'),
(110, 220, '1,20 X 1,20 MTS. ACRILICO SOBRE TELA', 'es'),
(111, 222, '1,20 X 0,80 MTS. ACRILICO SOBRE TELA', 'es'),
(112, 224, '0,80 X 0,80 MTS. ACRILICO SOBRE TELA', 'es'),
(113, 226, '0,80 X 0,80 MTS. ACRILICO SOBRE TELA', 'es'),
(114, 228, '60 x 80 cm. Acrílico sobre  tela.', 'es'),
(115, 230, '1,80  x 1,80 mts. ACRILICO SOBRE TELA.', 'es'),
(116, 232, '1,80  x 1,80 mts. ACRILICO SOBRE TELA.', 'es'),
(117, 234, '1,80  x 1,80 mts. ACRILICO SOBRE TELA.', 'es'),
(118, 236, '1,50 X 1,50 MTS. ACRILICO SOBRE TELA', 'es'),
(119, 238, '1,50 X 1,50 MTS. ACRILICO SOBRE TELA', 'es'),
(120, 240, '1,50 X 1,50 MTS. ACRILICO SOBRE TELA', 'es'),
(121, 242, '1,40 X 1,40 MTS. ACRILICO SOBRE TELA', 'es'),
(122, 244, '1,40 X 1,40 MTS. ACRILICO SOBRE TELA', 'es'),
(123, 246, '1,40 X 1,40 MTS. ACRILICO SOBRE TELA', 'es'),
(124, 248, '1,40 X 1,40 MTS. ACRILICO SOBRE TELA', 'es'),
(125, 250, '1,30 X 1,30 MTS. ACRILICO SOBRE TELA', 'es'),
(126, 252, '1,30 X 1,30 MTS. ACRILICO SOBRE TELA', 'es'),
(127, 254, '1,20 X 1,20 MTS. ACRILICO SOBRE TELA', 'es'),
(128, 256, '1,20 X 1,20 MTS. ACRILICO SOBRE TELA', 'es'),
(129, 258, '1,00 X 1,00 MTS. ACRILICO SOBRE TELA', 'es'),
(130, 260, '1,00 X 1,00 MTS. ACRILICO SOBRE TELA', 'es'),
(131, 262, '1,80 X 0,30 MTS. ACRILICO SOBRE TELA', 'es'),
(132, 264, '0,30 X 1,80 MTS. ACRILICO SOBRE TELA', 'es'),
(133, 268, '1,20 X 1,70 MTS. ACRILICO SOBRE TELA', 'es'),
(134, 270, '1,20 X 1,70 MTS. ACRILICO SOBRE TELA', 'es'),
(135, 272, '1,30 X 1,30 MTS. ACRILICO SOBRE TELA', 'es'),
(136, 274, '1,40 X 1,20 MTS. ACRILICO SOBRE TELA', 'es'),
(137, 276, '1,40 X 1,40 MTS. ACRILICO SOBRE TELA', 'es'),
(138, 278, '1,40 X 1,40 MTS. ACRILICO SOBRE TELA', 'es'),
(139, 280, 'PRIMER PREMIO. OBRA QUE GANO EL PRIMER PREMIO AVON - MEDIDAS 0.60 X 0.80 MTS - ACRILICO SOBRE TELA', 'es'),
(140, 282, 'CHAPA CON CIRCULOS DE MADERA APLICADOS. MEDIDAS: 1,30 X 1,45 MTS', 'es'),
(141, 284, 'CORTINA ROLLER DE 1,20 X 2,00 MTS', 'es'),
(142, 314, '140 x 140 cm. Acrilico sobre tela. 2007', 'es'),
(143, 316, '140 x 140 cm. Acrilico sobre tela. 2007', 'es'),
(144, 318, '140 x 140 cm. Acrilico sobre tela. 2007', 'es'),
(145, 320, '140 x 140 cm. Acrilico sobre tela. 2007', 'es'),
(146, 322, '140 x 140 cm. Acrilico sobre tela. 2007', 'es'),
(147, 308, '140 x 140 cm. Acrilico sobre tela. 2007', 'es'),
(148, 310, '140 x 140 cm. Acrilico sobre tela. 2007', 'es'),
(149, 312, '140 x 140 cm. Acrilico sobre tela. 2007', 'es'),
(150, 317, '', 'es'),
(151, 319, '', 'es'),
(152, 321, '', 'es'),
(153, 323, '', 'es'),
(154, 325, '', 'es'),
(155, 327, '', 'es'),
(156, 329, 'ho', 'es'),
(157, 331, 'hola', 'es'),
(158, 317, '', 'es'),
(159, 8, '', 'es'),
(160, 337, '', 'es'),
(161, 340, '', 'es'),
(162, 339, '', 'es'),
(163, 341, '', 'es'),
(164, 345, '', 'es'),
(165, 337, '', 'es'),
(166, 337, '', 'es'),
(167, 339, '', 'es'),
(168, 353, '', 'es'),
(169, 349, '', 'es'),
(170, 355, '', 'es'),
(171, 351, '', 'es'),
(172, 362, '', 'es'),
(173, 363, '', 'es'),
(174, 365, ' ', 'es'),
(175, 366, 'Prueba de carga', 'es'),
(176, 368, ' ', 'es'),
(177, 371, ' ', 'es'),
(178, 372, ' ', 'es'),
(179, 375, '', 'es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
  `idGrupo` int(11) NOT NULL AUTO_INCREMENT,
  `idSerie` int(11) NOT NULL,
  `Orden` int(11) NOT NULL,
  PRIMARY KEY (`idGrupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`idGrupo`, `idSerie`, `Orden`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 4),
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(7, 2, 4),
(8, 2, 5),
(9, 1, 3),
(10, 0, 1),
(11, 0, 2),
(12, 0, 3),
(13, 0, 4),
(14, 0, 5),
(15, 1, 5),
(16, 1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_grupos`
--

CREATE TABLE IF NOT EXISTS `imagenes_grupos` (
  `idImagenGrupo` int(11) NOT NULL AUTO_INCREMENT,
  `idGrupo` int(11) NOT NULL,
  `nombreImagenGrupo` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Tipo` char(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'C -> Chica; G -> Grande',
  `Orden` int(11) NOT NULL,
  `idImagenRecursiva` int(11) NOT NULL,
  PRIMARY KEY (`idImagenGrupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=377 ;

--
-- Volcado de datos para la tabla `imagenes_grupos`
--

INSERT INTO `imagenes_grupos` (`idImagenGrupo`, `idGrupo`, `nombreImagenGrupo`, `Tipo`, `Orden`, `idImagenRecursiva`) VALUES
(1, 1, 'caja-dorada.jpg', 'C', 1, 0),
(2, 1, 'caja-dorada_a.jpg', 'G', 1, 0),
(3, 1, 'caja-1.jpg', 'C', 2, 0),
(4, 1, 'caja-1_a.jpg', 'G', 2, 0),
(5, 1, 'blancaestampa.jpg', 'C', 3, 0),
(6, 1, 'blancaestampa_a.jpg', 'G', 3, 0),
(7, 1, 'blancaestampa-1.jpg', 'C', 4, 0),
(8, 1, 'blancaestampa-1_a.jpg', 'G', 4, 0),
(9, 1, 'blancaestampa2.jpg', 'C', 5, 0),
(10, 1, 'blancaestampa2_a.jpg', 'G', 5, 0),
(11, 1, 'blancaestampa-3.jpg', 'C', 6, 0),
(12, 1, 'blancaestampa-3_a.jpg', 'G', 6, 0),
(13, 1, 'arbol-rojo.jpg', 'C', 7, 0),
(14, 1, 'arbol-rojo_a.jpg', 'G', 7, 0),
(15, 1, 'cabeza-de-pajaro.jpg', 'C', 8, 0),
(16, 1, 'cabeza-de-pajaro_a.jpg', 'G', 8, 0),
(17, 1, 'enrepajarodera.jpg', 'C', 9, 0),
(18, 1, 'enrepajarodera_a.jpg', 'G', 9, 0),
(19, 1, 'rojo.jpg', 'C', 10, 0),
(20, 1, 'rojo_a.jpg', 'G', 10, 0),
(21, 1, 'caja-blanca.jpg', 'C', 11, 0),
(22, 1, 'caja-blanca_a.jpg', 'G', 11, 0),
(23, 1, 'caja-roja.jpg', 'C', 12, 0),
(24, 1, 'caja-roja-a.jpg', 'G', 12, 0),
(25, 1, 'rojo-1.jpg', 'C', 13, 0),
(26, 1, 'rojo-1-a.jpg', 'G', 13, 0),
(27, 1, 'rojo-2.jpg', 'C', 14, 0),
(28, 1, 'rojo-2-a.jpg', 'G', 14, 0),
(29, 1, 'florpajaro.jpg', 'C', 15, 0),
(30, 1, 'florpajaro_a.jpg', 'G', 15, 0),
(31, 1, 'pajaflor.jpg', 'C', 16, 0),
(32, 1, 'pajaflor_a.jpg', 'G', 16, 0),
(33, 1, 'ret.jpg', 'C', 17, 0),
(34, 1, 'ret_a.jpg', 'G', 17, 0),
(35, 1, 'colibri.jpg', 'C', 18, 0),
(36, 1, 'colibri_a.jpg', 'G', 18, 0),
(37, 1, 'empapelado-fefa.jpg', 'C', 19, 0),
(38, 1, 'empapelado-fefa_a.jpg', 'G', 19, 0),
(39, 1, 'enredado.jpg', 'C', 20, 0),
(40, 1, 'enredado_a.jpg', 'G', 20, 0),
(41, 1, 'enrepajafloreda-det1.jpg', 'C', 21, 0),
(42, 1, 'enrepajafloreda-det1_a.jpg', 'G', 21, 0),
(43, 1, 'enrepajafloreda-det2.jpg', 'C', 22, 0),
(44, 1, 'enrepajafloreda-det2_a.jpg', 'G', 22, 0),
(45, 1, 'arbol.jpg', 'C', 23, 0),
(46, 1, 'arbol_a.jpg', 'G', 23, 0),
(47, 1, 'arbolentero.jpg', 'C', 24, 0),
(48, 1, 'arbolentero_a.jpg', 'G', 24, 0),
(49, 1, 'arbolrojo.jpg', 'C', 25, 0),
(50, 1, 'arbolrojo_a.jpg', 'G', 25, 0),
(51, 1, 'cola-de-pajaro.jpg', 'C', 26, 0),
(52, 1, 'cola-de-pajaro_a.jpg', 'G', 26, 0),
(53, 1, 'daliaestrella.jpg', 'C', 27, 0),
(54, 1, 'daliaestrella_a.jpg', 'G', 27, 0),
(55, 1, 'dorado.jpg', 'C', 28, 0),
(56, 1, 'dorado_a.jpg', 'G', 28, 0),
(57, 1, 'florhortensia.jpg', 'C', 29, 0),
(58, 1, 'florhortensia_a.jpg', 'G', 29, 0),
(59, 1, 'pajaro.jpg', 'C', 30, 0),
(60, 1, 'pajaro_a.jpg', 'G', 30, 0),
(61, 1, 'palmera-copia.jpg', 'C', 31, 0),
(62, 1, 'palmera-copia_a.jpg', 'G', 31, 0),
(63, 1, 'parteblanca.jpg', 'C', 32, 0),
(64, 1, 'parteblanca_a.jpg', 'G', 32, 0),
(65, 1, 'tornasoldado.jpg', 'C', 33, 0),
(66, 1, 'tornasoldado_a.jpg', 'G', 33, 0),
(67, 1, 'florotra.jpg', 'C', 34, 0),
(68, 1, 'florotra_a.jpg', 'G', 34, 0),
(69, 2, 'uno.jpg', 'C', 1, 0),
(70, 2, 'uno_a.jpg', 'G', 1, 0),
(71, 2, 'seres.jpg', 'C', 2, 0),
(72, 2, 'seres_a.jpg', 'G', 2, 0),
(73, 2, 'seres-2.jpg', 'C', 3, 0),
(74, 2, 'seres-2_a.jpg', 'G', 3, 0),
(75, 2, 'nimbus.jpg', 'C', 4, 0),
(76, 2, 'nimbus_a.jpg', 'G', 4, 0),
(77, 2, 'nimbus-alada.jpg', 'C', 5, 0),
(78, 2, 'nimbus-alada_a.jpg', 'G', 5, 0),
(79, 2, 'limbus.jpg', 'C', 6, 0),
(80, 2, 'limbus_a.jpg', 'G', 6, 0),
(81, 2, 'desarmables-1.jpg', 'C', 7, 0),
(82, 2, 'desarmables-1_a.jpg', 'G', 7, 0),
(83, 2, 'desarmables-2.jpg', 'C', 8, 0),
(84, 2, 'desarmables-2_a.jpg', 'G', 8, 0),
(85, 2, 'desarmables-3.jpg', 'C', 9, 0),
(86, 2, 'desarmables-3_a.jpg', 'G', 9, 0),
(87, 2, 'salvaje.jpg', 'C', 10, 0),
(88, 2, 'salvaje_a.jpg', 'G', 10, 0),
(89, 2, 'salvajes-2.jpg', 'C', 11, 0),
(90, 2, 'salvajes-2_a.jpg', 'G', 11, 0),
(91, 2, 'salvajes.jpg', 'C', 12, 0),
(92, 2, 'salvajes_a.jpg', 'G', 12, 0),
(93, 2, 'IMG_6919.jpg', 'C', 13, 0),
(94, 2, 'IMG_6919_a.jpg', 'G', 13, 0),
(95, 2, 'detalle.jpg', 'C', 14, 0),
(96, 2, 'detalle_a.jpg', 'G', 14, 0),
(97, 2, 'nylonflor.jpg', 'C', 15, 0),
(98, 2, 'nylonflor_a.jpg', 'G', 15, 0),
(99, 2, 'arbolplata.jpg', 'C', 16, 0),
(100, 2, 'arbolplata_a.jpg', 'G', 16, 0),
(101, 2, 'limpiovioleta.jpg', 'C', 17, 0),
(102, 2, 'limpiovioleta_a.jpg', 'G', 17, 0),
(103, 2, 'tree-dore.jpg', 'C', 18, 0),
(104, 2, 'tree-dore_a.jpg', 'G', 18, 0),
(105, 2, 'violet.jpg', 'C', 19, 0),
(106, 2, 'violet_a.jpg', 'G', 19, 0),
(107, 2, 'piramide.jpg', 'C', 20, 0),
(108, 2, 'piramide_a.jpg', 'G', 20, 0),
(109, 2, 'clasico.jpg', 'C', 21, 0),
(110, 2, 'clasico_a.jpg', 'G', 21, 0),
(111, 2, 'IMG_6772.jpg', 'C', 22, 0),
(112, 2, 'IMG_6772_a.jpg', 'G', 22, 0),
(113, 2, 'IMG_6782.jpg', 'C', 23, 0),
(114, 2, 'IMG_6782_a.jpg', 'G', 23, 0),
(115, 2, 'tubo-1.jpg', 'C', 24, 0),
(116, 2, 'tubo-1_a.jpg', 'G', 24, 0),
(117, 2, 'tubo-2.jpg', 'C', 25, 0),
(118, 2, 'tubo-2_a.jpg', 'G', 25, 0),
(119, 2, 'tubo-3.jpg', 'C', 26, 0),
(120, 2, 'tubo-3_a.jpg', 'G', 26, 0),
(121, 2, 'ponjaverdeyrojo.jpg', 'C', 27, 0),
(122, 2, 'ponjaverdeyrojo-a.jpg', 'G', 27, 0),
(123, 2, 'platarbol.jpg', 'C', 28, 0),
(124, 2, 'platarbol_a.jpg', 'G', 28, 0),
(125, 2, 'arbolplatacalado.jpg', 'C', 29, 0),
(126, 2, 'arbolplatacalado_a.jpg', 'G', 29, 0),
(127, 2, 'IMG_6810.jpg', 'C', 30, 0),
(128, 2, 'IMG_6810_a.jpg', 'G', 30, 0),
(129, 2, 'IMG_6957.jpg', 'C', 31, 0),
(130, 2, 'IMG_6957_a.jpg', 'G', 31, 0),
(131, 2, '19.jpg', 'C', 32, 0),
(132, 2, '19_a.jpg', 'G', 32, 0),
(133, 2, 'muertito.jpg', 'C', 33, 0),
(134, 2, 'muertito_a.jpg', 'G', 33, 0),
(135, 3, 'nylon-vegetal.jpg', 'C', 1, 0),
(136, 3, 'nylon-vegetal_a.jpg', 'G', 1, 0),
(137, 3, 'estampapajaros-negro.png', 'C', 2, 0),
(138, 3, 'estampapajaros-negro_a.png', 'G', 2, 0),
(139, 3, 'estampapajarosrojo.png', 'C', 3, 0),
(140, 3, 'estampapajarosrojo_a.png', 'G', 3, 0),
(141, 3, 'ponja.png', 'C', 4, 0),
(142, 3, 'ponja_a.png', 'G', 4, 0),
(143, 3, 'ponjaazul.png', 'C', 5, 0),
(144, 3, 'ponjaazul_a.png', 'G', 5, 0),
(145, 3, 'ponjanieve.png', 'C', 6, 0),
(146, 3, 'ponjanieve-a.png', 'G', 6, 0),
(147, 3, 'colgada-1.jpg', 'C', 7, 0),
(148, 3, 'colgada-1_a.jpg', 'G', 7, 0),
(149, 3, 'colgada-2.jpg', 'C', 8, 0),
(150, 3, 'colgada-2_a.jpg', 'G', 8, 0),
(151, 3, 'bosquemontaje.jpg', 'C', 9, 0),
(152, 3, 'bosquemontaje_a.jpg', 'G', 9, 0),
(153, 3, 'entendiarboles.jpg', 'C', 10, 0),
(154, 3, 'entendiarboles_a.jpg', 'G', 10, 0),
(155, 3, 'entendiflores.jpg', 'C', 11, 0),
(156, 3, 'entendiflores_a.jpg', 'G', 11, 0),
(157, 3, 'veo-veo1.jpg', 'C', 12, 0),
(158, 3, 'veo-veo1a.jpg', 'G', 12, 0),
(159, 3, 'veo-veo2.jpg', 'C', 13, 0),
(160, 3, 'veo-veo2a.jpg', 'G', 13, 0),
(161, 3, 'veo-veo3.jpg', 'C', 14, 0),
(162, 3, 'veo-veo3a.jpg', 'G', 14, 0),
(163, 4, 'u.jpg', 'C', 1, 0),
(164, 4, 'u_a.jpg', 'G', 1, 0),
(165, 4, 'v.jpg', 'C', 2, 0),
(166, 4, 'v_a.jpg', 'G', 2, 0),
(167, 4, 'w.jpg', 'C', 3, 0),
(168, 4, 'w_a.jpg', 'G', 3, 0),
(169, 4, 'x.jpg', 'C', 4, 0),
(170, 4, 'x_a.jpg', 'G', 4, 0),
(171, 5, 'a.jpg', 'C', 1, 0),
(172, 5, 'a_a.jpg', 'G', 1, 0),
(173, 5, 'b.jpg', 'C', 2, 0),
(174, 5, 'b_a.jpg', 'G', 2, 0),
(175, 5, 'c.jpg', 'C', 3, 0),
(176, 5, 'c_a.jpg', 'G', 3, 0),
(177, 5, 'd.jpg', 'C', 4, 0),
(178, 5, 'd_a.jpg', 'G', 4, 0),
(179, 5, 'n.jpg', 'C', 5, 0),
(180, 5, 'o_a.jpg', 'G', 5, 0),
(181, 5, 'k.jpg', 'C', 6, 0),
(182, 5, 'k_a.jpg', 'G', 6, 0),
(183, 5, 'i.jpg', 'C', 6, 0),
(184, 5, 'i_a.jpg', 'G', 6, 0),
(185, 5, 'e.jpg', 'C', 7, 0),
(186, 5, 'e_a.jpg', 'G', 7, 0),
(187, 5, 'f.jpg', 'C', 8, 0),
(188, 5, 'f_a.jpg', 'G', 8, 0),
(189, 5, 'g.jpg', 'C', 9, 0),
(190, 5, 'g_a.jpg', 'G', 9, 0),
(191, 5, 'h.jpg', 'C', 10, 0),
(192, 5, 'h_a.jpg', 'G', 10, 0),
(193, 5, 'j.jpg', 'C', 11, 0),
(194, 5, 'j_a.jpg', 'G', 11, 0),
(195, 5, 'l.jpg', 'C', 12, 0),
(196, 5, 'l_a.jpg', 'G', 12, 0),
(197, 5, 'm.jpg', 'C', 13, 0),
(198, 5, 'm_a.jpg', 'G', 13, 0),
(199, 5, 'p.jpg', 'C', 14, 0),
(200, 5, 'p_a.jpg', 'G', 14, 0),
(201, 5, 'q.jpg', 'C', 15, 0),
(202, 5, 'q_a.jpg', 'G', 15, 0),
(203, 5, 'r.jpg', 'C', 16, 0),
(204, 5, 'r_a.jpg', 'G', 16, 0),
(205, 5, 's.jpg', 'C', 17, 0),
(206, 5, 's_a.jpg', 'G', 17, 0),
(207, 5, '1-150-x-150.jpg', 'C', 18, 0),
(208, 5, '1-150-x-150_a.jpg', 'G', 18, 0),
(209, 5, '2-nylon--140-X-140.jpg', 'C', 19, 0),
(210, 5, '2-nylon--140-X-140_a.jpg', 'G', 19, 0),
(211, 5, '3-170-x-120.jpg', 'C', 20, 0),
(212, 5, '3-170-x-120_a.jpg', 'G', 20, 0),
(213, 5, '4-170-x-120.jpg', 'C', 21, 0),
(214, 5, '4-170-x-120_a.jpg', 'G', 21, 0),
(215, 5, '5-130-x-130.jpg', 'C', 22, 0),
(216, 5, '5-130-x-130_a.jpg', 'G', 22, 0),
(217, 5, '6-120-x-120.jpg', 'C', 23, 0),
(218, 5, '6-120-x-120_a.jpg', 'G', 23, 0),
(219, 5, '7-120-x-080.jpg', 'C', 24, 0),
(220, 5, '7-120-x-080_a.jpg', 'G', 24, 0),
(221, 5, '8-080-x-080.jpg', 'C', 25, 0),
(222, 5, '8-080-x-080_a.jpg', 'G', 25, 0),
(223, 5, '9-080-x-080.jpg', 'C', 26, 0),
(224, 5, '9-080-x-080_a.jpg', 'G', 26, 0),
(225, 6, 't.jpg', 'C', 1, 0),
(226, 6, 't_a.jpg', 'G', 1, 0),
(227, 6, '1-180-x-180.jpg', 'C', 2, 0),
(228, 6, '1-180-x-180_a.jpg', 'G', 2, 0),
(229, 6, '2-180-x-180.jpg', 'C', 3, 0),
(230, 6, '2-180-x-180_a.jpg', 'G', 3, 0),
(231, 6, '3-180-x-180.jpg', 'C', 4, 0),
(232, 6, '3-180-x-180_a.jpg', 'G', 4, 0),
(233, 6, '4-150-x-150.jpg', 'C', 5, 0),
(234, 6, '4-150-x-150_a.jpg', 'G', 5, 0),
(235, 6, '5-150-x-150.jpg', 'C', 6, 0),
(236, 6, '5-150-x-150_a.jpg', 'G', 6, 0),
(237, 6, '6--150-x-150.jpg', 'C', 7, 0),
(238, 6, '6--150-x-150_a.jpg', 'G', 7, 0),
(239, 6, '7-140-x-140.jpg', 'C', 8, 0),
(240, 6, '7-140-x-140_a.jpg', 'G', 8, 0),
(241, 6, '8-140-x-140.jpg', 'C', 9, 0),
(242, 6, '8-140-x-140_a.jpg', 'G', 9, 0),
(243, 6, '9--140-x-140.jpg', 'C', 10, 0),
(244, 6, '9--140-x-140_a.jpg', 'G', 10, 0),
(245, 6, '9-BIS---140-X-140.jpg', 'C', 11, 0),
(246, 6, '9-BIS---140-X-140_a.jpg', 'G', 11, 0),
(247, 6, '10--130-x-130.jpg', 'C', 12, 0),
(248, 6, '10--130-x-130_a.jpg', 'G', 12, 0),
(249, 6, '11-130-x-130.jpg', 'C', 13, 0),
(250, 6, '11-130-x-130_a.jpg', 'G', 13, 0),
(251, 6, '12--120-x-120.jpg', 'C', 14, 0),
(252, 6, '12--120-x-120_a.jpg', 'G', 14, 0),
(253, 6, '13--120-x-120.jpg', 'C', 15, 0),
(254, 6, '13--120-x-120_a.jpg', 'G', 15, 0),
(255, 6, '14--100-x-100.jpg', 'C', 16, 0),
(256, 6, '14--100-x-100_a.jpg', 'G', 16, 0),
(257, 6, '15--100-x-100.jpg', 'C', 17, 0),
(258, 6, '15--100-x-100_a.jpg', 'G', 17, 0),
(259, 6, '20--30-x-180.jpg', 'C', 18, 0),
(260, 6, '20--30-x-180_a.jpg', 'G', 18, 0),
(261, 6, '21.jpg', 'C', 19, 0),
(262, 6, '21_a.jpg', 'G', 19, 0),
(263, 6, '23-120-X-170.jpg', 'C', 20, 0),
(264, 6, '23-120-X-170_a.jpg', 'G', 20, 0),
(265, 6, '24-120-X-170.jpg', 'C', 21, 0),
(266, 6, '24-120-X-170_a.jpg', 'G', 21, 0),
(267, 6, '25-130-X-130.jpg', 'C', 22, 0),
(268, 6, '25-130-X-130_a.jpg', 'G', 22, 0),
(269, 6, '26-140-X-120.jpg', 'C', 23, 0),
(270, 6, '26-140-X-120_a.jpg', 'G', 23, 0),
(271, 6, '27-140-X-140.jpg', 'C', 24, 0),
(272, 6, '27-140-X-140_a.jpg', 'G', 24, 0),
(273, 6, '28-140-X-140.jpg', 'C', 25, 0),
(274, 6, '28-140-X-140_a.jpg', 'G', 25, 0),
(275, 7, '1er-PREMIO.jpg', 'C', 1, 0),
(276, 7, '1er-PREMIO_a.jpg', 'G', 1, 0),
(277, 7, '130-X-145.jpg', 'C', 2, 0),
(278, 7, '130-X-145_a.jpg', 'G', 2, 0),
(279, 7, 'CORTINA.jpg', 'C', 3, 0),
(280, 7, 'CORTINA_a.jpg', 'G', 3, 0),
(281, 7, '--50-x-50.jpg', 'C', 4, 0),
(282, 7, '--50-x-50_a.jpg', 'G', 4, 0),
(283, 7, '11--50-x-50.jpg', 'C', 5, 0),
(284, 7, '11--50-x-50_a.jpg', 'G', 5, 0),
(285, 7, '12--50-x-50.jpg', 'C', 6, 0),
(286, 7, '12--50-x-50_a.jpg', 'G', 6, 0),
(287, 7, '13--50-x-50.jpg', 'C', 7, 0),
(288, 7, '13--50-x-50_a.jpg', 'G', 7, 0),
(289, 7, '18--50-x-50.jpg', 'C', 8, 0),
(290, 7, '18--50-x-50_a.jpg', 'G', 8, 0),
(291, 7, '19--50-x-50.jpg', 'C', 9, 0),
(292, 7, '19--50-x-50_a.jpg', 'G', 9, 0),
(293, 7, '50-x-50-listo.jpg', 'C', 10, 0),
(294, 7, '50-x-50-listo_a.jpg', 'G', 10, 0),
(295, 7, '16--60-x-80.jpg', 'C', 11, 0),
(296, 7, '16--60-x-80_a.jpg', 'G', 11, 0),
(297, 7, '17--50-x-70.jpg', 'C', 12, 0),
(298, 7, '17--50-x-70_a.jpg', 'G', 12, 0),
(299, 7, '17-60-x-60.jpg', 'C', 13, 0),
(300, 7, '17-60-x-60_a.jpg', 'G', 13, 0),
(301, 7, '18--60-x-60.jpg', 'C', 14, 0),
(302, 7, '18--60-x-60_a.jpg', 'G', 14, 0),
(303, 7, '19-50-X-70.jpg', 'C', 15, 0),
(304, 7, '19-50-X-70_a.jpg', 'G', 15, 0),
(305, 7, '22-50-X-70.jpg', 'C', 16, 0),
(306, 7, '22-50-X-70_a.jpg', 'G', 16, 0),
(307, 8, '1--140-X-140.jpg', 'C', 1, 0),
(308, 8, '1--140-X-140_a.jpg', 'G', 1, 0),
(309, 8, '2--140-X-140.jpg', 'C', 2, 0),
(310, 8, '2--140-X-140_a.jpg', 'G', 2, 0),
(311, 8, '3--140-X-140.jpg', 'C', 3, 0),
(312, 8, '3--140-X-140_a.jpg', 'G', 3, 0),
(313, 8, '4--140-X-140.jpg', 'C', 4, 0),
(314, 8, '4--140-X-140_a.jpg', 'G', 4, 0),
(315, 8, '5-140-X-140.jpg', 'C', 5, 0),
(316, 8, '5-140-X-140_a.jpg', 'G', 5, 0),
(317, 1, 'a044a34b9cd0.jpg', 'G', 0, 0),
(318, 1, 'a044a34b9cd0_small.jpg', 'C', 0, 0),
(319, 9, '62b150340fcd.jpg', 'G', 0, 0),
(320, 9, '62b150340fcd_small.jpg', 'C', 0, 0),
(321, 9, '0d4058b3bead.jpg', 'G', 1, 0),
(322, 9, '0d4058b3bead_small.jpg', 'C', 1, 0),
(323, 10, 'af14ef912508.jpg', 'G', 0, 0),
(324, 10, 'af14ef912508_small.jpg', 'C', 0, 0),
(325, 11, '712961402cd4.jpg', 'G', 0, 0),
(326, 11, '712961402cd4_small.jpg', 'C', 0, 0),
(327, 12, 'fafc632a943e.jpg', 'G', 0, 0),
(328, 12, 'fafc632a943e_small.jpg', 'C', 0, 0),
(329, 13, 'a1c70f493247.jpg', 'G', 0, 0),
(330, 13, 'a1c70f493247_small.jpg', 'C', 0, 0),
(331, 14, 'abef30d02291.jpg', 'G', 0, 0),
(332, 14, 'abef30d02291_small.jpg', 'C', 0, 0),
(333, 1, 'f8a78de860e2.gif', 'G', 0, 0),
(334, 1, 'f8a78de860e2_small.gif', 'C', 0, 0),
(335, 1, 'd2f73611bad0.jpg', 'G', 4, 0),
(336, 1, 'd2f73611bad0_small.jpg', 'C', 4, 0),
(337, 15, '56487b4a3e6d.png', 'G', 13, 338),
(338, 15, '56487b4a3e6d_small.png', 'C', 13, 337),
(339, 15, '3a915ee05602.jpg', 'G', 10, 343),
(340, 15, 'a3cdf39bde8e.gif', 'G', 12, 342),
(341, 15, 'adc54fe4bfa4.jpg', 'G', 9, 344),
(342, 15, 'a3cdf39bde8e_small.gif', 'C', 12, 340),
(343, 15, '3a915ee05602_small.jpg', 'C', 10, 339),
(344, 15, 'adc54fe4bfa4_small.jpg', 'C', 9, 341),
(345, 15, 'e1f33d1b6752.jpg', 'G', 8, 346),
(346, 15, 'e1f33d1b6752_small.jpg', 'C', 8, 345),
(347, 15, '7f3fe3452d63.jpg', 'G', 7, 348),
(348, 15, '7f3fe3452d63_small.jpg', 'C', 7, 347),
(349, 15, '0f35610beae0.jpg', 'G', 6, 350),
(350, 15, '0f35610beae0_small.jpg', 'C', 6, 349),
(351, 15, 'caa2f3c77064.jpg', 'G', 5, 352),
(352, 15, 'caa2f3c77064_small.jpg', 'C', 5, 351),
(353, 15, '2b74cf2434dc.jpg', 'G', 11, 354),
(354, 15, '2b74cf2434dc_small.jpg', 'C', 11, 353),
(355, 15, '1e70a86e37a9.gif', 'G', 4, 356),
(356, 15, '1e70a86e37a9_small.gif', 'C', 4, 355),
(357, 15, 'f63d57fe799d.png', 'G', 2, 358),
(358, 15, 'f63d57fe799d_small.png', 'C', 2, 357),
(359, 15, '3b56ec73ad13.png', 'G', 3, 360),
(360, 15, '3b56ec73ad13_small.png', 'C', 3, 359),
(361, 15, '28655d845757.jpg', 'G', 1, 362),
(362, 15, '28655d845757_small.jpg', 'C', 1, 361),
(363, 15, '369ac58016b3.jpg', 'G', 0, 364),
(364, 15, '369ac58016b3_small.jpg', 'C', 0, 363),
(365, 16, 'fce86418e579.png', 'G', 4, 367),
(366, 16, '04698ef02350.jpg', 'G', 3, 369),
(367, 16, 'fce86418e579_small.png', 'C', 4, 365),
(368, 16, 'b01e31708e1f.gif', 'G', 0, 370),
(369, 16, '04698ef02350_small.jpg', 'C', 3, 366),
(370, 16, 'b01e31708e1f_small.gif', 'C', 0, 368),
(371, 16, 'a758d4cdffee.jpg', 'G', 1, 373),
(372, 16, '6441c6f242c2.png', 'G', 2, 374),
(373, 16, 'a758d4cdffee_small.jpg', 'C', 1, 371),
(374, 16, '6441c6f242c2_small.png', 'C', 2, 372),
(375, 4, '8980bb1f3f9c.jpg', 'G', 0, 376),
(376, 4, '8980bb1f3f9c_small.jpg', 'C', 0, 375);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_muestras`
--

CREATE TABLE IF NOT EXISTS `imagenes_muestras` (
  `idImagenMuestra` int(11) NOT NULL AUTO_INCREMENT,
  `idMuestra` int(11) NOT NULL,
  `nombreImagenMuestra` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idImagenMuestra`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `imagenes_muestras`
--

INSERT INTO `imagenes_muestras` (`idImagenMuestra`, `idMuestra`, `nombreImagenMuestra`) VALUES
(3, 2, 'la-zona1.jpg'),
(4, 2, 'la-zona2.jpg'),
(9, 4, 'quizas-te-quedes.jpg'),
(10, 4, 'quizas-te-quedes-2.jpg'),
(11, 4, 'quizas-te-quedes-3.jpg'),
(12, 5, 'avon-1.jpg'),
(13, 5, 'avon-2.jpg'),
(14, 6, 'vestidas-para-matar.jpg'),
(15, 6, 'vestidas-para-matar2.jpg'),
(16, 7, 'obra-grafica1.jpg'),
(17, 7, 'obra-grafica3.jpg'),
(18, 7, 'obra-grafica5.jpg'),
(19, 7, 'obra-grafica6.jpg'),
(20, 8, '0221-1.jpg'),
(21, 8, '0221-2.jpg'),
(22, 9, 'arte-mas-todo-2011-1.jpg'),
(23, 9, 'arte-mas-todo-2011-2.jpg'),
(24, 10, 'ARTE-MAS-TODO-1.jpg'),
(25, 10, 'ARTE-MAS-TODO-3.jpg'),
(26, 11, '8f8fb63f2219.jpg'),
(27, 15, '72c2a9f440fd.jpg'),
(28, 0, '352753557da2.gif'),
(31, 2, 'b66767342c6e.jpg'),
(32, 16, '12c94140730d.jpg'),
(33, 1, '672510e4cae0.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muestras`
--

CREATE TABLE IF NOT EXISTS `muestras` (
  `idMuestra` int(11) NOT NULL AUTO_INCREMENT,
  `Nota` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idMuestra`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `muestras`
--

INSERT INTO `muestras` (`idMuestra`, `Nota`) VALUES
(1, 'Muestra1'),
(2, 'Muestra2'),
(3, 'Muestra3'),
(4, 'Muestra4'),
(5, 'Muestra5'),
(6, 'Muestra6'),
(7, 'Muestra7'),
(8, 'Muestra8'),
(9, 'Muestra9'),
(10, 'Muestra10'),
(11, 'Muestra'),
(12, 'Muestra'),
(13, 'Muestra'),
(14, 'Muestra'),
(15, 'Muestra'),
(16, 'Muestra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `series`
--

CREATE TABLE IF NOT EXISTS `series` (
  `idSerie` int(11) NOT NULL AUTO_INCREMENT,
  `tituloSerie` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `idiomaSerie` varchar(2) COLLATE utf8_unicode_ci NOT NULL COMMENT 'es -> Español; en -> Inglés',
  PRIMARY KEY (`idSerie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `series`
--

INSERT INTO `series` (`idSerie`, `tituloSerie`, `idiomaSerie`) VALUES
(1, 'jardines transportables', 'es'),
(2, 'circular en blanco', 'es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textos`
--

CREATE TABLE IF NOT EXISTS `textos` (
  `idTexto` int(11) NOT NULL AUTO_INCREMENT,
  `cuerpoTexto` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Pagina` int(11) NOT NULL,
  `idiomaTexto` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'es -> Español; en -> Inglés',
  PRIMARY KEY (`idTexto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `textos`
--

INSERT INTO `textos` (`idTexto`, `cuerpoTexto`, `Pagina`, `idiomaTexto`) VALUES
(1, '<h3>Blanco sobre blanco, capa sobre capa. Lo conocido y lo extraño </h3>\n\n<p>Exhuberancia y sobriedad al mismo tiempo.<br />\nLa obra de María Santi se muestra seductora e intrigante a la vez.</p>\n<p>La artista realiza su trabajo capa sobre capa, su procedimiento pareciera centrarse en la superposición, tanto de imágenes y tramas en un mismo soporte como de diferentes soportes transparentes entre sí. Pero también hay otros puntos que se superponen, como sus ideas e intereses (lo ornamental, lo sensorial), que se ven reflejados en el tipo de factura entre una pieza y la otra. Es por eso que su obra puede apreciarse del mismo modo, revelando diferentes niveles de profundidad a medida que se la contempla. Es que María ofrece un paisaje no sólo a la vista sino a la totalidad de los sentidos. La obra entera se puede recorrer, aún detenido frente a ella el espectador podría sentir como si adentrara casi físicamente en ese paisaje lleno de fantasía y dramatismo.</p> \n\n<p>Así María Santi convoca al espectador, a través de su trabajo (atractivo, provocador, que pareciera hasta poder atraparnos), a soltar la seguridad de los puntos de apoyo de todo aquello que resulta reconocible y cómodo para dejarse llevar por un recorrido (o unos recorridos, ya que son infinitos) guiado más por las sensaciones que por las imágenes que observar.</p>\n\n<p class="firma"><strong>Florencia Sabá</strong>, diciembre de 2010 </p>', 1, 'es'),
(2, '<p>Nac&iacute; el 10 de noviembre de 1970 en La Plata, Provincia de Buenos Aires. Me recib&iacute; de Licenciada en Artes Pl&aacute;sticas orientaci&oacute;n Pintura en la Facultad de Bellas Artes de la Universidad Nacional de La Plata en 1993. Actualmente vivo y trabajo en La Plata.-</p>\r\n', 31, 'es'),
(3, '<h3>Otros estudios:</h3>\r\n\r\n<p>2010-2011 - Escuela de Proyectos .Galeria Arte x Arte , C A B A.-<br />\r\n2009 - Seminario de Arte Contemporaneo a cargo de Valeria Gonzalez. Centro Cultural Recoleta, C A B A.-<br />\r\n2009 - Taller para realizar una instalaci&oacute;n a cargo de la artista Marta Ares. Centro Cultural Recoleta, C A B A.-<br />\r\n2006-2007- Cl&iacute;nica de arte a cargo de la artista Ana Eckell.-<br />\r\n2002-2003- Cl&iacute;nica de arte a cargo del artista Eduardo M&eacute;dici.-<br />\r\n1999 - Seminario de resina poli&eacute;ster a cargo de la artista Nicola Constantino.-</p>\r\n\r\n<h3>Exposiciones individuales:</h3>\r\n\r\n<p>2009 - Muestra individual, Fundaci&oacute;n Lebensohn, CABA.-<br />\r\n2002 - Muestra individual, Museo de Bellas Artes Bonaerense, La Plata.-<br />\r\n1999 - Muestra individual, Centro Cultural Islas Malvinas, La Plata.-<br />\r\n1998 - Muestra de pintura, Biblioteca Bartolom&eacute; Mitre, Club del Progreso, CABA.-<br />\r\n1995 - Exposici&oacute;n en la Feria del Libro, CABA.-<br />\r\n1994 - Muestra individual, Museo Municipal de Bellas Artes, La Plata.-</p>\r\n\r\n<h3>Exposiciones colectivas:</h3>\r\n\r\n<p>2012 - Minscapes. Muestra en Galer&iacute;a Praxis, CABA.<br />\r\n2012 - 101 Edici&oacute;n . Sal&oacute;n Nacional de Artes Visuales. Pintura. Palais de Glace.-<br />\r\n2012 - ArteBa .Galer&iacute;a Praxis.-<br />\r\n2011 - ArteBa. Galer&iacute;a Praxis.-<br />\r\n2010 - Muestra &quot;Quiz&aacute;s te quedes un rato&quot;. Centro Cultural Recoleta, CABA.-<br />\r\n2010 - Muestra colectiva, Escuela de Proyectos, Galer&iacute;a Isidro Miranda, CABA.-<br />\r\n2009 - Muestra colectiva. Galeria Isidro Miranda, San Telmo, CABA.-<br />\r\n2009 - Premio Est&iacute;mulo Bonifacio del Carril, Academia Nacional de Bellas Artes. Centro Cultural Recoleta, CABA.-<br />\r\n2008 - Intervenci&oacute;n Per&iacute;metro. Muestra Colectiva. Obra Grafica, taller. City Bell, La Plata.-<br />\r\n2008 - Bienal Premio Federal 2008, CABA.-<br />\r\n2008 - 0221 La Plata Se Muestra - Muestra itinerante. San Telmo, Rosario, C&oacute;rdoba.-<br />\r\n2008 - Premio Platt - Galer&iacute;a Isidro Miranda, CABA.-<br />\r\n2007 - LII Sal&oacute;n de Artes Pl&aacute;sticas Manuel Belgrano. Museo Eduardo S&iacute;vori, CABA.-<br />\r\n2007 - XXIX Sal&oacute;n Nacional de Pintura Fern&aacute;n F&eacute;lix Amador, Luj&aacute;n.-<br />\r\n2007 - Gran Premio Banco de la Provincia de Buenos Aires - Pintura, CABA.-<br />\r\n2007 - Sal&oacute;n Regional de Pintura, Fundaci&oacute;n Avon. Regi&oacute;n Mariquita S&aacute;nchez. Museo Municipal de Arte &quot;&Aacute;ngel Maria de Rosa&quot;. Jun&iacute;n, Buenos Aires.-<br />\r\n2002 - Premio Palais de Glace a Nuevos Pintores, CABA.-<br />\r\n2000 - Sal&oacute;n Nacional de Artes Pl&aacute;sticas 2000, Palais de Glace, CABA.-<br />\r\n2000 - Premio Palais de Glace a Nuevos Pintores 2000, auspicia Mc Donald&#39;s, CABA.-<br />\r\n2000 - IX Sal&oacute;n Nacional de Pintura, Fundaci&oacute;n Avon, Bah&iacute;a Blanca.-<br />\r\n2000 - Bienal de Mor&oacute;n, Universidad Nacional de Mor&oacute;n.-<br />\r\n2000 - Sal&oacute;n Provincial de Arte Joven, Museo de Bellas Artes Bonaerense, La Plata.-<br />\r\n1999 - V Sal&oacute;n de Peque&ntilde;o Formato Centro Fortabat, Alianza Francesa, CABA.-<br />\r\n1996 - IV Sal&oacute;n Nacional de Pintura Florencio P&eacute;rez, La Plata.-<br />\r\n1996 - Sal&oacute;n EDELAP de Artes Pl&aacute;sticas de Dibujo, La Plata.-</p>\r\n', 32, 'es'),
(4, '<h3>Blanco sobre blanco, capa sobre capa. Lo conocido y lo extraño </h3>\r\n\r\n<p>Exhuberancia y sobriedad al mismo tiempo.<br />\r\nLa obra de María Santi se muestra seductora e intrigante a la vez.</p>\r\n<p>La artista realiza su trabajo capa sobre capa, su procedimiento pareciera centrarse en la superposición, tanto de imágenes y tramas en un mismo soporte como de diferentes soportes transparentes entre sí. Pero también hay otros puntos que se superponen, como sus ideas e intereses (lo ornamental, lo sensorial), que se ven reflejados en el tipo de factura entre una pieza y la otra. Es por eso que su obra puede apreciarse del mismo modo, revelando diferentes niveles de profundidad a medida que se la contempla. Es que María ofrece un paisaje no sólo a la vista sino a la totalidad de los sentidos. La obra entera se puede recorrer, aún detenido frente a ella el espectador podría sentir como si adentrara casi físicamente en ese paisaje lleno de fantasía y dramatismo.</p> \r\n\r\n<p>Así María Santi convoca al espectador, a través de su trabajo (atractivo, provocador, que pareciera hasta poder atraparnos), a soltar la seguridad de los puntos de apoyo de todo aquello que resulta reconocible y cómodo para dejarse llevar por un recorrido (o unos recorridos, ya que son infinitos) guiado más por las sensaciones que por las imágenes que observar.</p>\r\n\r\n<p class="firma"><strong>Florencia Sabá</strong>, diciembre de 2010 </p>', 1, 'en'),
(5, '<p>Nací el 10 de noviembre de 1970 en La Plata, Provincia de Buenos Aires.\r\n    Me recibí de Licenciada en Artes Plásticas orientación Pintura en la Facultad de Bellas Artes de la Universidad Nacional de La Plata en 1993.\r\n    Actualmente vivo y trabajo en La Plata.-</p>', 31, 'en'),
(6, '<h3>Otros estudios:</h3>\r\n    \r\n    <p>2010-2011 -  Escuela de Proyectos .Galeria Arte x Arte , C A B A.-<br />\r\n	2009 - Seminario de Arte Contemporaneo a cargo de Valeria Gonzalez. Centro Cultural Recoleta, C A B A.-<br />\r\n	2009 - Taller para realizar una instalación a cargo de la artista Marta Ares. Centro Cultural Recoleta, C A B A.-<br />\r\n	2006-2007- Clínica de arte a cargo de la artista Ana Eckell.-<br />\r\n	2002-2003- Clínica de arte a cargo  del artista Eduardo Médici.-<br />\r\n	1999 - Seminario de resina poliéster a cargo de la artista Nicola Constantino.-\r\n	</p>\r\n\r\n    \r\n    <h3>Exposiciones individuales:</h3>\r\n    \r\n    <p>2009 - Muestra individual, Fundación Lebensohn, CABA.- <br />\r\n	2002 - Muestra individual, Museo de Bellas Artes Bonaerense, La Plata.-<br />\r\n	1999 - Muestra individual, Centro Cultural Islas Malvinas, La Plata.-<br />\r\n	1998 - Muestra de pintura, Biblioteca Bartolomé Mitre, Club del Progreso, CABA.-<br />\r\n	1995 - Exposición en la Feria del Libro, CABA.-<br />\r\n	1994 - Muestra individual,  Museo Municipal de Bellas Artes, La Plata.-\r\n	</p>\r\n    \r\n    <h3>Exposiciones colectivas:</h3>\r\n    \r\n    <p>\r\n	2012 - Minscapes. Muestra en Galería Praxis, CABA.<br />\r\n	2012 - 101 Edición . Salón Nacional de Artes Visuales. Pintura. Palais de Glace.-<br />\r\n	2012 - ArteBa .Galería Praxis.-<br />\r\n	2011 - ArteBa. Galería Praxis.-<br />\r\n	2010 - Muestra "Quizás te quedes un rato". Centro Cultural Recoleta, CABA.-<br />\r\n	2010 - Muestra colectiva, Escuela de Proyectos, Galería Isidro Miranda, CABA.-<br />\r\n	2009 - Muestra colectiva. Galeria Isidro Miranda, San Telmo, CABA.-<br />\r\n	2009 - Premio Estímulo Bonifacio del Carril, Academia Nacional de Bellas Artes. Centro Cultural Recoleta, CABA.-<br />\r\n	2008 - Intervención Perímetro. Muestra Colectiva. Obra Grafica, taller. City Bell, La Plata.-<br />\r\n	2008 - Bienal Premio Federal 2008, CABA.-<br />\r\n	2008 - 0221 La Plata Se Muestra - Muestra itinerante. San Telmo, Rosario, Córdoba.-<br />\r\n	2008 - Premio Platt - Galería Isidro Miranda, CABA.-<br />\r\n	2007 - LII Salón de Artes Plásticas Manuel Belgrano. Museo Eduardo Sívori, CABA.-<br />\r\n	2007 - XXIX Salón Nacional de Pintura Fernán Félix Amador, Luján.-<br />\r\n	 2007 - Gran Premio Banco de la Provincia de Buenos Aires - Pintura, CABA.-<br />\r\n	2007 - Salón Regional de Pintura, Fundación Avon. Región Mariquita Sánchez. Museo Municipal de Arte "Ángel Maria de Rosa". Junín, Buenos Aires.-<br />\r\n	2002 - Premio Palais de Glace a Nuevos Pintores, CABA.-<br />\r\n	2000 - Salón Nacional de Artes Plásticas 2000, Palais de Glace, CABA.-<br />\r\n	2000 - Premio Palais de Glace a Nuevos Pintores 2000, auspicia Mc Donald''s, CABA.-<br />\r\n	2000 - IX Salón Nacional de Pintura, Fundación Avon, Bahía Blanca.-<br />\r\n	2000 - Bienal de Morón, Universidad Nacional de Morón.-<br />\r\n	2000 - Salón Provincial de Arte Joven, Museo de Bellas Artes Bonaerense, La Plata.-<br />\r\n	1999 - V Salón de Pequeño Formato Centro Fortabat, Alianza Francesa, CABA.-<br />\r\n	1996 - IV Salón Nacional de Pintura Florencio Pérez, La Plata.-<br />\r\n	1996 - Salón EDELAP de Artes Plásticas de Dibujo, La Plata.-<br />\r\n	</p>', 32, 'en');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos_grupos`
--

CREATE TABLE IF NOT EXISTS `titulos_grupos` (
  `idTituloGrupo` int(11) NOT NULL AUTO_INCREMENT,
  `idGrupo` int(11) NOT NULL,
  `tituloGrupo` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `IdiomaTituloGrupo` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idTituloGrupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `titulos_grupos`
--

INSERT INTO `titulos_grupos` (`idTituloGrupo`, `idGrupo`, `tituloGrupo`, `IdiomaTituloGrupo`) VALUES
(1, 1, 'telas, cajas y mosaicos', 'es'),
(2, 2, 'módulos, pinturas tubo y papeles', 'es'),
(3, 3, 'digitales, proyectos de instalación', 'es'),
(4, 4, '2013', 'es'),
(5, 5, '2012, 2011', 'es'),
(6, 6, '2010, 2009', 'es'),
(7, 7, 'otros', 'es'),
(8, 8, 'Primeros circulares', 'es'),
(9, 9, 'Ingrese título del grupo', 'es'),
(10, 10, 'Nuevo Grupo', 'es'),
(11, 11, 'Nuevo Grupo', 'es'),
(12, 12, 'Nuevo Grupo', 'es'),
(13, 13, 'Nuevo Grupo', 'es'),
(14, 14, 'Ingrese título del grupo', 'es'),
(15, 15, 'Nuevo Grupo', 'es'),
(16, 16, 'Pruebita', 'es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos_muestras`
--

CREATE TABLE IF NOT EXISTS `titulos_muestras` (
  `idTituloMuestra` int(11) NOT NULL AUTO_INCREMENT,
  `idMuestra` int(11) NOT NULL,
  `tituloMuestra` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `IdiomaTituloMuestra` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idTituloMuestra`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `titulos_muestras`
--

INSERT INTO `titulos_muestras` (`idTituloMuestra`, `idMuestra`, `tituloMuestra`, `IdiomaTituloMuestra`) VALUES
(1, 1, 'Mindscapes(1)', 'es'),
(2, 2, 'La Zona - Modificada', 'es'),
(3, 3, 'Circular Modificado', 'es'),
(4, 4, 'Quizás te quedes un rato', 'es'),
(5, 5, 'Primer Premio', 'es'),
(6, 6, 'Vestidas para matar', 'es'),
(7, 7, 'Intervención Obra gráfica', 'es'),
(8, 8, '0221 La Plata se muestra 2008', 'es'),
(9, 9, 'Arte + todo', 'es'),
(10, 10, 'Arte + todo', 'es'),
(11, 11, 'Muestra 11', 'es'),
(12, 12, 'Muestra 11', 'es'),
(13, 13, 'Ingrese título del grupo', 'es'),
(14, 14, 'Ingrese título del grupo', 'es'),
(15, 15, 'Ingrese título del grupo', 'es'),
(16, 16, 'Nueva muestra', 'es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombreUsuario` varchar(400) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `claveUsuario` varchar(400) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombreUsuario`, `claveUsuario`) VALUES
(1, '8cea758bb9d99a2513ac9cb5d0765a6b', '69a392768a34c7a2f7400c9366b9aa05');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
