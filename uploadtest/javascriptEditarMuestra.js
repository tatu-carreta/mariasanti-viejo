$(document).ready(function() {
	


	
	

	// Makes sure the dataTransfer information is sent when we
	// Drop the item in the drop box.
	jQuery.event.props.push('dataTransfer');
	dataArray = [];
	var z = -400;
	// The number of images to display
	var maxFiles = 50;
	var errMessage = 0;
	
	// Get all of the data URIs and put them in an array
	var fileList = -1;
	var idImagen=0; 
	sortedIDs = [];
	result = [];
        var languaje = lang;

	$( ".sortable" ).sortable({
		cursor: "move" ,
		forcePlaceholderSize: true,
		revert: true,
		appendTo: document.body,
		stop: function( event, ui ) {
				sortedIDs = $( ".sortable" ).sortable( "toArray" , {attribute: 'data'} );
			
		}
	});
    $( ".sortable" ).disableSelection();
	
	$('#ulCarga').empty();						
								
        $.each(dataArray2, function(index, file){
            $('#ulCarga').append('<li class="imageLi" data="'+dataArray2[index].id+'"><table><tr><td><img  class="imagenCargada" src="'+dataArray2[index].imagen+'"/> </td></tr></table><a class="delete" onclick="deleteFisico('+dataArray2[index].id+'); return false;">Eliminar</a></li>'); 	
        });

        $(".imagenCargada").each( function(){
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
						
						
						
						// Move each image 40 more pixels across
						z = z+400;
						var image = this.result;
						
						// Push the data URI into an array
						dataArray.push({id: idImagen ,imagen: image, name : file.name, value : this.result});
						// ID IMAGEN VA A HABER QUE TRAERLO DESDE LA BD
						sortedIDs.push( ""+idImagen+"");
						
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
						
								$.each (dataArray ,function (index){
									var found = false;
									if ((dataArray[index].id == idOrden) && !found)
									{
										result.push(dataArray[index]);
										found = true;
										return false;
									}
								});
							
							
						});
						
						dataArray = result;
						
						$('#ulCarga').empty();		
                                                
                                                $.each(dataArray2, function(index, file){
                                                    $('#ulCarga').append('<li class="imageLi" data="'+dataArray2[index].id+'"><table><tr><td><img  class="imagenCargada" src="'+dataArray2[index].imagen+'"/> </td></tr></table><a class="delete" onclick="deleteFisico('+dataArray2[index].id+'); return false;">Eliminar</a></li>'); 	
                                                });

                                                $(".imagenCargada").each( function(){
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
								
                                                $.each(dataArray, function(index, file){
                                                    $('#ulCarga').append('<li class="imageLi" data="'+dataArray[index].id+'"><table><tr><td><img  class="imagenCargada" src="'+dataArray[index].imagen+'"/> </td></tr></table><a class="delete" onclick="deleteSpecific('+dataArray[index].id+'); return false;">Eliminar</a></li>'); 	
                                                });
                                                            
						$(".imagenCargada").each( function(){
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
						
                                                console.log(dataArray);
                                                console.log(dataArray2);
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
		var totalPercent = 100 / dataArray.length;
		var x = 0;
		var y = 0;
		
                if(dataArray.length != 0)
                    {
		$('#loading-content').html('Uploading '+dataArray[0].name);
                    }
		
		
		//ordena data array
		
		result = [];
						
						$.each(sortedIDs, function(key) 
						{
							
							idOrden = sortedIDs[key];
						
								$.each (dataArray ,function (index){
									var found = false;
									if ((dataArray[index].id == idOrden) && !found)
									{
										result.push(dataArray[index]);
										found = true;
										return false;
									}
								});
							
							
						});
						
						dataArray = result;

		
		
		var titulo = $("#titulo").val();
                var descripcion = $("#descripcion").val();
                var idMuestra = $("#muestra").val();
		$.post(PATH_UPLOAD+'edicionMuestra.php', {title: titulo, descript: descripcion, lang:languaje, muestra: idMuestra }, function(data){
			var idMuestra = data;
                        
                    $.each(dataArray, function(index, file) {	
				
					var texto;
					
					$.post(PATH_UPLOAD+'uploadMuestra.php', { arrayImage: dataArray[index], muestra: idMuestra}, function(data) {
					
						console.log(data);
					
						var fileName = dataArray[index].name;
						++x;
						
						// Change the bar to represent how much has loaded
						$('#loading-bar .loading-color').css({'width' : totalPercent*(x)+'%'});
						
						if(totalPercent*(x) == 100) {
							// Show the upload is complete
							alert('Las fotos han sido publicadas!');
							
							// Reset everything when the loading is completed
							
							//setTimeout(restartFiles, 1000);
							dataArray = [];
							$('#upload-button span').html('0 Fotos');
							$('#ulCarga').fadeOut(800);
							setTimeout(function() {
								window.location.reload();								
							}, 2000);

							
							
						} else if(totalPercent*(x) < 100) {
						
							// Show that the files are uploading
							$('#loading-content').html('Uploading '+fileName);
						
						}
						
						// Show a message showing the file URL.
						var dataSplit = data.split(':');
						if(dataSplit[1] == 'uploaded successfully') {
							var realData = '<li><a href="images/'+dataSplit[0]+'">'+fileName+'</a> '+dataSplit[1]+'</li>';
							
							$('#uploaded-files').append('<li><a href="images/'+dataSplit[0]+'">'+fileName+'</a> '+dataSplit[1]+'</li>');
						
							// Add things to local storage 
							if(window.localStorage.length == 0) {
								y = 0;
							} else {
								y = window.localStorage.length;
							}
							
							window.localStorage.setItem(y, realData);
						
						} else {
							$('#uploaded-files').append('<li><a href="images/'+data+'. File Name: '+dataArray[index].name+'</li>');
						}
						
						//window.location.reload();
						
					});
				});
                                alert('La muestra ha sido modificada correctamente.');
							
                                // Reset everything when the loading is completed

                                //setTimeout(restartFiles, 1000);
                                dataArray = [];
                                $('#upload-button span').html('0 Fotos');
                                $('#ulCarga').fadeOut(800);
                                setTimeout(function() {
                                        window.location.reload();									
                                }, 2000);
		});

		
		
		
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


        function deleteFisico(idDelete)
        {
            if(confirm("Está a punto de eliminar esta imagen. ¿Desea continuar?"))
		{

			$.each( dataArray2, function(index){
				
				if(this.id == idDelete)
				{
					dataArray2.splice(index,1);
				}
				
			});
			
			
		
			
						result = [];
						
						$.each(sortedIDs, function(key) 
						{
							
							idOrden = sortedIDs[key];
							if(idOrden != idDelete)
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
						
						dataArray = result;
						
			
			
			
			
			$('#ulCarga').empty();

                        $.each(dataArray2, function(index, file){
                            $('#ulCarga').append('<li class="imageLi" data="'+dataArray2[index].id+'"><table><tr><td><img  class="imagenCargada" src="'+dataArray2[index].imagen+'"/> </td></tr></table><a class="delete" onclick="deleteFisico('+dataArray2[index].id+'); return false;">Eliminar</a></li>'); 	
                        });

                        $(".imagenCargada").each( function(){
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

			$.each(dataArray, function(index, file){
				var found = false;
			
				$('#ulCarga').append('<li class="imageLi" data="'+dataArray[index].id+'"><table><tr><td><img class="imagenCargada" src="'+dataArray[index].imagen+'"/> </td></tr></table><a class="delete" onclick="deleteSpecific('+dataArray[index].id+'); return false">Eliminar</a></li>'); 		
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
						
                    $.post(PATH_UPLOAD+'borrarImagenMuestra.php', {image: idDelete }, function(data){
                        alert(data);
                    });
		}
		else
		{
									
				return false;		
		}		
        }

	function deleteSpecific(idDelete){
	
		if(confirm("Está a punto de eliminar esta imagen. ¿Desea continuar?"))
		{

			$.each( dataArray, function(index){
				
				if(this.id == idDelete)
				{
					dataArray.splice(index,1);
				}
				
			});
			
			
		
			
						result = [];
						
						$.each(sortedIDs, function(key) 
						{
							
							idOrden = sortedIDs[key];
							if(idOrden != idDelete)
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
						
						dataArray = result;
						
			
			
			
			
			$('#ulCarga').empty();

                        $.each(dataArray2, function(index, file){
                            $('#ulCarga').append('<li class="imageLi" data="'+dataArray2[index].id+'"><table><tr><td><img  class="imagenCargada" src="'+dataArray2[index].imagen+'"/> </td></tr></table><a class="delete" onclick="deleteFisico('+dataArray2[index].id+'); return false;">Eliminar</a></li>'); 	
                        });

                        $(".imagenCargada").each( function(){
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

			$.each(dataArray, function(index, file){
				var found = false;
			
				$('#ulCarga').append('<li class="imageLi" data="'+dataArray[index].id+'"><table><tr><td><img class="imagenCargada" src="'+dataArray[index].imagen+'"/> </td></tr></table><a class="delete" onclick="deleteSpecific('+dataArray[index].id+'); return false">Eliminar</a></li>'); 		
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
	}

	
	
	function displayText(object)
	{
			object.next(".divHover").animate({height:'toggle'},160);
	}
	