$('.request-trening').click(function(req){
    $uid = $(this).data('uid');
    $trening_id = $(this).data('trening');

    $('.modal-background').fadeIn(500);
})

$('.add-to-trening').submit(function(e){
    e.preventDefault();
    form_data = {
        'trening_id': $trening_id,
        'call_method': $('input[name="chose_send"]:checked').val(),
        'user_id':$uid,
        'chosed_date':$('.chose-idate').val(),
        'interval':$('.alt-interval').val(),
    }
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('.add-to-trening input[name="_token"]').val()
        }
    })
    $.ajax({
        method: 'post',
        url: '/user/invite' ,
        dataType: 'json',
        data: form_data,
        success: function (data) {
            console.log(data)
            if(data['reload']){
                window.location.reload()
            }

        }
    })
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