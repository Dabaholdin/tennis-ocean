@extends('layouts.base')

@section('title','Корты')

@section('content')

<script>
    var myMap;

    // Дождёмся загрузки API и готовности DOM.
    ymaps.ready(init);

    function init() {
        let center = [55.751840, 37.623901];
        myMap = new ymaps.Map('map', {
            center: center,
            zoom: 14,
            controls: [] //'zoomControl', 'searchControl', 'typeSelector',  'fullscreenControl', 'routeButtonControl'

        }, {
            searchControlProvider: 'yandex#search'
        });

        myPlacemark = new ymaps.Placemark(center, {
            // Чтобы балун и хинт открывались на метке, необходимо задать ей определенные свойства.
            balloonContentHeader: "Балун метки",
            balloonContentBody: "Содержимое <em>балуна</em> метки",
            balloonContentFooter: "Подвал",
            hintContent: "Хинт метки"
        });

        myMap.geoObjects.add(myPlacemark);

        document.getElementById('destroyButton').onclick = function() {
            // Для уничтожения используется метод destroy.
            myMap.destroy();
        };

    }
</script>
<section class="corts">
    <div class="container">
        <div class="row">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb  mb-20">
                    <li class="breadcrumb-item"><a href="#">Главная</a></li>
                    <li class="breadcrumb-item" aria-current="page">Корты</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <h1 class="text-center counter_text mb-80">
                Корты
            </h1>
        </div>
        <div class="row mb-60">
            <div class="col-9 me-auto">
                <p class="fs-16 cort-title-text">В&nbsp;этом разделе представлена информация о&nbsp;теннисных кортах, на&nbsp;которых школа TennisOcean проводит занятия по&nbsp;теннису. Все&nbsp;корты проверенные. На&nbsp;них&nbsp;побывали наши тренеры, а&nbsp;на&nbsp;многих из&nbsp;них&nbsp;они проводят занятия и&nbsp;играют сами. Выбор за&nbsp;вами и&nbsp;наши тренеры с&nbsp;удовольствием помогут определится с&nbsp;удобным для&nbsp;вас&nbsp;теннисным кортом!</p>
            </div>
            <div class="col-2">
                <button class="btn-transparent-blue text-end "> Карта кортов</button>
            </div>
        </div>


        @foreach ($all_corts as $cort)
            <div class="row p-30 bw mb-30">
                <div class="col-5 plr-0 ">
                    @if (count($cort->images) != 0)
                    <div id="carouselExampleIndicators{{ $loop->iteration }}" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-indicators m-0 w-100">

                            @foreach($cort->images as $image)
                                <button 
                                type="button"
                                 data-bs-target="#carouselExampleIndicators{{$cort->id}}"
                                 data-bs-slide-to="{{$loop->iteration -1}}"  
                                 class="corusel-button {{$loop->iteration == 1?'active':''}}" 
                                 
                                 aria-label="Slide {{$loop->iteration}}">
                                </button>
                            @endforeach

                        </div>
                        <div class="carousel-inner carusel-inner-img  ">
                            @foreach($cort->images as $image)
                                <div class="carousel-item carousel-item-c position-relative carousel-img-wrapper {{$loop->iteration == 1 ?'active':''}}">
                                    <img src="{{@asset('storage/cort').'/'.$image->path}}" alt="" class="d-block w-100">
                                </div>
                            @endforeach

                        </div>
                    </div>
                    @else
                    <div class="position-relative carousel-img-wrapper">
                        <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/logo/imgH.png')}}" alt="">
                    </div>
                    @endif
                </div>
                <div class="col-7 plr-0 pl-30">
                    <div class="row mb-20">
                        <div class="col-8  me-auto">
                            <h3 class="fs-24">{{$cort->title}}</h3>
                        </div>
                        <div class="col-4">
                            <p class="fs-20 grey-text">От 1000000 ₽/час</p>
                        </div>
                    </div>
                    <div class="row">
                        <p class="fs-16"><b>Адрес: </b>{{$cort->address}}</p>
                    </div>
                    <div class="row">
                        <p class="fs-16"><b>Покрытие: </b>{{$cort->coating}}</p>
                    </div>
                    <div class="row">
                        <p class="fs-16"><b>Дополнительно: </b>{{$cort->additionally}}</p>
                    </div>
                    <div class="row">
                        <p class="fs-16"><b>Рейтинг (Яндекс): </b>@for ($i = 0; $i < $cort->raiting; $i++)
                            <img src="{{@asset('assets/img/icons/Star.png')}}" alt="">
                        @endfor</p>


                    </div>
                    <div class="row m-auto">
                        <div class="col"><button class="button white-ball pr-50 position-relative">Записаться на тренировку</button></div>
                        <div class="col"><button class="btn-transparent-blue text-end lock-at-map-button "> Показать на карте</button></div>
                    </div>
                </div>
            </div>
        @endforeach


        <div class="row p-30 bbg">
            <div class="col-8">
                <div class="row mb-20">
                    <h3 class="fs-24 white-text p-0 m-0">Приедем на ваш любимый корт!</h3>
                </div>
                <div class="row a-text">
                    <p class="m-0 p-0 white-text fs-16">Мы&nbsp;стараемся сделать теннис доступным, поэтому можем организовать тренировки в любом районе Москвы на кортах, которые находятся наиболее близко к вам.<br><br>
                        Вы&nbsp;можете связаться с&nbsp;нами любым удобным способом. Запишитесь на тренировку прямо сейчас!</p>
                </div>
            </div>
            <div class="col-4 mt-auto text-end">
                <button class="button pr-50  position-relative white-bg blue-text blue-ball-e">Записаться на тренировку</button>
            </div>
        </div>
    </div>
