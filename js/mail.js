$(document).ready(function() {
    $("#ok").hide();

    $("#formid").validate({
        rules: {
            name: { required: true, minlength: 2},
            lastname: { required: true, minlength: 2},
            email: { required:true, email: true},
            phone: { minlength: 2, maxlength: 15},
            years: { required: true},
            msg: { required:true, minlength: 2}
        },
        messages: {
            name: "Debe introducir su nombre.",
            lastname: "Debe introducir su apellido.",
            email : "Debe introducir un email válido.",
            phone : "El número de teléfono introducido no es correcto.",
            years : "Debe introducir solo números.",
            msg : "El campo Mensaje es obligatorio.",
        },
        submitHandler: function(form){
            var dataString = 'name='+$('#name').val()+'&lastname='+$('#lastname').val()+'...';
            $.ajax({
                type: "POST",
                url:"send.php",
                data: dataString,
                success: function(data){
                    $("#ok").html(data);
                    $("#ok").show();
                    $("#formid").hide();
                }
            });
        }
    });
});