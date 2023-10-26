// Header fix
let header = $('.header');
let headerHight = header.height() + 48;
$(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
        header.addClass('header_fixed');
        $('body').css({
            'paddingTop': headerHight + 'px' // делаем отступ у body, равный высоте шапки
        });
    } else {
        header.removeClass('header_fixed');
        $('body').css({
            'paddingTop': 0 // удаляю отступ у body, равный высоте шапки
        })
    }
})