</section>

<section class="corts-map">
    <div class="container">
        <div class="row text-center mb-80">
            <h3 class="counter_text">Карта кортов</h3>
        </div>
        <div class="row bgw p-30 position-relative z1">
            <div class="row p-0">
                <div class="col-9 p-0 mb-20">
                    <div class="row how-to-find-us-text">
                        <p class="fs-16">
                            Для проведения тренировок мы выбираем лучшие корты с разнообразными покрытиями (грунт, хард),
                            тренеров с высокой квалификацией, качественный спортивный инвентарь и наиболее удобное время.
                            Выберите ближайший к вам корт и не тратьте много времени на дорогу.
                        </p>
                    </div>
                    <div class="row">
                        <b class="fs-18">Вы можете связаться с нами любым удобным способом!</b>
                    </div>
                </div>
                <div class="col-3">
                    <button class="button">Записаться на тренировку</button>
                </div>
            </div>
            <div class="row  justify-content-between pl-0 pr-0 pb-20 pt-20 btb">
                <div class="col-2 plr-0">
                    <div class="row mb-10 ">
                        <b>Звоните</b>
                    </div>
                    <div class="row">
                        <p>+7 (495) 777-85-15</p>
                    </div>
                </div>
                <div class="col-2 plr-0">
                    <div class="row mb-10">
                        <b>Пишите</b>
                    </div>
                    <div class="row">
                        <a class="text-decoration-none blue-text fs-16" href="mailto:tennisocean@mail.ru">tennisocean@mail.ru</a>
                    </div>
                </div>
                <div class="col-3 plr-0">
                    <div class="row mb-10">
                        <b>Подписывайтесь</b>
                    </div>
                    <div class="row">
                        <div class="col"><a class="text-decoration-none blue-text fs-16" href="#">Instagram</a></div>
                        <div class="col"><a class="text-decoration-none blue-text fs-16" href="#">Telegram</a></div>
                        <div class="col"><a class="text-decoration-none blue-text fs-16" href="#">TikTok</a></div>
                    </div>
                </div>
                <div class="col-2 plr-0">
                    <div class="row mb-10">
                        <b class="fs-16">Режим работы</b>
                    </div>
                    <div class="row">
                        <p class="fs-16">Ежедневно с 7:00 до 00:00</p>
                    </div>
                </div>
            </div>
            <div class="row plr-0 pb-20 pt-20">
                <div class="col-4 plr-0 me-auto">
                    <p class="plr-0">Корты, где мы можем провести тренировку</p>
                </div>
                <div class="col-2">
                    <a href="#">Смотреть все корты</a>
                </div>
            </div>
            <div class="row">

                <div class="col-3 me-auto"><button href="" class="cort-name-button">Импульс</button></div>
                <div class="col-3 me-auto"><button href="" class="cort-name-button">Теннис-Арт</button></div>
                <div class="col-3 me-auto"><button href="" class="cort-name-button">Лосинка теннис</button></div>
                <div class="col-1">
                    <a href="" class="corts-nav-button">
                        <div>&lt;</div>
                    </a>
                    <a href="" class="corts-nav-button">
                        <div>&gt;</div>
                    </a>

                </div>



            </div>
        </div>
    </div>

    <div id="map">
        <ymaps class="ymaps-2-1-79-map">
            <ymaps class="ymaps-2-1-79-map ymaps-2-1-79-i-ua_js_yes ymaps-2-1-79-map-bg ymaps-2-1-79-islets_map-lang-ru">
                <ymaps class="ymaps-2-1-79-inner-panes">
                    <ymaps class="ymaps-2-1-79-events-pane ymaps-2-1-79-user-selection-none" unselectable="on" style="height: 100%; width: 100%; top: 0px; left: 0px; position: absolute; z-index: 2500; cursor: url(&quot;https://api-maps.yandex.ru/2.1.79/build/release/images/cursor/grab.cur&quot;) 16 16, url(&quot;https://api-maps.yandex.ru/2.1.79/build/release/images/cursor/grab.cur&quot;), move;"></ymaps>
                    <ymaps class="ymaps-2-1-79-ground-pane" style="top: 0px; left: 0px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 501;">
                        <ymaps style="z-index: 150; position: absolute;"><canvas height="1546" width="3550" style="position: absolute; width: 1775px; height: 773px; left: -128px; top: -128px;"></canvas></ymaps>
                    </ymaps>
                    <ymaps class="ymaps-2-1-79-copyrights-pane" style="height: 0px; inset: auto 0px 0px; position: absolute; z-index: 5002;">
                        <ymaps>
                            <ymaps class="ymaps-2-1-79-copyright ymaps-2-1-79-copyright_logo_no" style="">
                                <ymaps class="ymaps-2-1-79-copyright__fog">…</ymaps>
                                <ymaps class="ymaps-2-1-79-copyright__wrap">
                                    <ymaps class="ymaps-2-1-79-copyright__layout">
                                        <ymaps class="ymaps-2-1-79-copyright__content-cell">
                                            <ymaps class="ymaps-2-1-79-copyright__content">
                                                <ymaps class="ymaps-2-1-79-copyright__text">© Яндекс</ymaps>
                                                <ymaps class="ymaps-2-1-79-copyright__agreement">&nbsp;<a class="ymaps-2-1-79-copyright__link" target="_blank" href="https://yandex.ru/legal/maps_termsofuse/?lang=ru" rel="noopener">Условия использования</a></ymaps>
                                            </ymaps>
                                        </ymaps>
                                        <ymaps class="ymaps-2-1-79-copyright__logo-cell"><a class="ymaps-2-1-79-copyright__logo" href="" target="_blank"></a></ymaps>
                                    </ymaps>
                                </ymaps>
                            </ymaps>
                        </ymaps>
                        <ymaps class="ymaps-2-1-79-map-copyrights-promo">
                            <ymaps>
                                <ymaps class="ymaps-2-1-79-gotoymaps" title="Как добраться">
                                    <ymaps class="ymaps-2-1-79-gotoymaps__container">
                                        <ymaps class="ymaps-2-1-79-gotoymaps__pin"></ymaps>
                                        <ymaps class="ymaps-2-1-79-gotoymaps__text-container">
                                            <ymaps class="ymaps-2-1-79-gotoymaps__text">Как добраться</ymaps>
                                        </ymaps>
                                    </ymaps>
                                </ymaps>
                                <ymaps class="ymaps-2-1-79-gototaxi" title="Доехать на такси" style="">
                                    <ymaps class="ymaps-2-1-79-gototaxi__container">
                                        <ymaps class="ymaps-2-1-79-gototaxi__pin"></ymaps>
                                        <ymaps class="ymaps-2-1-79-gototaxi__text-container">
                                            <ymaps class="ymaps-2-1-79-gototaxi__text">Доехать на такси</ymaps>
                                        </ymaps>
                                    </ymaps>
                                </ymaps><a class="ymaps-2-1-79-gototech" target="_blank" href="https://tech.yandex.ru/maps/mapsapi/?from=api-maps ">Создать свою карту</a>
                            </ymaps>
                        </ymaps>
                    </ymaps>
                    <ymaps class="ymaps-2-1-79-controls-pane" style="width: 100%; top: 0px; left: 0px; position: absolute; z-index: 4503;">
                        <ymaps class="ymaps-2-1-79-controls__toolbar" style="margin-top: 10px;">
                            <ymaps class="ymaps-2-1-79-controls__toolbar_left"></ymaps>
                            <ymaps class="ymaps-2-1-79-controls__toolbar_right"></ymaps>
                        </ymaps>
                        <ymaps class="ymaps-2-1-79-controls__bottom" style="top: 517px;"></ymaps>
                    </ymaps>
                    <ymaps class="ymaps-2-1-79-places-pane" style="top: 0px; left: 0px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 2004;">
                        <ymaps class="ymaps-2-1-79-placemark-overlay ymaps-2-1-79-user-selection-none" unselectable="on" style="z-index: 650; height: 0px; width: 0px; position: absolute; left: 760px; top: 258px;">
                            <ymaps>
                                <ymaps class="ymaps-2-1-79-islets_icon-with-caption">
                                    <ymaps class="ymaps-2-1-79-islets_icon-with-caption__caption-block">
                                        <ymaps class="ymaps-2-1-79-islets_icon-caption" style="padding: 0px; max-width: 0px;"></ymaps>
                                    </ymaps>
                                    <ymaps id="id_169230085347480085782">
                                        <ymaps class="ymaps-2-1-79-svg-icon ymaps_https___api_maps_yandex_ru_2_1_79_259745348372islands_icon___1E98FF_34x41_1692300853680" style="position: absolute; width: 34px; height: 41px; left: -11px; top: -38px;">
                                            <ymaps class="ymaps-2-1-79-svg-icon-content" style="font: 13px Arial, sans-serif; position: absolute; text-align: center;left: 5px;top: 6px;width: 16px;height: 16px;">
                                                <ymaps></ymaps>
                                            </ymaps>
                                        </ymaps>
                                    </ymaps>
                                </ymaps>
                            </ymaps>
                        </ymaps>
                    </ymaps>
                </ymaps>
            </ymaps>
        </ymaps>
    </div>

</section>
@endsection