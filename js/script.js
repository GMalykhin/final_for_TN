$(document).ready(function(){
 
    $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $('.scrollup').fadeIn();
    } 
    else {
        $('.scrollup').fadeOut();
    }
    });
    
    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    }); 
});

$(document).ready( function() {
    var slider = $.fn.fsvs({
        speed : 5000,
        bodyID : 'fsvs-body',
        selector : '> .slide',
        mouseSwipeDisance : 10,
        afterSlide : function(){},
        beforeSlide : function(){},
        endSlide : function(){},
        mouseWheelEvents : true,
        mouseWheelDelay : false,
        scrollableArea : 'scrollable',
        mouseDragEvents : true,
        touchEvents : true,
        arrowKeyEvents : true,
        pagination : true,
        nthClasses : false,
        detectHash : true
    });
    //slider.slideUp();
    //slider.slideDown();
    //slider.slideToIndex( index );
    //slider.unbind();
    //slider.rebind();
});


$(document).ready(function() {
var start_pos=$('.top').offset().top;
 $(window).scroll(function(){
  if ($(window).scrollTop()>=start_pos) {
      if ($('.top').hasClass()==false) $('.top').addClass('to_top'), $('.logo').addClass('logo2'), $('#slogan').addClass('sloganw');
  }
  else $('.top').removeClass('to_top'), $('.logo').removeClass('logo2'), $('#slogan').removeClass('sloganw');
 });
});


$(document).ready(function() {
    $('.gowindow').click( function(){//клик по кнопке
         $('#myoverlay').fadeIn(400, //показываем перекрывающий слой
             function(){
                 $('#modal_window') 
                     .css('display', 'block') //делаем окно видимым
                     .animate({opacity: 1, top: '30%'}, 200); //увеличиваем прозрачность, окно плавно съезжает
         });
     });
     /* убираем окно */
     $('#window_close, #myoverlay').click( function(){ //нажатие по перекрывающему слою или кресту
         $('#modal_window')
             .animate({opacity: 0, top: '45%'}, 200,  //вкл прозрачность, окно идёт вверх
                 function(){
                     $(this).css('display', 'none'); //делаем окно невидимым
                     $('#myoverlay').fadeOut(400); //убираем слой перекрытие
                 }
             );
     });
});