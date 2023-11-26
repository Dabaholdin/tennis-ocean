@extends('layouts.base')

@section('title', $category)

@section('content')

    <section class="education-section">
        <div class="container">
            <div class="row">
                <h1 class="text-center text_title">{{ $category }}</h1>
            </div>

            <div class="row mb-40">
                <div class="col-12 col-lg-6">
                    <ul class="nav" id="myTab" role="tablist">
                        <li class="nav-item col-4 col-lg-3 w-auto me-0 me-lg-4 " role="presentation">
                            <a class="{{ Request::is('*/offline') ? 'active-button' : '' }} btn-transparent-blue nav-tab-btn nav-link"
                                href="{{ @route('trenings.show', ['cat_id' => $category, 'type' => 'offline']) }}">Офлайн</a>
                        </li>
                        <li class="nav-item col-4 col-lg-3 w-auto mx-auto mx-lg-0 me-lg-4 " role="presentation">
                            <a class="{{ Request::is('*/online') ? 'active-button' : '' }} btn-transparent-blue nav-tab-btn nav-link "
                                id="tonline-tab"
                                href="{{ @route('trenings.show', ['cat_id' => $category, 'type' => 'online']) }}">Онлайн</a>
                        </li>
                        <li class="nav-item col-4 col-lg-3 w-auto me-0 me-lg-4  " role="presentation">
                            <a class="{{ Request::is('*/abonement') ? 'active-button' : '' }} btn-transparent-blue nav-tab-btn nav-link "
                                id="tabonement-tab"
                                href="{{ @route('trenings.show', ['cat_id' => $category, 'type' => 'abonement']) }}">Абонементы</a>
                        </li>
                    </ul>
                </div>
            </div>

            @if ($trenings->isEmpty())
                Тренировок нет
            @else
                @foreach ($trenings as $trening)
                    <div class="row">
                        <div class="content">
                            <div class="content-wrapper">
                                <div class="row bw p-30 mb-4 edu-cart-container">
                                    <div class="col-12 col-lg-5">
                                        <img class="img-fluid"
                                            src="https://tennis-ocean.ru/wp-content/uploads/2023/05/young-pretty-woman-tennis-fashion-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="col-12 col-lg-6 d-flex flex-column">
                                        <div class="row">
                                            <h2 class="fs-16 grey-text">{{ $trening->name_description }}</h2>
                                        </div>
                                        <div class="row">
                                            <h2 class="fs-24 black-text">{{ $trening->name }}</h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="blue-text me-3 fs-24">{{ $trening->price_prefix }}
                                                    {{ $trening->price }} ₽</span>
                                                <span class="grey-text text-decoration-line-through fs-20">100000 ₽</span>
                                            </div>
                                        </div>
                                        <div class="row text-o">
                                            <p>{{ $trening->description }}</p>
                                        </div>

                                        <div class="row text-center mt-auto">
                                            <div class="col-12 mb-4 mb-lg-0 col-lg-6">
                                                @auth
                                                    <button class="button mb-4 mb-lg-0 white-ball pr-50 position-relative request-trening"
                                                        data-trening="{{ $trening->id }}">
                                                        Записаться
                                                    </button>
                                                @else
                                                <x-button class="button button-fn" data-target="open-popup">Войти/Зарегистрироваться</x-button>
                                                @endauth

                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <button class="button pr-50 arrow position-relative"
                                                    data-bs-target=".material" data-bs-toggle="collapse" {{ (auth()->user())?'':'disabled=disabled'}}>Доп
                                                    материалы</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse material row mb-4">
                                    <div class="col-12 col-lg-6 ps-lg-0 mb-3 mb-lg-0 me-auto">
                                        <div class="bw p-30 ">
                                            @if ($trening->free_type == 'youtube')
                                                <iframe width="100%" height="315"
                                                    src="https://www.youtube.com/embed/{{ $trening->free_video_url }}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen></iframe>
                                            @endif
                                            @if ($trening->free_type == 'video')
                                                <video src="{{ $trening->free_video_url }}" width="100%"></video>
                                            @endif
                                            @if ($trening->free_type == 'image')
                                                <img src="{{ $trening->free_video_url }}" alt="" width="100%">
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 pe-lg-0">

                                        <div class="bw p-30 d-flex free-text">

                                            <p class="fs-14 m-0">
                                                <img class="float-end img-fluid logo-intext"
                                                    src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/logointext.png"
                                                    alt="">{{ $trening->free_description }}

                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
    <div class="modal-background">
        <div class="row">
            <div class="col">
                <div class="modal-dialog">
                    <div class="modal-content">
                        mlfkdlsankd
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
