$(document).ready(function(){

    $('.sidebar-menu').tree()

    $('#registros').DataTable({
        'paging'      : true,
        'pageLength'  : 10,
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,
        'language'    : {
            paginate: {
                next:'Siguiente',
                previous:'Anterior',
                last:'Ultimo',
                first:'Primero'
            },
            info:'Mostrando _START_ a _END_ de _TOTAL_ resultados',
            emptyTable:'No Hay Registros',
            infoEmpty:'0 registros',
            search:'Buscar'
        }
    });

    $('#crear_registro').attr('disabled', true);

    $('#repetir_password').on('input', function(){
        var password_nuevo = $('#password').val();

        if($(this).val() == password_nuevo){
            $('#resultado_password').text('Correcto');
            $('#resultado_password').parents('.form-group').addClass('has-success').removeClass('has-error');
            $('input#password').parents('.form-group').addClass('has-success').removeClass('has-error');
            $('#crear_registro').attr('disabled', false);
        }else{
            $('#resultado_password').text('Las contraseñas no coinciden');
            $('#resultado_password').parents('.form-group').addClass('has-error').removeClass('has-success');
            $('input#password').parents('.form-group').addClass('has-error').removeClass('has-success');
        }
    });
})