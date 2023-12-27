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
                                            <h2 class="fs-16 grey-text">{{ $trening->title_description }}</h2>
                                        </div>
                                        <div class="row">
                                            <h2 class="fs-24 black-text">{{ $trening->title }}</h2>
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
                                                        data-trening="{{ $trening->id }}" data-uid="{{auth()->user()->id}}">
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
    <div class="modal-background" style="display:none;" >
        <div class="modal-wrapper h-100 flex jcc aic">
            @if (@auth()->user())
                Hello
                <div class="trening-modal-content position-relative bgw">
                    <div class="button_close_form_course"></div>
                    <h3 class="mb-3">Запись на обучение</h3>
                    <form class="add-to-trening">
                        @csrf
                        <div class="mb-3">
                            <div class="grey-text mb-1 bold">Кто идёт</div>
                            <div class="input">{{auth()->user()->firstname}} {{auth()->user()->lastname}}</div>
                        </div>
                        <div class="mb-3">
                            <div class="grey-text mb-1 bold">Тренировка</div>
                            <div class="input">Индивидуальная</div>
                        </div>
                        <div class="mb-3">
                            <div class="grey-text mb-1 bold">Время</div>
                            <div class="input chose-date">
                                <div class="chosed-date"></div>
                                <div class="chosed-interval"></div>
                            </div>
                            <div class="chose-idate-wrapper bgw" style="display: none">
                                <input class="chose-idate" name="chose-idate" type="hidden" >
                                <input class="alt-idate" name="alt-idate" type="hidden" >
                                <input class="alt-interval" name="interval" type="hidden" >
                                <div class="grey-text mb-1 bold">Интервал </div>
                                <div class=" position-relative ">
                                    <div class="input chose-interval"></div>
                                    <div class="interval-list w-100 shadow" >
                                        <ul class="p-0 list-group">
                                            <li class="p-3 list-group-item interval-list-item">Первая половина</li>
                                            <li class="p-3 list-group-item interval-list-item">Второя половина</li>
                                            <li class="p-3 list-group-item interval-list-item">Третья половина</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="mb-3">
                            <div class="grey-text mb-1 bold">Корт</div>
                            <div class="input">Мегаспорт-теннис</div>
                        </div>
                        <div class="mb-3">
                            <div class="text-center">
                                <span>Итого: 8000Р</span>
                            </div>
                        </div>
    
                        <div class="check_chose_send_wrapper">
                            <div class="radio_container">
                                <input class="check_chose_send" type="radio" value="call_me" id="call_me" name="chose_send">
                                <label class="radio_contact_user" for="call_me">Перезвонить мне</label> 
                            </div>
                            <div class="radio_container">
                                <input class="check_chose_send" type="radio" value="sms" id="sms" name="chose_send">
                                <label class="radio_contact_user" for="sms">Ответить по СМС</label>	
                            </div>
                            <input type="text" name="select-trener" class="select_input-hiden trener_id" value="">
                        </div>
                        <div class="text-center">
                            <input class="button" type="submit" value="Отправить">
                        </div>
                    </form>
                </div>
            @endif
            

        </div>
    </div>
    <script src="/assets/js/air-datepicker.js"></script>
<script>
    new AirDatepicker('.chose-idate',{
        inline: true,
        altField: '.alt-idate', 
        altFieldDateFormat:'EEEE, d MMMM',
    
        onSelect({date, formattedDate, datepicker}){
            if($('.chose-idate-wrapper').hasClass('Opened')){
            $('.chose-idate-wrapper').slideUp(800).removeClass('Opened') 
            $('.chosed-date').html($('.alt-idate').val());
            }
        }
    });
    
</script>

                       
@endsection
