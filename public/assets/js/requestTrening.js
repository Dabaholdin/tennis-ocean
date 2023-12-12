$('.request-trening').click(function(req){
    $trening_id = $(this).data('trening');
    $('.modal-background').fadeIn(500);
})
$(document).ready(function(){
    
    $('.chose-date').click(function(e){
        if($('.chose-idate-wrapper').hasClass('Opened')){
            $('.chose-idate-wrapper').slideUp(800).removeClass('Opened')
        }else{

            $('.chose-idate-wrapper').slideDown(800).addClass('Opened')
        }
    })
})

$('.button_close_form_course').click(function(){
    let form_inputs = $('.add-to-trening input[type="text"], .add-to-trening input[type="hidden"]');
    $.each(form_inputs,function(a,b){
        $(b).val('');
        $('.chose-date').html('');
    })
    $('.modal-background').fadeOut(500);
})