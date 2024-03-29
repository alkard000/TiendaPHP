$(document).ready(function(){    
    $('#login-admin').on('submit', function(e){
        e.preventDefault();

        var datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data){
            console.log(data);
            var resultado = data;
            if(resultado.respuesta == 'exitoso'){
                Swal(
                    'Login Correcto',
                    'Bienvenido(a) '+resultado.usuario+' !! ',
                    'success'
                )
                setTimeout(function(){
                    window.location.href = 'admin-area.php';
                }, 2000);
            }else{
                Swal(
                    'Error!',
                    'Usuario o Password incorrectos',
                    'error'
                )
            }
            }
        });
    });
});