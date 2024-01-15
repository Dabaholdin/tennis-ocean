// Header fix
$(document).ready(function () {




    // Preview фото при добавлении в input
    $('.input_file[type="file"]').change(function (e) {
        let file = $(this)[0].files[0]
        let reader = new FileReader(file);
        reader.readAsDataURL(file)
        reader.onload = function (onloaded) {
            let find_img = $(e.target).parents('.change_image_user_wrapper').find('.image_wrapper img').length
            if (find_img == 0) {
                $(e.target).parents('.change_image_user_wrapper').find('.image_wrapper').append('<img class="ava" src="' + reader.result + '">')
            } else {
                $(e.target).parents('.change_image_user_wrapper').find('.image_wrapper img').attr('src', reader.result)
            }
        }

    })
    // Preview фото при добавлении в input




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
    // Открытие формы сохранения/редактирования детей
    $('button[data-func="saveChild"]').click(function (e) {
        e.preventDefault();


        formDataArr = JSON.stringify(formDataArr);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('.edit-child input[name="_token"]').val()
            }
        })
        let a = new FormData(aaa);
        $.ajax({
            method: 'post',
            url: 'setings/edit',
            dataType: 'json',
            //contentType: false,
            //processData:false,
            data: a,
            success: function (data) {
                 console.log(data);
            }
        })
    })

    $('.addchildform').submit(function (e) {
        e.preventDefault();
        let form_data = new FormData(this);
        $.ajax({
            method: 'post',
            url: 'setings/addchildren',
            dataType: 'json',
            contentType: false,
            processData: false,
            data: form_data,
            success: function (data) {
                if (data.children_add) {
                    window.location.reload()
                }

            }
        })

        //
    })

    $('.children_wrapper input').change(function (e) {
        if (!$(this).hasClass('changed') && $(this).val() != $(this).prop('defaultValue')) {
            $(this).addClass('changed')
        } else { $(this).removeClass('changed') }

    })

    $('.addchildform').change(function (e) {
        let inputs = $('.addchildform input[type="text"]');
        let no_empty = 0;
        $.each(inputs, function (i, el) {
            if (el.value != '') {
                no_empty++
            }

        })
        if (no_empty != 0) {
            $('button[name="addNewChild"]').prop('disabled', false)
        } else {
            $('button[name="addNewChild"]').prop('disabled', true)
        }
    })

    $('.change_user_data').change(function (e) {
        let inputs = $('.change_user_data input[type="text"], input[type="file"], input[type="data"], input[type="tel"], input[type="email"]');
        let no_empty = 0;
        $.each(inputs, function (i, el) {
            if (el.value != '') {
                no_empty++
            }

        })
        if (no_empty != 0) {
            $('button[name="changeUserInfo"]').prop('disabled', false)
            $('button[name="changeUserInfo"]').removeClass('setings_send_button')

        } else {
            $('button[name="changeUserInfo"]').prop('disabled', true)
        }
    })

    // Обновление данных пользователя
        // Редактирование личных данных
        $('.change_user_data').submit(function (e) {
            e.preventDefault();

            let form_data = new FormData(this);
            let user_id = $('.change_user_data input[name="user"]').val()

            $.ajax({
                method: 'post',
                url: 'setings/update/' + user_id,
                dataType: 'json',
                contentType: false,
                processData: false,
                data: form_data,
                success: function (data) {
                    if (data.changed) {
                        window.location.reload();
                        console.log(data)
                        
                    }
                }
            })
        })
        // Изменение пароля
        $('.form_changing_the_password').submit(function(e){
            e.preventDefault();
            let user_id = $('.change_user_data input[name="user"]').val()
    
            let form_data = new FormData(this);
            $.ajax({
                method:'post',
                url: 'setings/change-password/'+user_id,
                dataType:'json',
                contentType: false,
                processData: false,
                data: form_data,
                success:function(data){
                    console.log(data);
                    window.location.replace(data['link']);
                }
            })
            
        })
    // Обновление данных пользователя
    

    $('button[data-func="addChild"]').click(function () {
        if (!$('.user_children_edit_wrapper').hasClass('opening')) {
            $(this).html('Закрыть')
            $('button[name="addNewChild"]').slideDown(1000);
            $('.user_children_edit_wrapper').slideDown(1000).css('display', 'flex');
            $('.user_children_edit_wrapper').addClass('opening');
        } else {
            $(this).html('Добавить ребёнка')
            $('button[name="addNewChild"]').slideUp(1000);
            $('.user_children_edit_wrapper').slideUp(1000);
            $('.user_children_edit_wrapper').removeClass('opening');
        }

    })


    // Выбор интервала времени
    let list_open = 0;
    $('.chose-interval').click(function(){
        console.log(this)
        //console.log($('.interval-list').hasClass('active'))
        if(!list_open){
            list_open = 1;
            $('.interval-list').addClass('active');
            $('.interval-list').toggle();
        }
        
    })
    // alt-interval
    $('li.interval-list-item').click(function(){
        if(list_open){
            list_open = 0;
            $('.interval-list').removeClass('active');
            $('.interval-list').toggle();
            $('.chose-interval').html($(this).html())
            $('.chosed-interval').html($(this).html())
            $('.alt-interval').val($(this).html())
            
        }
        // console.log($(this).html())
        
    })

    $('.m-mobile').click(function(){
        $('.mobile-accmenu-wrapper').toggle(500,function(){
            console.log('Good')
        });
        console.log('qqq')
    })
})// End document


$('button[data-func="tab"]').click(function (e) {
    let target_close = $('button[data-func="tab"].active_tab').attr('data-target');
    let target_open = $(this).attr('data-target');
    $('.' + target_close).slideUp(1000);
    $('button[data-func="tab"].active_tab').removeClass('active_tab');
    setTimeout(function () {
        $('.' + target_open).slideDown(1000)
        
    }, 1000)
    $(this).addClass('active_tab');

})