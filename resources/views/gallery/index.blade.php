@extends('layouts.base')

@section('title', 'Галерея')

@section('content')

    <section class="gallery_section">
        <div class="container">
            <div class="row">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb  mb-20">
                        <li class="breadcrumb-item"><a href="{{@route('home.index')}}">Главная</a></li>
                        <li class="breadcrumb-item" aria-current="page">Галерея</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <h1 class="text-center counter_text mb-80">
                    @yield('title')
                </h1>
            </div>
            
            <div class="row justify-content-center mb-3">

                <div class="col-lg-4 mb-3">
                    <div class="row">

                        <div class="col mb-3">
                            <div class="card card-c p-0" >
                                <a class="text-decoration-none popup_gallery" data-id="{{$albums[0]->id}}" href="{{route('gallery.show',$albums[0]->id)}}">
                                    <img src="{{@asset('storage/images/albums').'/'.$albums[0]->path_preview}}"
                                        class="img-fluid card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title black-text text-center">{{$albums[0]->title}}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-c p-0 mt-auto" >
                                <a class="text-decoration-none popup_gallery" data-id="{{$albums[1]->id}}" href="{{route('gallery.show',$albums[1]->id)}}">
                                    <img src="{{@asset('storage/images/albums').'/'.$albums[1]->path_preview}}"
                                        class="img-fluid card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title black-text text-center">{{$albums[1]->title}}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 mb-3">
                    <div class="row">
                        <div class="col">
                            <div class="card card-cc p-0" >
                                <a class="text-decoration-none popup_gallery" data-id="{{$albums[4]->id}}" href="{{route('gallery.show',$albums[4]->id)}}">
                                    <img src="{{@asset('storage/images/albums').'/'.$albums[4]->path_preview}}"
                                        class="img-fluid card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title black-text text-center">{{$albums[4]->title}}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="row">

                        <div class="col mb-3">
                            <div class="card card-c p-0" >
                                <a class="text-decoration-none popup_gallery" data-id="{{$albums[3]->id}}" href="{{route('gallery.show',$albums[3]->id)}}">
                                    <img src="{{@asset('storage/images/albums').'/'.$albums[3]->path_preview}}"
                                        class="img-fluid card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title black-text text-center">{{$albums[3]->title}}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col mt-auto ">
                            <div class="card card-c p-0 " >
                                <a class="text-decoration-none popup_gallery" data-id="{{$albums[2]->id}}" href="{{route('gallery.show',$albums[2]->id)}}">
                                    <img src="{{@asset('storage/images/albums').'/'.$albums[2]->path_preview}}"
                                        class="img-fluid card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title black-text text-center">{{$albums[2]->title}}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-12 text-center d-flex">

                    <a href="{{route('gallery.show')}}" class="button_g mx-auto w-50">Все фото</a>
                </div>
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
