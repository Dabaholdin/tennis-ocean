@extends('layouts.base')

@section('title','О нас')

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
<section class="about_us_title_section">
    <div class="container">
        <div class="row">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb  mb-20">
                    <li class="breadcrumb-item"><a href="/">Главная</a></li>
                    <li class="breadcrumb-item" aria-current="page">О нас</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <h1 class="text-center counter_text mb-80">
                О нас
            </h1>
        </div>
        <div class="row mb-78">
            <div class="col-6">
                <p class="fs-16">
                    Совместно с&nbsp;дизайнерами и&nbsp;специалистами в&nbsp;области информационных технологий и&nbsp;спорта мы&nbsp;разработали онлайн
                    платформу, которая станет для&nbsp;вас&nbsp;полезным дополнением к&nbsp;тренировочному процессу.<br><br>
                    Наша академия предлагает целый ряд&nbsp;видеоуроков, которые помогут с&nbsp;освоением техники, ускорят процесс
                    обучения,
                    сделают его&nbsp;более эффективным.<br><br>
                    Вы&nbsp;сможете в&nbsp;любое удобное для&nbsp;вас&nbsp;время обратиться к&nbsp;материалам интерактивной платформы, узнать новое
                    или&nbsp;закрепить пройденное.
                </p>
            </div>
            <div class="col-6">
                <p class="fs-16">
                    Вы&nbsp;можете практиковаться с&nbsp;тренерами нашей академии на&nbsp;корте и&nbsp;изучать полезные материалы, проходить курсы
                    на&nbsp;нашей онлайн платформе самостоятельно.<br><br>
                    Такой формат позволит вам&nbsp;приходить на&nbsp;занятия и&nbsp;не&nbsp;тратить время на&nbsp;понимание основ и&nbsp;заучивание техники,
                    а&nbsp;сразу преступить к&nbsp;практике!
                </p>
            </div>
        </div>

        <div class="row justify-content-center mb-60">
            <div class="col-10 position-relative">
                <img class="fan_left_img img-fluid position-absolute" src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/fan_left.png" alt="">
                <img class="fan_center_img img-fluid" src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/fan_center.png" alt="">
                <img class="fan_right_img img-fluid position-absolute" src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/fan_right.png" alt="">
            </div>
        </div>
        <div class="row mb-60">
            <div class="col-4 ">
                <div class="blue-ball position-relative d-flex mb-10">
                    <h2 class="title_before fs-18 white-text blue-ball pl-35 ">Своя методика тренировок</h2>
                </div>
                <p class="white-text fs-16 about-text">Тысячи учеников открыли для&nbsp;себя мир&nbsp;большого тенниса и&nbsp;достигли побед на&nbsp;турнирах различного уровня</p>
            </div>
            <div class="col-4">
                <div class="blue-ball position-relative d-flex mb-10">
                    <h2 class="title_before fs-18 white-text blue-ball pl-35">Прекрасная фитнес-база</h2>
                </div>
                <p class="white-text fs-16 about-text">Возможность заниматься фитнесом на&nbsp;теннисном корте. Тут&nbsp;вам на&nbsp;помощь и&nbsp;придёт кардио-теннис.</p>
            </div>
            <div class="col-4">
                <div class="blue-ball position-relative d-flex mb-10">
                    <h2 class="title_before fs-18 white-text blue-ball pl-35">Занятия с детьми от 4 лет</h2>
                </div>
                <p class="white-text fs-16 about-text">Тренировочный процесс формируется для&nbsp;каждого ученика индивидуально в&nbsp;зависимости от&nbsp;его&nbsp;целей в&nbsp;теннисе
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <button class="button mx-auto button-link" data-href="/trenirovki">Записаться на тренировку</button>
            </div>
        </div>
    </div>
