$(document).ready(function () {
    let new_user = false;
    $('.popub-background').click(function (e) {
        let close_space = $('.popub-background');

        if (e.target == close_space[0]) {
            $('.popup-wrapper').fadeOut(600);
        }
    })


    function inputClear(arr) {
        $.each(arr, function (i, obj) {
            if (obj.name != '_token') {
                if (obj.value != '') {
                    obj.value = '';
                }
            }
        })

    }

    $('.button-fn').click('button', function (e) {





        //Проверям что атрибут есть
        if ($(e.target).data('target') != undefined) {

            let e_target = $(e.target).data('target');
            let next_step = ($(e.target).data('next-step') != '') ? $(e.target).data('next-step') : false;
            if (e_target == 'open-popup') {

                //$('.popup-wrapper').css('display','block');
                $('.popup-wrapper').fadeIn();
                $('.registration').addClass('active-step');
            };
            if (e_target == 'login-form') {
                $('.registration').fadeOut(600);
                setTimeout(function () {
                    $('.step-title').text('Вход');
                    $('.step-progress').css('display', 'none');
                    $('.congrat-text').css('display', 'none');
                    $('.login').fadeIn(600);
                }, 600);
            };
            if (e_target == 'registration') {
                e.preventDefault();

                let regForm = {
                    token: $('.registration-form input[name="_token"]').val(),
                    firstname: $('.registration-form input[name="firstname"]').val(),
                    lastname: $('.registration-form input[name="lastname"]').val(),
                    email: $('.registration-form input[name="email"]').val(),
                    password: $('.registration-form input[name="password"]').val(),
                    cpassword: $('.registration-form input[name="cpassword"]').val(),
                }
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('.registration-form input[name="_token"]').val()
                    }
                })
                $.ajax({
                    type: 'POST',
                    url: '/registration',
                    dataType: 'json',
                    data: regForm,
                    success: function (data) {
                        if (data.status == 400) {
                            $('.registration-form input').removeClass('input-error');
                            $.each(data.messages, function (name, text) {


                                $('.registration-form input[name=' + name + ']').addClass('input-error');
                            })
                        }
                        else {
                            console.log("Регистрация")
                            console.log(data)
                            new_user = data['user'].id;
                            $('.registration').fadeOut(600);
                            $('.activation').fadeIn(600);
                        }
                    }
                })
            }
            if (e_target == 'activation') {
                e.preventDefault();
                let form_data = {
                    verivi_code: $('.activation-form input[name="code"]').val(),
                    user_id: new_user,
                }
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('.activation-form input[name="_token"]').val()
                    }
                })
                $.ajax({
                    type: 'POST',
                    url: '/activation',
                    dataType: 'json',
                    data: form_data,
                    success: function (data) {
                        console.log(data)
                        $('.activation').fadeOut(600);
                        $('.login').fadeIn(600);
                    }
                })
                return
            }
            if (e_target == 'login') {
                e.preventDefault();
                let form_data = {
                    email: $('.login-form input[name="email"]').val(),
                    password: $('.login-form input[name="password"]').val(),
                }
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('.login-form input[name="_token"]').val()
                    }
                })
                $.ajax({
                    type: 'POST',
                    url: '/login',
                    dataType: 'json',
                    data: form_data,
                    success: function (data) {
                        console.log(data)
                        if (data.status == 200) {
                            window.location.replace(data.link)
                        }
                        if (!data.verivied) {
                            $('.login').fadeOut(600);
                            $('.activation').fadeIn(600);
                        }

                    }
                })
            }
        };
    });
    let trigger = false;
    $('.toggle').click(function (e) {
        let opened = false;
        if (!opened) {
            opened = true;

            $('.menu-container').addClass('open')
            $('.cmenu').addClass('open')
            trigger = true
        } else {
            return

        }
        $(document).click(function (e) {
            if (trigger == true && $('.menu-container').hasClass('open') && $('.cmenu').hasClass('open')) {
                let menu = $('.cmenu, .li-nav, .accminimg, p, a');

                if (!menu.is(e.target) && menu.has(e.target)) {

                    $('.menu-container').removeClass('open')
                    $('.cmenu').removeClass('open')
                }
            }
        })
    })

    






})