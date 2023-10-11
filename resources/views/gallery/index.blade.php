@extends('layouts.base')

@section('title', 'Галерея')

@section('content')

    <section class="gallery_section">
        <div class="container">
            <div class="row">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb  mb-20">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item" aria-current="page">Галерея</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <h1 class="text-center counter_text mb-80">
                    О нас
                </h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 d-flex flex-row flex-lg-column justify-content-around mb-3 mb-lg-0">
                    <div class="row mb-3">
                        <div class="card card-c p-0" style="width: 26rem;">
                            <a class="text-decoration-none popup_gallery" data-name="56" href="#">
                                <img src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/lt.png"
                                    class="img-fluid card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title black-text text-center">Детские группы</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card card-c p-0 mt-auto" style="width: 26rem;">
                            <a class="text-decoration-none popup_gallery" data-name="58" href="#">
                                <img src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/lb.png"
                                    class="img-fluid card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title black-text text-center">Сборы</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0 d-flex justify-content-center mb-4 mb-lg-0">
                    <div class="card card-cc p-0" style="width: 26rem;">
                        <a class="text-decoration-none popup_gallery" data-name="54" href="#">
                            <img src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/cc.png"
                                class="img-fluid card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title black-text text-center">Тренировки</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 d-flex flex-row flex-lg-column justify-content-around mb-3 mb-lg-0">
                    <div class="row mb-3">
                        <div class="card card-c p-0" style="width: 26rem;">
                            <a class="text-decoration-none popup_gallery" data-name="60" href="#">
                                <img src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/rt.png"
                                    class="img-fluid card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title black-text text-center">Тренеры</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-auto ">
                        <div class="card card-c p-0 " style="width: 26rem;">
                            <a class="text-decoration-none popup_gallery" data-name="62" href="#">
                                <img src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/rb.png"
                                    class="img-fluid card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title black-text text-center">Фитнес</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <a href="" class="button_g mx-auto my-4">Все фото</a>
            </div>
        </div>
        <div class="popup_wrapper_img none">
            <div class="container">
                <div class="close_album_btn_wrapper">
                    <a id="close_album_btn" href=""><img
                            src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/icons/CloseA.png"
                            alt=""></a>
                </div>
                <div class="row img_content">

                </div>
            </div>
            <div class="big_album_image_fone">
                <div class="close_img_btn_wrapper">
                    <a id="close_img_btn" href=""><img
                            src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/icons/CloseA.png"
                            alt=""></a>
                </div>
                <div class="button_prev_wrapper"><a id="button_prev_img" href="#prev"><img
                            src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/icons/btnprevimg.png"
                            alt=""></a></div>
                <div class="big_album_image">
                </div>
                <div class="button_next_wrapper"><a id="button_next_img" href="#next"><img
                            src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/icons/btnnextimg.png"
                            alt=""></a></div>
            </div>
        </div>

    </section>

@endsection
