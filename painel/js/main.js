$(function () {
    var open = true;
    var windowSize = $(window)[0].innerWidth;

    if (windowSize <= 768) {
        open = false

    }

    $('.menu-btn').click(function () {
        if (open) {
            //menu esta aberto precisamos fechar
            $('header, .content').css('width','100%');
            $('header, .content').animate({left: '0'});
            $('aside').fadeOut();
            open = false;
        } else {
            //menu esta fechado precisamos abrir
            $('header, .content').css('width','calc(100% - 250px)');
            $('header, .content').animate({left:'250px'});
            $('aside').fadeIn();
            open = true;
        }

    })

    $('[formato="data"]').mask('99/99/9999');

})