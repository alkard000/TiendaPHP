$(document).ready(function(){
    $('#guardar-producto').on('submit', function(e){
        e.preventDefault();

        var datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data){
                var resultado = data;
                console.log(resultado);
                if(resultado.respuesta == 'exito'){
                    Swal(
                        'Correcto!',
                        'Se guardo Correctamente',
                        'success'
                    )
                }else{
                    Swal(
                        'Error!',
                        'Hubo un Error',
                        'error'
                    )
                }
            }
        });
    });
    $('.borrar_cloth').on('click', function (e) {
        e.preventDefault();
    
        var id = $(this).attr('data-id');
        var tipo = $(this).attr('data-tipo');
    
        swal({
          title: '¿Estás seguro?',
          text: "Un registro eliminado no se puede recuperar",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, Eliminar!',
          cancelButtonText: 'Cancelar'
        }).then(function(){
            $.ajax({
                type: 'post',
                data: {
                id: id,
                registro: 'eliminar'
                },
                url: 'modelo-'+tipo+'.php',
                success: function (data) {
                console.log(data);
                var resultado = JSON.parse(data);
                if (resultado.respuesta == 'exito') {
                    swal(
                    'Eliminado!',
                    'Registro Eliminado.',
                    'success'
                    )
                    jQuery('[data-id="' + resultado.id_eliminado + '"]').parents('tr').remove();
                } else {
                    swal(
                    'Error!',
                    'No se pudo eliminar',
                    'error'
                    )
                }
                }
            })
        });
    });
});