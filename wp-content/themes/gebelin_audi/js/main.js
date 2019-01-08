document.addEventListener('DOMContentLoaded', function () {
    $('.instalacionescarousel').owlCarousel({
        loop:true,
        margin: 25,
        center: true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:true
            }
        }
    });

    $('.fijo-izq').hover(function() {
        $(this).toggleClass('active');
        $('.transparencia').toggleClass('active');
        $('.navegador .texto').toggleClass('active');
        $('.navegador .texto h2').toggleClass('active');
        $('.logo-empresa .texto').toggleClass('active');
        $('.logo-empresa .texto p').toggleClass('active');
        $('.informacion .texto').toggleClass('active');
        $('.informacion .texto p').toggleClass('active');
    });



    function posicionarElemento(elemento){
        var posicion_elemento = $(elemento).position();
        var altura_elemento = $(elemento).height();
        var posicion_elemento_general_top = posicion_elemento.top;
        if(window.innerWidth >= 1024) {
            var posicion_elemento_top = posicion_elemento.top - 60;
        } else {
            var posicion_elemento_top = posicion_elemento.top - 136;
        }
        
        var posicion_elemento_bottom = posicion_elemento.top + altura_elemento;
        return [posicion_elemento_top, posicion_elemento_bottom, posicion_elemento_general_top];
    }

    if($("main.inicio").length > 0){
        $(window).scroll(function() {
            var scroll_top = $(window).scrollTop();
            if (scroll_top >= posicionarElemento('#tratamientos')[0] && scroll_top < posicionarElemento('#instalaciones')[0]) {
                $('.navegador svg').removeClass('hover');
                $('.navegador h2').removeClass('hover');
                $('.navegador .tratamientos svg').addClass('hover');
                $('.navegador .tratamientos h2').addClass('hover');
            } else if (scroll_top >= posicionarElemento('#instalaciones')[0] && scroll_top < posicionarElemento('#nosotros')[0]) {
                $('.navegador svg').removeClass('hover');
                $('.navegador h2').removeClass('hover');
                $('.navegador .instalaciones svg').addClass('hover');
                $('.navegador .instalaciones h2').addClass('hover');
            } else if (scroll_top >= posicionarElemento('#nosotros')[0] && scroll_top < posicionarElemento('#contacto')[0]) {
                $('.navegador svg').removeClass('hover');
                $('.navegador h2').removeClass('hover');
                $('.navegador .nosotros svg').addClass('hover');
                $('.navegador .nosotros h2').addClass('hover');
            } else if (scroll_top >= posicionarElemento('#contacto')[0] && scroll_top < posicionarElemento('#contacto')[1]) {
                $('.navegador svg').removeClass('hover');
                $('.navegador h2').removeClass('hover');
                $('.navegador .contacto svg').addClass('hover');
                $('.navegador .contacto h2').addClass('hover');
            } else {
                $('.navegador svg').removeClass('hover');
                $('.navegador h2').removeClass('hover');
            }
        });
    }

    $('header .fijo-izq .navegador a').on('click', function(e){
        e.preventDefault();
        selectedClass = $(this).attr('data-rel');
        $('html, body').animate({
            scrollTop: $("#"+selectedClass).offset().top
        }, 1500);
    });

});