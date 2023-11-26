@extends('layouts.base')

@section('title', 'Настройки пользователя')

@section('content')
<div class="container">
    <h1 class="user_setings_title">Настройки</h1>

    <div class="setings_tab_wrapper">
        <button data-func="tab" data-target="user-settings" data-close="children" class="tab-button tab-active">Данные авторизации</button>
        <button data-func="tab" data-target="children" data-close="user-settings" class="tab-button">Мои дети</button>
        <!-- <button>Платежи</button> -->
    </div>
    <div class="user-settings">
        <div class="login_data-wrapper">
            <div class="login_data_title">
                <h2>Личная информация</h2>
                <p>Вносите реальные данные</p>
            </div>
            <form name="change_image_user_data" enctype="multipart/form-data" method="post">
                @csrf
                @method('patch')
                <div class="user_edit_wrapper row">
                    <div class="col-2">
                        <div class="change_image_user_wrapper">
                            <div class="image_wrapper">
                                <img class="aj_img_acc"
                                    src="https://tennis-ocean.ru/wp-content/uploads/2022/09/1c3c1f7865a8505dbff6e416696927f9-2.jpg">

                            </div>
                            <div class="add_user_image_wrapper">
                                <label for="user_img" class="add_user_image"><img
                                        src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/icons/add_icon.png"
                                        alt=""></label>
                            </div>
                            <input class="input_image_user user_img" id="user_img" name="user_image" type="file"
                                accept="image/*,image/jpeg">
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="inputs_wrapper">
                            <div class="input_wrapper">
                                <label class="setings_label" for="user_first_name">Ваше имя</label>
                                <input id="user_first_name" class="setings_input" name="user_first_name" type="text"
                                    placeholder="{{ $user->firstname }}" autocomplete="off">
                            </div>
                            <div class="input_wrapper">
                                <label class="setings_label" for="user_last_name">Ваша фамилия</label>
                                <input id="user_last_name" class="setings_input" name="user_last_name" type="text"
                                    placeholder="{{ $user->lastname }}" autocomplete="off">
                            </div>
                        </div>

                        <div class="inputs_wrapper">
                            <div class="input_wrapper">
                                <label class="setings_label" for="birth_date">Дата рождения</label>
                                <input id="user_birth_date" class="setings_input" name="user_birth_date" type="date" value="{{$user->birthdate->format('Y-m-d')}}" autocomplete="off">
                            </div>
                            <div class="input_wrapper">
                                
                                <label class="setings_label" for="your_gender">Пол</label>
                                <div class="check_chose_send_gender_wrapper ">
                                    <div class="radio_container">
                                        <input class="check_chose_send" type="radio" value="male" id="male"
                                            name="chose_gender" {{($user->gender)?'checked="checked"':''}}>
                                        <label class="radio_contact_user" for="male">мужской</label>
                                    </div>
                                    <div class="radio_container">
                                        <input class="check_chose_send" type="radio" value="female" id="female"
                                            name="chose_gender" {{(!$user->gender)?'checked=checked':''}}>
                                        <label class="radio_contact_user" for="female">Женский</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="inputs_wrapper">
                            <div class="input_wrapper">
                                <label class="setings_label" for="user_email_change">Эл. почта</label>
                                <input id="user_email_change" name="user_email_change" class="setings_input"
                                    type="email" placeholder="{{$user->email}}" autocomplete="off">
                            </div>
                            <div class="input_wrapper">
                                <label class="setings_label" for="user_tel">Телефон</label>
                                <input id="user_tel" name="user_tel" class="setings_input" type="tel"
                                    placeholder="{{$user->phone}}" autocomplete="off">
                            </div>
                        </div>

                        <div class="inputs_wrapper">
                            <input class="disabled-button save-change"
                                type="submit" value="Сохранить">
                        </div>
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
                <div class="row">
                    <div class="col-12">
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
                            <button class="setings_send_button change_password_button" type="submit">Сохранить</button>
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </div>

    <div class="row children" data-tab="children">
        <div class="login_data-wrapper">
            <div class="login_data_title">
                <h2>Мои дети</h2>
                <p>Вносите реальные данные</p>
            </div>

            @foreach ($userchilds as $child)
            <div class="children_wrapper row">
                <div class="col-2">
                    <div class="change_image_user_wrapper">
                        <div class="image_wrapper">
                            <img class="aj_img_acc"
                                src="https://tennis-ocean.ru/wp-content/uploads/2022/11/1614334889_43-p-fon-raznotsvetnogo-kosmosa-49-150x150.jpg"
                                alt="">
                        </div>
                        <div class="add_user_image_wrapper">
                            <label for="user_2" class="add_user_image"><img
                                    src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/icons/editicon.png"
                                    alt=""></label>
                        </div>
                        <input class="input_image_user user_img" id="user_2" name="user_image" type="file"
                            accept="image/*,image/jpeg">
                    </div>
                </div>
                <div class="col-10">
                    <div class="inputs_wrapper_child">
                        <div class="input_wrapper">
                            <label class="setings_label" for="children_first_name">Ваше имя</label>
                            <p id="children_first_name" class="setings_input_children" name="children_first_name">{{
                                $child->firstname }} </p>
                        </div>
                        <div class="input_wrapper">
                            <label class="setings_label" for="children_last_name">Ваша фамилия</label>
                            <p id="children_last_name" class="setings_input_children" name="children_last_name">
                                {{ $child->lastname }}</p>
                        </div>
                    </div>
                    <div class="inputs_wrapper_child">
                        <div class="input_wrapper">
                            <label class="setings_label" for="children_birth_date">Дата рождения</label>
                            <p id="children_birth_date" class="setings_input_children" name="children_birth_date">{{
                                $child->birthdate->format('d.m.Y') }}</p>
                            <p>
                            </p>
                        </div>
                        <div class="input_wrapper">
                            <label class="setings_label" for="children_male">Пол</label>
                            <div class="check_chose_send_gender_wrapper ">
                                <div class="radio_container">
                                    <input class="check_chose_send" type="radio" value="Мужской" id="children_male_2"
                                        name="chose_gender_2">
                                    <label class="radio_contact_user" for="male_2">Мужской</label>
                                </div>
                                <div class="radio_container">
                                    <input class="check_chose_send" type="radio" value="Женский" id="children_female_2"
                                        name="children_female_2" checked="">
                                    <label class="radio_contact_user" for="children_female_2">Женский</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <form class="add_children" enctype="multipart/form-data"
                action="" method="post">
                <div class="user_children_edit_wrapper row">
                    <div class="col-2">
                        <div class="change_image_user_wrapper">
                            <div class="image_wrapper">
                            </div>
                            <div class="add_user_image_wrapper">
                                <label for="children_add_img" class="add_user_image"><img
                                        src="{{ @asset('assets/img/icons/add_icon.png') }}" alt=""></label>
                            </div>
                            <input class="input_image_user" id="children_add_img" name="children_add_img" type="file"
                                accept="image/*,image/jpeg">
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="inputs_wrapper">
                            <div class="input_wrapper">
                                <label class="setings_label" for="add_children_first_name">Ваше имя</label>
                                <input id="add_children_first_name" class="setings_input" name="add_children_first_name"
                                    type="text" placeholder="">
                            </div>
                            <div class="input_wrapper">
                                <label class="setings_label" for="add_children_last_name">Ваша фамилия</label>
                                <input id="add_children_last_name" class="setings_input" name="add_children_last_name"
                                    type="text" placeholder="">
                            </div>
                        </div>
                        <div class="inputs_wrapper">
                            <div class="input_wrapper">
                                <label class="setings_label" for="add_children_birth_date">Дата рождения</label>
                                <input id="add_children_birth_date" class="setings_input" name="add_children_birth_date"
                                    type="date">
                            </div>
                            <div class="input_wrapper">
                                <label class="setings_label" for="add_children_male">Пол</label>
                                <div class="check_chose_send_gender_wrapper ">
                                    <div class="radio_container">
                                        <input class="check_chose_send" type="radio" value="Мужской"
                                            id="add_children_male" name="chose_gender">
                                        <label class="radio_contact_user" for="male">Мужской</label>
                                    </div>
                                    <div class="radio_container">
                                        <input class="check_chose_send" type="radio" value="Женский"
                                            id="add_children_female" name="add_children_female">
                                        <label class="radio_contact_user" for="add_children_female">Женский</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inputs_wrapper children_button">
                    <button class="button new-child" type="button" >Добавить ребенка </button>
                </div>
                <div class="inputs_wrapper save_children_button">
                    <input class="button setings_send_button save_settings_user_info" value="Сохранить" type="submit">
                </div>
            </form>

        </div>
    </div>
</div>

@endsection