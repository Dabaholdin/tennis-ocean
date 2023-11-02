@extends('layouts.base')

@section('title', 'Настройки пользователя')

@section('content')
    {{-- {{ asset('')}} --}}
    <div class="container">
        <h1 class="user_setings_title">Настройки</h1>

        <div class="setings_tab_wrapper">
            <button data-func="tab" data-target="edit_settings_user" class="tab_btn active_tab">Данные авторизации</button>
            <button data-func="tab" data-target="children_data-wrapper" class="tab_btn">Мои дети</button>
            <!-- <button>Платежи</button> -->
        </div>
        <div class="edit_settings_user">
            <div class="login_data-wrapper">
                <div class="login_data_title">
                    <h2>Личная информация</h2>
                    <p>Вносите реальные данные</p>
                </div>
                <form id="change_image_user_data" class="change_user_data" name="change_user_data" enctype="multipart/form-data" action=""
                    method="post">
                    @csrf
                    @method('patch')
                    <div class="user_edit_wrapper">
                        <div class="change_image_user_container">
                            <div class="change_image_user_wrapper">
                                <div class="image_wrapper">
                                    <img class="aj_img_acc"
                                        src="{{ @asset('storage/'.$user->avatar) }}">

                                </div>
                                <div class="add_user_image_wrapper">
                                    <label for="user_img" class="add_user_image"><img
                                            src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/icons/add_icon.png"
                                            alt=""></label>
                                </div>
                                <input class="input_image_user input_file user_img" id="user_img" name="user_image" type="file"
                                    accept="image/*,image/jpeg">
                            </div>
                        </div>
                        <div class="user_edit_form_wrapper">
                            <div class="inputs_wrapper">
                                <div class="input_wrapper">
                                    <label class="setings_label" for="user_first_name">Ваше имя</label>
                                    <input id="user_first_name" class="setings_input" name="user_first_name" type="text"
                                        placeholder="{{ $firstname }}">
                                </div>
                                <div class="input_wrapper">
                                    <label class="setings_label" for="user_last_name">Ваша фамилия</label>
                                    <input id="user_last_name" class="setings_input" name="user_last_name" type="text"
                                        placeholder="{{ $lastname }}">
                                </div>
                            </div>

                            <div class="inputs_wrapper">
                                <div class="input_wrapper">
                                    <label class="setings_label" for="birth_date">Дата рождения</label>
                                    <input id="user_birth_date" class="setings_input" name="user_birth_date" type="date" value="{{$birthdate->format('Y-m-d')}}">
                                    
                                </div>
                                <div class="input_wrapper">
                                    <label class="setings_label" for="your_gender">Пол</label>
                                    <div class="check_chose_send_gender_wrapper ">
                                        <div class="radio_container">
                                            <input class="check_chose_send" type="radio" value="Мужской" id="male"
                                                name="chose_gender" {{ $gender == 'Мужской' ? 'checked' : '' }}>
                                            <label class="radio_contact_user" for="male">мужской</label>
                                        </div>
                                        <div class="radio_container">
                                            <input class="check_chose_send" type="radio" value="female" id="female"
                                                name="chose_gender" {{ $gender == 'Женский' ? 'checked' : '' }}>
                                            <label class="radio_contact_user" for="female">Женский</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="inputs_wrapper">
                                <div class="input_wrapper">
                                    <label class="setings_label" for="user_email_change">Эл. почта</label>
                                    <input id="user_email_change" name="user_email_change" class="setings_input"
                                        type="email" placeholder="d.a.baholdin@yandex.ru">
                                </div>
                                <div class="input_wrapper">
                                    <label class="setings_label" for="user_tel">Телефон</label>
                                    <input id="user_tel" name="user_tel" class="setings_input" type="tel"
                                        placeholder="Введите номер телефона">
                                </div>
                            </div>

                            <div class="inputs_wrapper">
                                <button class="setings_send_button button save_settings_user_info"
                                    type="submit" name="changeUserInfo" disabled> Сохранить</button>
                            </div>
                            <input type="hidden" name="user" value="1">

                        </div>
                    </div>
                </form>
            </div>

            <div class="change_user_password">
                <div class="login_data_title">
                    <h2>Смена пароля</h2>
                    <p>После смены вы автоматически выйдете из аккаунта</p>
                </div>
                <form name="form_changing_the_password" method="post" action="">
                    <div>
                        <div class="user_edit_form_wrapper">
                            <div class="inputs_wrapper">
                                <div class="input_wrapper">
                                    <label class="setings_label" for="your_passwor">Текущий</label>
                                    <input id="your_passwor" class="setings_input" name="your_passwor" type="password">
                                    <p class="err_input"></p>
                                </div>
                            </div>
                            <div class="inputs_wrapper">
                                <div class="input_wrapper">
                                    <label class="setings_label" for="new_pass">Новый пароль</label>
                                    <input id="new_pass" name="new_pass" class="setings_input" type="password">
                                    <p class="err_input"></p>
                                </div>
                                <div class="input_wrapper">
                                    <label class="setings_label" for="new_pass_confirm">Повторите новый пароль</label>
                                    <input id="new_pass_confirm" name="new_pass_confirm" class="setings_input"
                                        type="password">
                                    <p class="err_input"></p>
                                </div>
                            </div>

                            <div class="inputs_wrapper">
                                <button class="setings_send_button button change_password_button"
                                    type="submit">Сохранить</button>
                            </div>

                        </div>
                    </div>
                </form>

            </div>
        </div>

        <div class="children_data-wrapper" style="display: none;">
            <div class="login_data-wrapper">
                <div class="login_data_title">
                    <h2>Мои дети</h2>
                    <p>Вносите реальные данные</p>
                </div>
                <form class="edit-child">
                    @csrf
                    @foreach ($userchilds as $child)
                        <div class="children_wrapper">
                            <input type="hidden" name="uid" value="{{ $child->id }}">
                            <div class="change_image_user_container">
                                <div class="change_image_user_wrapper">
                                    <div class="image_wrapper">
                                        <img class="aj_img_acc"
                                            src="{{ @asset('storage/'.$child->avatar) }}"
                                            alt="">
                                    </div>
                                    <div class="add_user_image_wrapper">
                                        <label for="user_image" class="child_image"><img
                                                src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/icons/editicon.png"
                                                alt=""></label>
                                    </div>
                                    <input class="input_image_user user_img" name="child_image" type="file"
                                        accept="image/*,image/jpeg">
                                </div>
                            </div>
                            <div class="user_edit_form_wrapper">
                                <div class="inputs_wrapper_child">
                                    <div class="input_wrapper">
                                        <label class="setings_label" for="first_name">Имя</label>
                                        <input class="setings_input_children" name="first_name"
                                            value="{{ $child->firstname }}">
                                    </div>
                                    <div class="input_wrapper">
                                        <label class="setings_label" for="last_name">Фамилия</label>
                                        <input class="setings_input_children" name="last_name"
                                            value="{{ $child->lastname }}">

                                    </div>
                                </div>
                                <div class="inputs_wrapper_child">
                                    <div class="input_wrapper">
                                        <label class="setings_label" for="birth_date">Дата рождения</label>
                                        <input class="setings_input_children" type="text" name="birth_date"
                                            value="{{ $child->birthdate->format('d.m.Y') }}">
                                    </div>
                                    <div class="input_wrapper">
                                        <label class="setings_label" for="children_male">Пол</label>
                                        <div class="check_chose_send_gender_wrapper ">
                                            <div class="radio_container">
                                                <input class="check_chose_send" type="radio" value="Мужской"
                                                    name="gender_male" {{ $child->gender == 'Мужской' ? 'checked' : '' }}>
                                                <label class="radio_contact_user" for="gender_male">Мужской</label>
                                            </div>
                                            <div class="radio_container">
                                                <input class="check_chose_send" type="radio" value="Женский"
                                                    name="gender_female"
                                                    {{ $child->gender == 'Женский' ? 'checked' : '' }}>
                                                <label class="radio_contact_user" for="gender_female">Женский</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </form>
                {{-- edit --}}
                <form class="addchildform" id="addchildform" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="uid" value="{{$uid}}">
                    <div class="user_children_edit_wrapper row">
                        <div class="change_image_user_container col-2 m-0">
                            <div class="change_image_user_wrapper">
                                <div class="image_wrapper">

                                </div>
                                <div class="add_user_image_wrapper">
                                    <label for="children_add_img" class="add_user_image"><img
                                            src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/icons/add_icon.png"
                                            alt="">
                                    </label>
                                </div>
                                <input class="input_file" style="display:none;" id="children_add_img"
                                    name="children_add_img" type="file" accept="image/*,image/jpeg">
                            </div>
                        </div>
                        <div class="user_edit_form_wrapper col-8">
                            <div class="inputs_wrapper">
                                <div class="input_wrapper">
                                    <label class="setings_label" for="add_children_first_name">Ваше имя</label>
                                    <input id="add_children_first_name" class="setings_input"
                                        name="add_children_first_name" type="text" placeholder="">
                                </div>
                                <div class="input_wrapper">
                                    <label class="setings_label" for="add_children_last_name">Ваша фамилия</label>
                                    <input id="add_children_last_name" class="setings_input"
                                        name="add_children_last_name" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="inputs_wrapper">
                                <div class="input_wrapper">
                                    <label class="setings_label" for="add_children_birth_date">Дата рождения</label>
                                    <input id="add_children_birth_date" class="setings_input"
                                        name="add_children_birth_date" type="date">
                                </div>
                                <div class="input_wrapper">
                                    <label class="setings_label" for="add_children_gender">Пол</label>
                                    <div class="check_chose_send_gender_wrapper ">
                                        <div class="radio_container">
                                            <input class="check_chose_send" type="radio" value="Мужской"
                                                id="children_gender_male" name="add_children_gender">
                                            <label class="radio_contact_user" for="children_gender_male">Мужской</label>
                                        </div>
                                        <div class="radio_container">
                                            <input class="check_chose_send" type="radio" value="Женский"
                                                id="children_gender_female" name="add_children_gender">
                                            <label class="radio_contact_user" for="children_gender_female">Женский</label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="inputs_wrapper children_button">
                        <button class="button" data-func="addChild" type="button">Добавить ребенка</button>
                    </div>
                    <div class="inputs_wrapper save_children_button">
                        <button class="grey-button br500 fs-16 button cl" style="display:none;" name="addNewChild" type="submit" disabled>Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