</section>
<section class="our-team-section">
    <div class="container">
        <div class="row px-2 px-lg-0 justify-content-between">
            <div class="w-auto col-6 col-lg-3 mb-md-5 mb-3 p-0">
                <div class="coach-card card card-c-w " style="width: 18rem;">
                    <img src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/image 10.png" class="img-fluid card-img-top coach-img " alt="...">
                    <div class="card-body coach-card-body">
                        <h5 class="card-title text-center fs-18">Рогов Денис<br>Михайлович</h5>
                        <p class="card-text text-center coach-card-text fs-14">Профессионально занимаюь теннисом 16&nbsp;лет.
                            Мастера спорта. Последние
                            5&nbsp;лет&nbsp;обучаю теннису в&nbsp;группах и&nbsp;индивидуально</p>
                    </div>
                </div>
            </div>
            <div class="w-auto col-6 col-lg-3 mb-md-5 mb-3 p-0">
                <div class="coach-card card card-c-w " style="width: 18rem;">
                    <img src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/image 11.png" class="img-fluid card-img-top coach-img" alt="...">
                    <div class="card-body coach-card-body">
                        <h5 class="card-title text-center fs-18">Шкрылева Елизавета<br> Андреевна</h5>
                        <p class="card-text text-center coach-card-text fs-14">Профессионально занималась теннисом 12
                            лет. Мастер спорта. Уже 1,5 года
                            работаю в сфере фитнеса и растяжки</p>
                    </div>
                </div>
            </div>
            <div class="w-auto col-6 col-lg-3 mb-md-5 mb-3 p-0">
                <div class="coach-card card card-c-w " style="width: 18rem;">
                    <img src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/image 12.png" class="img-fluid card-img-top coach-img" alt="...">
                    <div class="card-body coach-card-body">
                        <h5 class="card-title text-center fs-18">Зайцев Николай<br>Александрович</h5>
                        <p class="card-text text-center coach-card-text fs-14">Профессионально занимаюь теннисом 16&nbsp;лет.
                            Мастера спорта. Последние
                            5&nbsp;лет&nbsp;обучаю теннису в&nbsp;группах и&nbsp;индивидуально</p>
                    </div>
                </div>
            </div>
            <div class="w-auto col-6 col-lg-3 mb-md-5 mb-3 p-0">
                <div class="coach-card card card-c-w " style="width: 18rem;">
                    <img src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/image 13.png" class="img-fluid card-img-top coach-img" alt="...">
                    <div class="card-body coach-card-body">
                        <h5 class="card-title text-center fs-18">Очуркин Артем<br>Николаевич</h5>
                        <p class="card-text text-center coach-card-text fs-14">Профессионально занимаюь теннисом 16 лет.
                            Мастера спорта. Последние 5
                            лет&nbsp;обучаю теннису в&nbsp;группах и&nbsp;индивидуально</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="how-to-find-us-section">
    <div class="container">
        <div class="row text-center mb-80">
            <h3 class="counter_text">Как нас найти</h3>
        </div>
        <div class="row justify-content-center bgw p-30 position-relative z1">
            <div class="row p-0">
                <div class="col-12 col-md-9 p-0 mb-20">
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
                <div class="col-12 col-md-3 mb-4 mb-md-0 text-center d-flex align-items-center justify-content-center">
                    <button class="button white-ball position-relative pr-50 button-link" data-href="/trenirovki">Записаться на тренировку</button>
                </div>
            </div>
            <div class="row  justify-content-between pl-0 pr-0 pb-20 pt-20 btb">
                <div class="col-6 col-md-2 plr-0 ">
                    <div class="row mb-10 ">
                        <b>Звоните</b>
                    </div>
                    <div class="row">
                        <p>+7 (495) 777-85-15</p>
                    </div>
                </div>
                <div class="col-6 col-md-2 plr-0">
                    <div class="row mb-10">
                        <b>Пишите</b>
                    </div>
                    <div class="row">
                        <a class="text-decoration-none blue-text fs-16" href="mailto:tennisocean@mail.ru">tennisocean@mail.ru</a>
                    </div>
                </div>
                <div class="col-6 col-md-3 plr-0">
                    <div class="row mb-10">
                        <b>Подписывайтесь</b>
                    </div>
                    <div class="row">
                        <div class="col"><a class="text-decoration-none blue-text fs-16" href="#">Instagram</a></div>
                        <div class="col"><a class="text-decoration-none blue-text fs-16" href="#">Telegram</a></div>
                        <div class="col"><a class="text-decoration-none blue-text fs-16" href="#">TikTok</a></div>
                    </div>
                </div>
                <div class="col-6 col-md-2 plr-0">
                    <div class="row mb-10">
                        <b class="fs-16">Режим работы</b>
                    </div>
                    <div class="row">
                        <p class="fs-16">Ежедневно с 7:00 до 00:00</p>
                    </div>
                </div>
            </div>
            <div class="row plr-0 pb-20 pt-20">
                <div class="col-6 col-md-4 plr-0 me-auto">
                    <p class="plr-0">Корты, где мы можем провести тренировку</p>
                </div>
                <div class="col-6 col-md-2">
                    <a href="/korty">Смотреть все корты</a>
                </div>
            </div>
            <div class="row">
                <div class="col-11 h-100 col-md-10 position-relative overflow-hidden">
                    <div class="button-carusel">

                        <button class="cort-name-button">1</button>
                        <button class="cort-name-button">2</button>
                        <button class="cort-name-button">3</button>
                        <button class="cort-name-button">4</button>
                        <button class="cort-name-button">5</button>
                        <button class="cort-name-button">6</button>
                        <button class="cort-name-button">7</button>
                        <button class="cort-name-button">8</button>
                        <button class="cort-name-button">9</button>
                        <button class="cort-name-button">10</button>
                        <button class="cort-name-button">11</button>

                    </div>
                </div>
                <div class="col-1 col-md-1">
                    <a href="" class="corts-nav-button prew-button-carusel">
                        <div>&lt;</div>
                    </a>
                    <a href="" class="corts-nav-button next-button-carusel">
                        <div>&gt;</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="map" style="">
        <ymaps class="ymaps-2-1-79-map">
            <ymaps class="ymaps-2-1-79-map ymaps-2-1-79-i-ua_js_yes ymaps-2-1-79-map-bg ymaps-2-1-79-islets_map-lang-ru" >
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
                                    <ymaps id="id_16922994138436694301">
                                        <ymaps class="ymaps-2-1-79-svg-icon ymaps_https___api_maps_yandex_ru_2_1_79_1200211020701islands_icon___1E98FF_34x41_1692299413969" style="position: absolute; width: 34px; height: 41px; left: -11px; top: -38px;">
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