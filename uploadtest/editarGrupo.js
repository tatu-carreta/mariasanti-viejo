$(document).ready(function() {
	


	
	

	// Makes sure the dataTransfer information is sent when we
	// Drop the item in the drop box.
	jQuery.event.props.push('dataTransfer');
	
	var z = -400;
	// The number of images to display
	var maxFiles = 50;
	var errMessage = 0;
	
	// Get all of the data URIs and put them in an array
	dataArray = [];
	arrayOrden = [];
	var fileList = -1;
	var idImagen= idStart; 
	result = [];
	idSerie = 0;
	language = lang;
	if(lang =='es')
	{
		epigraf = "Coloque un epígrafe en castellano";
	}
	else{
		epigraf = "Write a caption in english";
	}
	
	
	$( ".sortable" ).sortable({
		cursor: "move" ,
		forcePlaceholderSize: true,
		revert: true,
		appendTo: document.body,
		stop: function( event, ui ) {
				sortedIDs = [];
				$( ".sortable li" ).each( function(){
					sortedIDs.push($(this).attr("data"));
				});
			
			
		}
	});
    $( ".sortable" ).disableSelection();
				
								
        $.each(dataArray2, function(index, file){
			var found = false;
			$.each(epigrafes, function(key)
			{
					if (epigrafes[key].id == dataArray2[index].id)
					{
						epigraf = epigrafes[key].text; //trae el epigrafe del arreglo
						found = true;
						return false;
					}
			if (!found)
			{
				if(lang =='es')
				{
					epigraf = "Coloque un epígrafe en castellano";
				}
				else{
					epigraf = "Write a caption in english";
				}
			}
			});
            $('#ulCarga').append('<li class="imageLi" data="'+dataArray2[index].id+'"><table><tr><td><img  class="imagenCargada" src="'+dataArray2[index].imagen+'"/> </td></tr></table><a class="delete" onclick="deleteSpecific('+dataArray2[index].id+'); return false;">Eliminar</a><a class="abrir" onclick="displayText($(this))">Abrir</a><div class="divHover"><textarea onchange="saveText($(this))" data="'+dataArray2[index].id+'" class="epigrafe">'+epigraf+'</textarea></div></li>'); 	
        });

			$(".imagenCargada").each( function()
			{
		
					if($(this).width()  > $(this).height())
					{
						
						//es mas ancha que alta
						$(this).addClass("apaisada");
					}
					else
					{
						
						//es mas alta que ancha
						$(this).addClass("vertical");
					}
			});
		
	// Bind the drop event to the dropzone.
	$('#drop-files').bind('drop', function(e) {
		
		fileList ++;
		// Stop the default action, which is to redirect the page
		// To the dropped file
		
		var files = e.dataTransfer.files;

		// Show the upload holder
		$('#uploaded-holder').show();
		
		// For each file
		$.each(files, function(index, file) {
		
			
						
			// Some error messaging
			if (!files[index].type.match('image.*')) {
				
				if(errMessage == 0) {
					$('#drop-files').html('Sólo se permiten imágenes...');
					++errMessage
				}
				else if(errMessage == 1) {
					$('#drop-files').html('¡He dicho solamente imágenes!');
					++errMessage
				}
				else if(errMessage == 2) {
					$('#drop-files').html("No sabes leer? ¡Ese archivo no es una imagen!");
					++errMessage
				}
				else if(errMessage == 3) {
					$('#drop-files').html("De acuerdo! Haz lo que quieras.");
					errMessage = 0;
				}
				return false;
			}
			
			// Check length of the total image elements
			/*
			if($('#dropped-files > .image').length < maxFiles) {
				// Change position of the upload button so it is centered
				var imageWidths = ((220 + (40 * $('#dropped-files > .image').length)) / 2) - 20;
				$('#upload-button').css({'left' : imageWidths+'px', 'display' : 'block'});
			}*/
			
			// Start a new instance of FileReader
			var fileReader = new FileReader();
				
				// When the filereader loads initiate a function
				fileReader.onload = (function(file) {
					
					return function(e) { 
						
						
						
					
						
						var image = this.result;
						
						// Push the data URI into an array
						dataArray.push({id: idImagen ,imagen: image, name : file.name, value : this.result});
						// ID IMAGEN VA A HABER QUE TRAERLO DESDE LA BD
						sortedIDs.unshift( ""+idImagen+"");
						
						// Just some grammatical adjustments
						if(dataArray.length == 1) {
							$('#upload-button span').html("1 foto pendiende de publicación");
						} else {
							$('#upload-button span').html(dataArray.length+" fotos pendientes de publicación");
						}
						
						// Place extra files in a list WHEN USING MAXFILES
						/*if($('#dropped-files > .image').length < maxFiles) { 
							// Place the image inside the dropzone
							
							$('#ulCarga').append('<li class="image"><img  src="'+image+'"/> <a class="delete" data="'+idImagen+'">Eliminar</a><div class="divHover"><a href="" class="abrir">Abrir</a><p>Coloque un epígrafe en castellano.</p></div></li>'); 
						}
						
						else {
							
							$('#extra-files .number').html('+'+($('#file-list li').length + 1));
							// Show the extra files dialogue
							$('#extra-files').show();
							
							// Start adding the file name to the file list
							$('#extra-files #file-list ul').append('<li>'+file.name+'</li>');
							
						}*/
						
						idImagen ++;
						
						
						result = [];
						
						$.each(sortedIDs, function(key) 
						{
							
							idOrden = sortedIDs[key];
							if(idOrden < idStart)
							{
								$.each (dataArray2 ,function (index){
									var found = false;
									if ((dataArray2[index].id == idOrden) && !found)
									{
										result.push(dataArray2[index]);
										found = true;
										return false;
									}
									
								});
							}
							else
							{
								$.each (dataArray ,function (index){
									var found = false;
									if ((dataArray[index].id == idOrden) && !found)
									{
										result.push(dataArray[index]);
										found = true;
										return false;
									}
									
								});
								
								
							}
							
						});
						
						
						
						
						$('#ulCarga').empty();
						$.each(result, function(index, file){
							var found = false;
							$.each(epigrafes, function(key)
							{
									if (epigrafes[key].id == result[index].id)
									{
										epigraf = epigrafes[key].text; //trae el epigrafe del arreglo
										found = true;
										return false;
									}
									if (!found)
									{
										if(lang =='es')
										{
											epigraf = "Coloque un epígrafe en castellano";
										}
										else{
											epigraf = "Write a caption in english";
										}
									}
							});
							
							$('#ulCarga').append('<li class="imageLi" data="'+result[index].id+'"><table><tr><td><img  class="imagenCargada" src="'+result[index].imagen+'"/> </td></tr></table><a class="delete" onclick="deleteSpecific('+result[index].id+'); return false;">Eliminar</a><a class="abrir" onclick="displayText($(this))">Abrir</a><div class="divHover"><textarea onchange="saveText($(this))" data="'+result[index].id+'" class="epigrafe">'+epigraf+'</textarea></div></li>'); 	
						});

												
					
						$(".imagenCargada").each( function()
						{
					
								if($(this).width()  > $(this).height())
								{
									
									//es mas ancha que alta
									$(this).addClass("apaisada");
								}
								else
								{

									//es mas alta que ancha
									$(this).addClass("vertical");
								}
						});
			
					}; 
					
				})(files[index]);
				
			// For data URI purposes
			fileReader.readAsDataURL(file);

		});
		
				
	});
	
	function restartFiles() {
	
		// This is to set the loading bar back to its default state
		$('#loading-bar .loading-color').css({'width' : '0%'});
		$('#loading').css({'display' : 'none'});
		$('#loading-content').html(' ');
		// --------------------------------------------------------
		
		// We need to remove all the images and li elements as
		// appropriate. We'll also make the upload button disappear
		
		$('#upload-button').hide();
		$('#dropped-files > .image').remove();
		$('#extra-files #file-list li').remove();
		$('#extra-files').hide();
		$('#uploaded-holder').hide();
		
		
		// And finally, empty the array/set z to -40
		dataArray.length = 0;
		z = -400;
		
		return false;
	}
	

	
	
	$('#upload-button .upload').click(function() {
		
		$("#loading").show();
		var totalPercent = 100 / result.length;
		var x = 0;
		var y = 0;
		
		$('#loading-content').html('Cargando ');
	
		var debug = [];
		
		//ordena data array
		
		result = [];
						
						$.each(sortedIDs, function(key) 
						{
							
							idOrden = sortedIDs[key];
							if(idOrden < idStart)
							{
								$.each (dataArray2 ,function (index){
									var found = false;
									if ((dataArray2[index].id == idOrden) && !found)
									{
										result.push(dataArray2[index]);
										found = true;
										return false;
									}
									
								});
							}
							else
							{
								$.each (dataArray ,function (index){
									var found = false;
									if ((dataArray[index].id == idOrden) && !found)
									{
										result.push(dataArray[index]);
										found = true;
										return false;
									}
									
								});
								
								
							}
							
						});
						
						
			
		
		
					var titulo = $("#titulo").val();
					
					$.ajaxSetup({async: false});
					$.post(PATH_UPLOAD+'edicionGrupo.php', {title: titulo, group: idGrupo, lang: language });
					
					
					$.each(result, function(index, file) 
					{			
						var texto;
						var found = false;
						$.each( epigrafes, function(key){
							if(epigrafes[key].id ==result[index].id)
							{
								texto = epigrafes[key].text;
								found = true;
								return false;
							}
						});
			
						if( result[index].id < idStart)
						{
						
							$.post(PATH_UPLOAD+'editarEpigrafe.php', { arrayImage: result[index], text: texto, order: index, group: idGrupo}, function(data){
								debug.push({ arrayImage: result[index], text: texto, order: index, group: idGrupo});
								
							}); //si la imagen es vieja la edita 
						}
						else
						{
							$.post(PATH_UPLOAD+'upload.php', { arrayImage: result[index], arrayText: texto, order: index, group: idGrupo}, function(data){
								debug.push({ arrayImage: result[index], arrayText: texto, order: index, group: idGrupo});
						
							}); //si es nueva la agrega
						}
					});
			
						console.log(debug);
								// Show the upload is complete
								alert('Las fotos han sido publicadas!');
								
								// Reset everything when the loading is completed
								
								//setTimeout(restartFiles, 1000);
								dataArray = [];
								result=[];
								$('#upload-button span').html('0 Fotos nuevas');
								$('#ulCarga').fadeOut(800);
								setTimeout(function() {
									window.location.reload();							
								}, 2000);

								
								
							
							
							
		
		
		return false;
	});
	
	// Just some styling for the drop file container.
	$('#drop-files').bind('dragenter', function() {
		return false;
	});
	
	$('#drop-files').bind('drop', function() {
		return false;
	});
	
	// For the file list
	$('#extra-files .number').toggle(function() {
		$('#file-list').show();
	}, function() {
		$('#file-list').hide();
	});

	

	
	$('#dropped-files #upload-button .eliminar').click(function(){
		if (confirm("¿Está seguro que desea cancelar?"))
		{
			window.location.reload();
		}
		
	});
	
	// Append the localstorage the the uploaded files section
	if(window.localStorage.length > 0) {
		$('#uploaded-files').show();
		for (var t = 0; t < window.localStorage.length; t++) {
			var key = window.localStorage.key(t);
			var value = window.localStorage[key];
			// Append the list items
			if(value != undefined || value != '') {
				$('#uploaded-files').append(value);
			}
		}
	} else {
		$('#uploaded-files').hide();
	}
});


	
	function deleteSpecific(idDelete){
	
		if(confirm("Está a punto de eliminar esta imagen. ¿Desea continuar?"))
		{
		
			if(idDelete >= idStart)
			{
				$.each( dataArray, function(index){
				
					if(this.id == idDelete)
					{
						dataArray.splice(index,1);
						found = true;
					}
				
				});
			}
			else
			{
				$.each(dataArray2, function(index){
				
					if(this.id == idDelete)
					{
						dataArray2.splice(index,1);
						found = true;
					}
					
				});
				
					
				$.post(PATH_UPLOAD+'borrarImagenGrupo.php', {image: idDelete }, function(data){
				
				});
			}
			
			
		
			
						result = [];

						
						$.each(sortedIDs, function(key) 
						{
							
							idOrden = sortedIDs[key];
							if(idOrden < idStart)
							{
								$.each (dataArray2 ,function (index){
									var found = false;
									if ((dataArray2[index].id == idOrden) && !found)
									{
										result.push(dataArray2[index]);
										found = true;
										return false;
									}
									
								});
							}
							else
							{
								$.each (dataArray ,function (index){
									var found = false;
									if ((dataArray[index].id == idOrden) && !found)
									{
										result.push(dataArray[index]);
										found = true;
										return false;
									}
									
								});
								
								
							}
							
						});
					
		

			$('#ulCarga').empty();
			$.each(result, function(index, file){
				var found = false;
				$.each(epigrafes, function(key)
							{
									if (epigrafes[key].id == result[index].id)
									{
										epigraf = epigrafes[key].text; //trae el epigrafe del arreglo
										found = true;
										return false;
									}
									if (!found)
									{
										if(lang =='es')
										{
											epigraf = "Coloque un epígrafe en castellano";
										}
										else{
											epigraf = "Write a caption in english";
										}
									}
							});
				$('#ulCarga').append('<li class="imageLi" data="'+result[index].id+'"><table><tr><td><img class="imagenCargada" src="'+result[index].imagen+'"/> </td></tr></table><a class="delete" onclick="deleteSpecific('+result[index].id+'); return false">Eliminar</a><a class="abrir" onclick="displayText($(this))">Abrir</a><div class="divHover"><textarea onchange="saveText($(this))" class="epigrafe">'+epigraf+'</textarea></div></li>'); 		
			});
			

			$(".imagenCargada").each( function()
			{
		
					if($(this).width()  > $(this).height())
					{
						
						//es mas ancha que alta
						$(this).addClass("apaisada");
					}
					else
					{

						//es mas alta que ancha
						$(this).addClass("vertical");
					}
			});
			
			// Just some grammatical adjustments
						if(dataArray.length == 1) {
							$('#upload-button span').html("1 foto pendiende de publicación");
						} else {
							$('#upload-button span').html(dataArray.length+" fotos pendientes de publicación");
						}
						
		
		}
		else
		{
									
				return false;		
		}			
	}
	
	function saveText (object)
	{

			var idE = object.attr("data");
			var epigrafe = object.val();
			epigrafe = epigrafe.replace(/(\n)+/g, '<br>');
			var found = false;
			$.each( epigrafes, function(index)
			{
				if (epigrafes[index].id == idE)
				{
					
					found = true;
					epigrafes[index].text = epigrafe;
					return false;
				}
			});
			
			if (!found)
			{
				epigrafes.push({id: idE, text: epigrafe});
			}
			
			
			
		
	}

	
	
	function displayText(object)
	{
			object.next(".divHover").animate({height:'toggle'},160);
	}
	