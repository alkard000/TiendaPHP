$(document).ready(function(){
    var imgItems=$('.slider-show li').length;
    var imgPos=1;
    for(i = 1; i <= imgItems; i++){
        $('.paginaciones').append('<li><span class="fa fa-circle"></span></li>');

    }

    $('.slider-show li').hide();
    $('.slider-show li:first').show();
    $('.paginaciones li:first').css({'color': "purple"});
    

    $('.paginaciones li').click(paginaciones);
    $('.right span').click(nextSlider);
    $('.left span').click(prevSlider);

    setInterval(function(){
        nextSlider();
    },6000);

    function paginaciones(){
        var pagPos=$(this).index() + 1;

        $('.slider-show li').hide();
        $('.slider-show li:nth-child('+ pagPos +')').fadeIn();

        $('.paginaciones li').css({'color': '#333'});
        $(this).css({'color': 'purple'});

        imgPos=pagPos;
    }

    function nextSlider(){
        if(imgPos >= imgItems){
            imgPos=1;
        }else{
            imgPos++;
        }
        $('.paginaciones li').css({'color': '#333'});
        $('.paginaciones li:nth-child('+ imgPos +')').css({'color': 'purple'});


        $('.slider-show li').hide();
        $('.slider-show li:nth-child('+ imgPos +')').fadeIn();

    }
    function prevSlider(){
        if(imgPos <= 1){
            imgPos=imgItems;
        }else{
            imgPos--;
        }
        $('.paginaciones li').css({'color': '#333'});
        $('.paginaciones li:nth-child('+ imgPos +')').css({'color': 'purple'});

        $('.slider-show li').hide();
        $('.slider-show li:nth-child('+ imgPos +')').fadeIn();
    }

    //SOMOS
    $('.quienessomos >li').click(pagination);


    $('ul.quienessomos >li:first').addClass('active-somos');
    $('ul.text-somos li:first').addClass('active-somos');
    $('ul.text-somos li').hide();
    $('ul.text-somos li:first').show();
  
    
  
    function pagination(){
      var pagSomos=$(this).index() + 1;
  
      $('.text-somos li').hide();
      $('.text-somos li:nth-child('+ pagSomos +')').fadeIn();
  
      $('.quienessomos >li').removeClass('active-somos');
      
      $(this).addClass('active-somos');
      $('.text-somos li:nth-child('+ pagSomos +')').addClass('active-somos');

    }
});
