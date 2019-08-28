$(document).ready(function(){


    $('#productos').DataTable({
        'paging'      : true,
        'pageLength'  : 10,
        'lengthChange': true,
        'lengthMenu':    "Afficher _MENU_ &eacute;l&eacute;ments",
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
            search:'Buscar',
        }
    });


 
})
$(document).ready(function(){


    $('#eventos').DataTable({
        'paging'      : true,
        'pageLength'  : 10,
        'lengthChange': true,
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
})