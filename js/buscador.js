$(document).ready(function(){
    $("#sector").change(function(){
    $('#servicio').empty();  
    $('#servicio').append("<option value='' disabled selected>Seleccione un Sector</option>");
        
    var sector=$("#sector").val();

    $.ajax({
		          type : "POST",
		          url : "ajax_buscarServicios.php",
		          data : "sector="+sector,
                          dataType: 'json',
		          success : function(datos) 
					{
                                if(datos){
                                    
                                    $.each(datos,function(ind,elem){
                                   
                                    $('#servicio').append("<option value='"+elem+"'>"+elem+"</option>");
                                  
                                })
                                }
                                
            
		           
		            }
		        });
})

});

