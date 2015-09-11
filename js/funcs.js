
/*
funcion para  eliminar
*/
function eliminar(id)
{
	if (id != null)
	{
		if (confirm(sAdvertenciaEliminar)) {
			$(this).load( PATH_PHP+'baja.php?id='+id);
		}
	}
}




$(document).ready(function(){

	$(".eliminar").click( function(e){
		var id = $(this).attr("id");
		eliminar(id);
	});
        
        $(".borrarGrupo").click(function(e){
            e.preventDefault();
            if(confirm("¿Está seguro que desea eliminar este grupo?") && confirm("Si elimina el grupo se eliminaran todas las imágenes que contenga. ¿Desea continuar?"))
            {
                var post_url = PATH_ADMIN+'borrarGrupo.php';
                var post_data = $(this).attr("data");
                $.ajax({
			type: 'POST',
			url: post_url,
			dataType: "json",
                        data: 'idGrupo='+post_data,
                        success: function(data){
				alert(data.texto);
                                
                                if(data.estado == 1)
                                {
                                    window.location.reload();
                                }
			}
		});
            }
        });
        
        $(".borrarMuestra").click(function(e){
            e.preventDefault();
            if(confirm("¿Está segura que desea eliminar esta muestra?"))
            {
                var post_url = PATH_ADMIN+'borrarMuestra.php';
                var post_data = $(this).attr("data");
                $.ajax({
			type: 'POST',
			url: post_url,
			dataType: "json",
                        data: 'idMuestra='+post_data,
                        success: function(data){
				alert(data.texto);
                                
                                if(data.estado == 1)
                                {
                                    window.location.reload();
                                }
			}
		});
            }
        });
        
        $(".nuevoGrupo").click(function(){
            $("#agregarNuevoGrupo").show();
            $("#agregarNuevoGrupo").load(PATH_UPLOAD+"index.php");
            $("#agregarNuevoGrupo").dialog({
                modal: true,
				width:1100,
				position:"center top",
                close: function(){
                    window.location.reload();
                }
            });
            
        });
        
        $(".nuevaMuestra").click(function(){
            $("#agregarNuevaMuestra").show();
            $("#agregarNuevaMuestra").load(PATH_UPLOAD+"indexMuestra.php");
            $("#agregarNuevaMuestra").dialog({
                modal: true,
                width:1100,
                position:"center top",
                close: function(){
                    window.location.reload();
                }
            });
        });
        
        $(".editarMuestra").click(function(){
            var idM = $(this).attr("data");
            $("#agregarNuevaMuestra").show();
            $("#agregarNuevaMuestra").load(PATH_UPLOAD+"editarMuestra.php?idM="+idM);
            $("#agregarNuevaMuestra").dialog({
                modal: true,
                width:1100,
                position:"center top",
                close: function(){
                    window.location.reload();
                }
            });
        });
		
		 $(".editarSlide").click(function(){
            $("#agregarNuevoGrupo").show();
            $("#agregarNuevoGrupo").load(PATH_UPLOAD+"editarSlide.php");
            $("#agregarNuevoGrupo").dialog({
                modal: true,
                width:1100,
                position:"center top",
                close: function(){
                    window.location.reload();
                }
            });
        });
		
		$(".editarGrupo").click(function(){
            var idM = $(this).attr("data");
            $("#agregarNuevoGrupo").show();
            $("#agregarNuevoGrupo").load(PATH_UPLOAD+"editarGrupo.php?idM="+idM);
            $("#agregarNuevoGrupo").dialog({
                modal: true,
                width:1100,
                position:"center top",
                close: function(){
                    window.location.reload();
                }
            });
        });
        
        $(".ordenarGrupo").click(function(){
            var idS = $(this).attr("data");
            $("#gruposOrdenados").show();
            $("#gruposOrdenados").load(PATH_ADMIN+"ordenarGrupos.php?idS="+idS);
            $("#gruposOrdenados").dialog({
                modal: true,
                width:400,
                position:"center",
                close: function(){
                    window.location.reload();
                }
            });
        });
        
        $(".botonIdioma").click(function(){
            $.ajax({
                url: PATH_PHP+"cambioIdioma.php",
                data: "2",
                success: function(){
                        window.location.reload();
                }
            });
        });
        
        $(".formAdmin").submit(function(e){
            e.preventDefault();
            var form = $(this);
            var post_url = form.attr("action");
            var post_data = form.serialize();
            $.ajax({
                type: 'POST',
                url: post_url,
                data: post_data,
                success: function(msg){
                    if(msg == '9okey')
                    {
                            window.location.replace(PATH_HTML+"obra.php");
                    }
                    else
                    {
                            alert(msg);
                    }
                }
            });
            return false
        });
        
        $(".enviarConcepto").click(function(){
            var form = $("#formConcepto");
            var post_url = form.attr("action");
            var post_data = form.serialize();
            var iO = $(".pageBack").val();
            $.ajax({
                type: 'POST',
                url: post_url,
                data: post_data,
                success: function(msg){
                    alert(msg);
                    window.location.replace(PATH_PHP+"conceptoObra.php?iO="+iO);
                }
            });
        });
        
        $(".enviarTextoPagTresUno").click(function(){
            var form = $("#formTextoPagTresUno");
            var post_url = form.attr("action");
            var post_data = form.serialize();
            
            $.ajax({
                type: 'POST',
                url: post_url,
                data: post_data,
                success: function(msg){
                    alert(msg);
                    window.location.replace(PATH_HTML+"biografia.php");
                }
            });
        });
        
        $(".enviarTextoPagTresDos").click(function(){
            var form = $("#formTextoPagTresDos");
            var post_url = form.attr("action");
            var post_data = form.serialize();
            
            $.ajax({
                type: 'POST',
                url: post_url,
                data: post_data,
                success: function(msg){
                    alert(msg);
                    window.location.replace(PATH_HTML+"biografia.php");
                }
            });
        });

        $(".enviarTexto").click(function(){
            var form = $("#formTextoPagUno");
            var post_url = form.attr("action");
            var post_data = form.serialize();
            
            $.ajax({
                type: 'POST',
                url: post_url,
                data: post_data,
                success: function(msg){
                    alert(msg);
                    window.location.replace(PATH_HTML+"obra.php");
                }
            });
        });

        $('.aceptarOrden').click(function(){ 
            window.location.reload();
        });

        
        /* activa carrousel de obras y anteriores */ 
	$('.sliderImagenes').bxSlider({ 
		slideWidth: 300,
		minSlides: 2,
		maxSlides: 3,
		slideMargin: 20,
                pager: false
	});
        $(".sliderImagenesAnteriores").bxSlider({ 
		slideWidth: 180,
		minSlides: 2,
		maxSlides: 5,
		slideMargin: 20,
                pager: false
	});
});