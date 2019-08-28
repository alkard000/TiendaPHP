
$(document).ready(function(){
  
     

    //MENU RESPONSIVE 
    $('.menu-movil').click(function(){
		$(this).toggleClass('open');
    $(".navegacion-principal").slideToggle(600);
    });
    
    $('.submenu li i').click(function(){
      $(this).toggleClass('open');
      $("ul.menu-principal li ul").slideToggle(600);
      });

    //SEARCHER

    var wHeight = window.innerHeight;
  //search bar middle alignment
  $('#mk-fullscreen-searchform').css('top', wHeight / 2);
  //reform search bar
  jQuery(window).resize(function() {
    wHeight = window.innerHeight;
    $('#mk-fullscreen-searchform').css('top', wHeight / 2);
  });
  // Search
  $('#search-button').click(function() {
    console.log("Open Search, Search Centered");
    $("div.mk-fullscreen-search-overlay").addClass("mk-fullscreen-search-overlay-show");
  });
  $("a.mk-fullscreen-close").click(function() {
    console.log("Closed Search");
    $("div.mk-fullscreen-search-overlay").removeClass("mk-fullscreen-search-overlay-show");
  });

  //FILTER
  $('ul.filtrador >li a:first').addClass('active');
  $('ul.clasificador >li').hide();
  $('ul.clasificador >li:first').show();

  $('ul.filtrador >li a').click(function(){
    $('ul.filtrador >li a').removeClass('active');
    $(this).addClass('active');
    
    $('ul.clasificador >li').hide();

    var activeTab = $(this).attr('href');
    $(activeTab).show();
    return false;
  });
  (function($) {

    var tabs =  $(".tabs li a");
    
    tabs.click(function() {
      var terms = this.hash.replace('/','');
      tabs.removeClass("active");
      $(this).addClass("active");
      $("#terms").find('p').hide();
      $(terms).fadeIn(200);
    });
  
  })(jQuery);
  
  
});

$(function(){
  $('.mas-vendidos .tabla-precio:first').show();
  $('.menu-vendidos a').on('click',function(){

    var enlace=$(this).attr('href');
    $(enlace).slideToggle(600);
  });
});



    //SOMOS
    $('.quienessomos >li').click(pagination);


    $('ul.quienessomos >li:first').addClass('active-somos');
    $('ul.text-somos li:first').addClass('active-somos');
    $('ul.text-somos li').hide();
    $('ul.text-somos li:first').show();
  
    
  
    function pagination(){
      var pagSomos=$(this).index() + 1;
  
      $('.text-somos li').hide();
      $('.text-somos li:nth-child('+ pagSomos +')').slideToggle();
  
      $('.quienessomos li').removeClass('active-somos');
      
      $(this).addClass('active-somos');
      $('.text-somos li:nth-child('+ pagSomos +')').addClass('active-somos');

    }

    //SHOW PAGE SITE
    $('body.hombre ul.menu-principal li:contains("Hombres")').addClass("activos");
    
    //CHAT FACEBOOK
    $(".chat-facebook").on('click', function(){
      
      $(".chat-content").slideToggle();
    });

// ZOOM OF IMAGES
  
$(document).ready(function()
		{
			var sub_width = 0;
			var sub_height = 0;
		 	$(".large").css("background","url('" + $(".small").attr("src") + "') no-repeat");

			$(".zoom-area").mousemove(function(e){
				if(!sub_width && !sub_height)
				{
					var image_object = new Image();
					image_object.src = $(".small").attr("src");
					sub_width = image_object.width;
					sub_height = image_object.height;
				}
				else
				{
					var magnify_position = $(this).offset();

					var mx = e.pageX - magnify_position.left;
					var my = e.pageY - magnify_position.top;
					
					if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
					{
						$(".large").fadeIn(100);
					}
					else
					{
						$(".large").fadeOut(100);
					}
					if($(".large").is(":visible"))
					{
						var rx = Math.round(mx/$(".small").width()*sub_width - $(".large").width()/2)*-1;
						var ry = Math.round(my/$(".small").height()*sub_height - $(".large").height()/2)*-1;

						var bgp = rx + "px " + ry + "px";
						
						var px = mx - $(".large").width()/2;
						var py = my - $(".large").height()/2;

						$(".large").css({left: px, top: py, backgroundPosition: bgp});
					}
				}
			})
    })
    
// PAGINACION PRODUCTS

$(document).ready(function(){
    $('ul.galeria li a:first').addClass('activos');
    $('ul.images-cloth > li ').hide();
    $('ul.images-cloth > li:first').show();

    $('ul.galeria li a').click(function(){
      $('ul.galeria li a').removeClass('activos');
      $(this).addClass('activos');
      
      $('ul.images-cloth > li').hide();

      var activeImage = $(this).attr('href');
      $(activeImage).fadeIn();
      return false;
    });
}); 
  
var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

$(document).ready(function(){

  $("#enviar").click(function(){
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var email = $("#e-mail").val();
    var telefono = $("#telefono").val();
    var cant = $("#cantidad").val();

    if(nombre == ""){
      $("#mensaje1").fadeIn();
      return false;
    }else{
      $('#mensaje1').fadeOut();
      if(apellido == ""){
        $("#mensaje2").fadeIn();
        return false;
      }else {
        $('#mensaje2').fadeOut();
        if(email == "" || !expr.match(email)){
          $("#mensaje3").fadeIn();
          return false;
        }else{
          $('#mensaje3').fadeOut();
          if(telefono == ""){
            $('#mensaje3').fadeIn();
            return false;
          }else{
            $('#mensaje3').fadeOut();
          }
        }
      }
    }

  });
});

//SWEETALERT

$(document).ready(function(){
  $('#guardar-contacto').on('submit', function(e){
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

//SWIPERS

  var swiper = new Swiper('.swiper-container', {
    speed: 600,
    parallax: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

 
  

});

$.fn.dataTable.ext.search.push(
  function( settings, data, dataIndex ) {
      var min = parseInt( $('#min').val(), 10 );
      var max = parseInt( $('#max').val(), 10 );
      var age = parseFloat( data[2] ) || 0; // use data for the age column

      if ( ( isNaN( min ) && isNaN( max ) ) ||
           ( isNaN( min ) && age <= max ) ||
           ( min <= age   && isNaN( max ) ) ||
           ( min <= age   && age <= max ) )
      {
          return true;
      }
      return false;
  }
);

$(document).ready(function() {
  var table = $('#clothes').DataTable();
   
  // Event listener to the two range filtering inputs to redraw on input
  $('#min, #max').keyup( function() {
      table.draw();
  } );
} );


