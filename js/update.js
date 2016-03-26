$(function(){
           $("#subida").validate({
        rules: {
            title: { required: true, minlength: 2},
            email: { required:true, email: true},
            msg: { required:true, minlength: 2}
        },
        messages: {
            name: "Debe introducir su nombre.",
            email : "Debe introducir un email válido.",
            msg : "El campo Mensaje es obligatorio.",
        },
        submitHandler: function(form){
            var dataString = 'name='+$('#name').val()+'&email='+$('#email').val()+'&msg='+$('#msg').val();
            $.ajax({
                type: "POST",
                url:"model/contacto_mail.php",
                data: dataString,
                success: function(data){
                    $("#ok").html(data);
                    $("#ok").show();
                    document.getElementById('formid').reset();
                 
                }
            });
        }
    });
	$('#subida').submit(function(){
		
		var comprobar = $('#title').val().length *$('#sust_foto').val().length * $('#sd').val().length *$('#lg').val().length*$('#st').val().length *$('#md').val().length *$('#id_content').val().length ;
		
		if(comprobar>0){
			
			var formulario = $('#update');
			
			var datos = formulario.serialize();
			
			var archivos = new FormData();	
			
			var url = 'php/update_photo.php';
			
				for (var i = 0; i < (formulario.find('input[type=file]').length); i++) { 
				
               	 archivos.append((formulario.find('input[type="file"]:eq('+i+')').attr("name")),((formulario.find('input[type="file"]:eq('+i+')')[0]).files[0]));
				 
      		 	}
				
			$.ajax({
				
				url: url+'?'+datos,
				
				type: 'POST',
				
				contentType: false, 
				
            	data: archivos,
				
               	processData:false,
				
				beforeSend : function (){
					
					$('#cargando').show(300);	
				
				},
				success: function(data){
					
					$('#cargando').hide(300);
					
					$('#fotos').append(data);
					
					$('#subida')[0].reset();
					
					return false;
				}
				
			});
			
			return false;
			
		}else{
			
			alert('Selecciona una foto para subir e ingrese su descripcion');
			
			return false;
			
		}
	});
});
