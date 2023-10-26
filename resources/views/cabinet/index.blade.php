@extends('layouts.base')

@section('title','Личный кабинет')

@section('content')

<section class="account-cabinet mt-40 mb-170">
    <div class="container">
        <h1 class="text-center">Личный кабинет</h1>
        <div class="row mb-40">
            <ul class="nav nav-pills" id="myTab" role="tablist">
                <li class="nav-item mr-20" role="presentation">
                    <button class="btn-transparent-blue nav-link active" id="basic-tab" data-bs-toggle="tab" data-bs-target="#basic" type="button" role="pill" aria-selected="true">Основное</button>
                </li>
                <li class="nav-item mr-20" role="presentation">
                    <button class="btn-transparent-blue nav-link " id="training-tab" data-bs-toggle="tab" data-bs-target="#training" type="button" role="pill" aria-selected="false" tabindex="-1">Тренировки</button>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="tab-content">
                {{ auth()->user()->created_at->diffForHumans()}}
                <div class="tab-pane fade show active mb-4 p-30 bg-white" id="basic" role="tabpanel" aria-labelledby="tofline-tab">
                    <div class="row">
                        <div class="col-sm-2 blue-border circle cab-img me-auto p-0">
                            <img width="159" height="89" src="https://tennis-ocean.ru/wp-content/uploads/2022/09/1c3c1f7865a8505dbff6e416696927f9-2.jpg" class="rounded-circle" alt="" decoding="async" srcset="https://tennis-ocean.ru/wp-content/uploads/2022/09/1c3c1f7865a8505dbff6e416696927f9-2.jpg 2048w, https://tennis-ocean.ru/wp-content/uploads/2022/09/1c3c1f7865a8505dbff6e416696927f9-2-300x169.jpg 300w, https://tennis-ocean.ru/wp-content/uploads/2022/09/1c3c1f7865a8505dbff6e416696927f9-2-1024x576.jpg 1024w, https://tennis-ocean.ru/wp-content/uploads/2022/09/1c3c1f7865a8505dbff6e416696927f9-2-768x432.jpg 768w, https://tennis-ocean.ru/wp-content/uploads/2022/09/1c3c1f7865a8505dbff6e416696927f9-2-1536x864.jpg 1536w" sizes="(max-width: 159px) 100vw, 159px">                        </div>
                        <div class="col-sm-10 p-0">
                            <div class="row ">
                                <div class="col-sm-11 title-acc mb-3">
                                    <div class="row">
                                        <div class="col-sm-9 me-auto">
                                            <span class="name_user_text">{{auth()->user()->firstname}} {{auth()->user()->lastname}}</span>
                                        </div>
                                        <div class="col-sm-3 w-auto">
                                            <span class="text_parent_name">Взрослый</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1 w-auto">
                                    <div class="add_button_wrapper">
                                        <img src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/icons/add.png" alt="">
                                    </div>
                                </div>
                                
                                <div class="col-sm-4 mb-2">Возраст: 35 лет</div>
                                <div class="col-sm-3 mb-2">Дата регистрации: {{auth()->user()->created_at->format('d.m.Y')}}</div>
                                <div class="col-sm-3 mb-2">Активность</div>
                                <div class="col-sm-2 mb-2">Скидка 10%</div>

                                <div class="col-sm-4 mb-2">Эл. почта: {{auth()->user()->email}}</div>
                                <div class="col-sm-3 mb-2">Кол-во тренировок: 22</div>
                                <div class="col-sm-3 mb-2">Постоянная скидка: 5%</div>
                                <div class="col-sm-2 mb-2"></div>

                                <div class="col-sm-4 mb-2">Телефон: +7 (901) 369-01-70</div>
                                <div class="col-sm-3 mb-2">Пройдено обучений: 5</div>
                                <div class="col-sm-3 mb-2"></div>
                                <div class="col-sm-2 mb-2"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade show mb-4" id="training" role="tabpanel" aria-labelledby="tofline-tab">
                    2
                </div>
            </div>
        </div>
    </div>
</section>

@endsection