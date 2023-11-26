@extends('layouts.base')

@section('title','Главная страница')

@section('content')


<section class="section_title">
    <div class="container">
        <div class="section_title_wrapper position-relative z-0 row">
            <div class="text_container_wrapper z-1 col-xs-12 col-sm-12 col-md-7 col-lg-5 col-xl-5">
                <div class="text_title_wrapper w-sm-100">
                    <h1 class="text_title">Современная школа <br><span class="counter_text uppercase">тенниса</span></h1>
                </div>
                <p class="p_text fs-4">Мы совмещаем традиции и технологии, чтобы сделать вас лучше</p>
                <div class="row w-100">
                    <div class="button_get_tich_wrapper p-0 my-0 text-center mb-3 ms-md-0 col-7  col-lg-6">
                        @auth
                        <a  class="white-ball pr-50 position-relative z-0 button button-link fw-bold d-inline-block" href="{{ @route('trenings.index') }}">Начать
                            обучение</a>
                        @else 
                        <button data-href="/trenirovki" class="white-ball pr-50 position-relative z-0 button button-link fw-bold d-inline-block button button-fn" data-target="open-popup">Начать
                            обучение</button>   
                        @endauth
                        
                    </div>
                    <div class="text-center my-0 mb-5 ms-md-0 col-5  col-lg-6 ">
                        <a class=" button-link btn-transparent button button_about_us" href="{{@route('aboutus.index')}}">Узнать о нас</a>
                    </div>
                </div>
            </div>
            <div class="p-0 z-0 wrapper_title_img col-xs-12 col-sm-12 col-md-5 col-lg-7 col-xl-7">
            
                <img class="title_img img-fluid " src="https://tennis-ocean.ru/wp-content/uploads/2023/05/imgh.png" alt="title_img">
            </div>
        </div>
    </div>
</section>
<section class="what_section">
    <div class="container">
        <div class="what_wrapper justify-content-center row">
            <div class="what_image_wrapper position-relative z-0 col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                <img class="whatimg img-fluid" src="https://tennis-ocean.ru/wp-content/uploads/2023/05/whatimg.png" alt="">
                <img class="beforewhatimg img-fluid position-absolute" src="https://tennis-ocean.ru/wp-content/uploads/2023/05/beforewhatimg.png" alt="">
            </div>
            <div class="what_text col-12 col-md-6">
                <h2 class="what_title counter_text">Что такое Tennis Ocean?</h2>
                <p class="what_text_inner padding_text"> Инновационная академия тенниса созданная с ведущими экспертами в области спорта, питания и медицины<br><br>

Наша академия предлагает целый ряд&nbsp;тренировок, которые помогут с&nbsp;освоением техники, ускорят процесс обучения, сделают его&nbsp;более эффективным.<br><br>

Вы сможете в любое удобное для вас время обратиться к материалам интерактивной платформы, узнать новое или закрепить пройденное.</p>
            </div>
        </div>
    </div>
</section>
<section class="lots_of_learning">
    <div class="container">
        <div class="row">
            <h2 class="white-text mb-80 counter_text_white text-center">Множество тем для обучения</h2>
        </div>
        <div class="text_lots_of_learning_wrapper row p-30 mb-30 ">
            <div class="text_lots_of_learning mb-3 mb-md-0 col-12 col-md-9">
                <p class="white-text m-0">Платформа для обучения состоит из большого количества разделов с различными тематиками.
Там вы сможете найти тренировки по интересующим вас темам.</p>
            </div>
            <div class="col-md-3 col-12 d-flex justify-content-center">
                <button class="button_about_us button_see_all white-text btn btn-transparent button">Посмотреть
                    всё</button>
            </div>
        </div>

        <div class="lots_of_learning_servise_wrapper px-2 px-lg-0 row justify-content-between">
                <div class="w-auto col-6 col-lg-3 mb-md-5 mb-3 p-0">
                <div class="card card-c-w mb-md-5 mb-sm-3" style="width: 18rem;">
                    <img src="https://tennis-ocean.ru/wp-content/uploads/2023/05/young-pretty-woman-tennis-fashion-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Теннис</h5>
                        <p class="card-text fs-14"></p>
                    </div>
                </div>
            </div>
                <div class="w-auto col-6 col-lg-3 mb-md-5 mb-3 p-0">
                <div class="card card-c-w mb-md-5 mb-sm-3" style="width: 18rem;">
                    <img src="https://tennis-ocean.ru/wp-content/uploads/2023/05/sporty-women-playing-paddle-tennis-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Падел</h5>
                        <p class="card-text fs-14"></p>
                    </div>
                </div>
            </div>
                <div class="w-auto col-6 col-lg-3 mb-md-5 mb-3 p-0">
                <div class="card card-c-w mb-md-5 mb-sm-3" style="width: 18rem;">
                    <img src="https://tennis-ocean.ru/wp-content/uploads/2023/05/3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Пляжный теннис </h5>
                        <p class="card-text fs-14"></p>
                    </div>
                </div>
            </div>
                <div class="w-auto col-6 col-lg-3 mb-md-5 mb-3 p-0">
                <div class="card card-c-w mb-md-5 mb-sm-3" style="width: 18rem;">
                    <img src="https://tennis-ocean.ru/wp-content/uploads/2023/05/4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Сквош</h5>
                        <p class="card-text fs-14"></p>
                    </div>
                </div>
            </div>
        
    </div>
</div></section>
<section class="unique_system_section">
    <div class="container">
        <div class="row">
            <h2 class="counter_text text-center mb-80">Уникальная система тренировок</h2>
        </div>

        <div class="info-container row mb-60 align-items-center justify-content-mb-center">
            <div class=" info-text col-xs-12 col-sm-12 col-md-7 col-lg-5 col-xl-5 ">
                <p class="info-text-p"></p><p>Система тренировок Tennis Ocean — это современный и уникальный подход к обучению.</p>
<p>Нам&nbsp;удалось совместить на одной платформе такие спортивные виды деятельности, которые не только помогут вам быстрее и качественней освоить навыки тенниса, но и  поддерживать своё тело в оптимальной форме. Также, вы не заскучаете в нашей академии благодаря множеству разновидности тренировок.</p>
<p></p>
            </div>
            <div class="info-img-wrapper position-relative z-0 col-xs-12 col-sm-12 col-md-7 col-lg-6 col-xl-6 d-flex justify-content-end pr-105">
                <img class="img-fluid" src="https://tennis-ocean.ru/wp-content/uploads/2023/05/right.png" alt="">
                <img class="img-fluid position-absolute info-container-elipse-right" src="https://tennis-ocean.ru/wp-content/uploads/2023/05/right2.png" alt="">
            </div>
        </div>

        <div class="info-container row align-items-center justify-content-md-center">
            <div class="info-img-wrapper mb-3 mb-md-0 position-relative z-0 col-xs-12 col-sm-12 col-md-7 col-lg-6 col-xl-6 d-flex justify-content-start pl-105">
                <img class="img-fluid" src="https://tennis-ocean.ru/wp-content/uploads/2023/05/left.png" alt="">
                <img class="img-fluid position-absolute info-container-elipse-left" src="https://tennis-ocean.ru/wp-content/uploads/2023/05/left2.png" alt="">
            </div>
            <div class="info-text col-xs-12 col-sm-12 col-md-7 col-lg-5 col-xl-5">
                <p class="info-text-p">
                </p><p>Вы&nbsp;можете практиковаться с&nbsp;тренерами нашей академии в зале или на корте в обговорённое с тренером время и&nbsp;также в онлайн режиме в любое удобное для вас время, тренер всегда будет на связи.</p>
<p>Такой формат позволит вам быть более мобильным в своём расписании&nbsp;и&nbsp;не забывать пройденный материал, а закреплять свои успехи на дому если нет возможности прийти лично!</p>
                <p></p>
            </div>

        </div>
    </div>
</section>
<section class="coaching-staff-section">
    <div class="container">
        <div class="text-center mb-80">
            <h2 class="counter_text">Тренерский состав</h2>
        </div>
        <div class="row px-2 px-lg-0 justify-content-between">
                        <div class="w-auto col-6 col-lg-3 mb-md-5 mb-3 p-0">
                <div class="coach-card card card-c-w " style="width: 18rem;">
                    <img src="https://tennis-ocean.ru/wp-content/uploads/2023/05/image-10.png" class="img-fluid card-img-top coach-img " alt="...">
                    <div class="card-body coach-card-body">
                        <h5 class="card-title text-center fs-18">Рогов Денис Михайлович</h5>
                        <p class="card-text text-center coach-card-text fs-14">Профессионально занимаюь теннисом 16 лет. Мастера спорта. Последние 5 лет обучаю теннису в группах и индивидуально</p>
                    </div>
                </div>
            </div>               
                
                        <div class="w-auto col-6 col-lg-3 mb-md-5 mb-3 p-0">
                <div class="coach-card card card-c-w " style="width: 18rem;">
                    <img src="https://tennis-ocean.ru/wp-content/uploads/2023/05/image-11.png" class="img-fluid card-img-top coach-img " alt="...">
                    <div class="card-body coach-card-body">
                        <h5 class="card-title text-center fs-18">Шкрылева Елизавета Андреевна</h5>
                        <p class="card-text text-center coach-card-text fs-14">Профессионально занималась теннисом 12 лет. Мастер спорта. Уже 1,5 года работаю в сфере фитнеса и растяжки</p>
                    </div>
                </div>
            </div>               
                
                        <div class="w-auto col-6 col-lg-3 mb-md-5 mb-3 p-0">
                <div class="coach-card card card-c-w " style="width: 18rem;">
                    <img src="https://tennis-ocean.ru/wp-content/uploads/2023/05/image-12.png" class="img-fluid card-img-top coach-img " alt="...">
                    <div class="card-body coach-card-body">
                        <h5 class="card-title text-center fs-18">Зайцев Николай Александрович</h5>
                        <p class="card-text text-center coach-card-text fs-14">Профессионально занимаюь теннисом 16 лет. Мастера спорта. Последние 5 лет обучаю теннису в группах и индивидуально</p>
                    </div>
                </div>
            </div>               
                
                        <div class="w-auto col-6 col-lg-3 mb-md-5 mb-3 p-0">
                <div class="coach-card card card-c-w " style="width: 18rem;">
                    <img src="https://tennis-ocean.ru/wp-content/uploads/2023/05/image-13.png" class="img-fluid card-img-top coach-img " alt="...">
                    <div class="card-body coach-card-body">
                        <h5 class="card-title text-center fs-18">Очуркин Артем Николаевич</h5>
                        <p class="card-text text-center coach-card-text fs-14">Профессионально занимаюь теннисом 16 лет. Мастера спорта. Последние 5 лет обучаю теннису в группах и индивидуально</p>
                    </div>
                </div>
            </div>               
                
            
        </div>


        <div class="coaching_staff_wrapper p-30 row">
            <div class="coaching_staff_text col-xs-12 col-sm-12 col-md-10 col-lg-8 col-xl-8">
                <p class="fs-16"></p><p>Тренеры <strong>Tennis Ocean</strong> обучались в разных странах мира, поэтому наши тренировки совмещают самые лучшие техники обучения. Мы сможем научить играть в теннис любого за минимальный срок.</p>
<p>Мы предлагаем <strong>индивидуальный подход</strong> к каждому спортсмену, чтобы распознать талант каждого и подобрать наиболее эффективную стратегию к достижению результатов</p>
<p></p>
            </div>

            <div class="d-flex col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 justify-content-center align-items-center">
                <div class="button_get_tich_wrapper">
                    <button class="button white-ball pr-50 position-relative z-0">Записаться на тренировку</button>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="friendly_community_section">
    <div class="container">
        <div class="friendly_community_wrapper row">
            <div class="friendly_community_text_container m-0 col-xs-12 col-sm-12 col-md-7 col-lg-6 col-xl-6">
                <h3 class="counter_text_white mb-60">Дружелюбное сообщество</h3>
                <div class="friendly_community_text white-text fs-18"><p>Что&nbsp;помогает добиться отличного результата в&nbsp;спорте и&nbsp;не&nbsp;потерять мотивацию, даже&nbsp;в&nbsp;критические моменты? Это&nbsp;люди, первоклассные спортсмены, эксперты и&nbsp;любители тенниса, которые формируют дружелюбное сообщество академии.</p>
<p>Здесь вы&nbsp;найдёте единомышленников, друзей и&nbsp;тех, кто&nbsp;вас будет побуждать на&nbsp;достижение новых самых смелых целей в&nbsp;спорте или&nbsp;в&nbsp;личностном развитии. Мы&nbsp;делаем все, чтобы&nbsp;каждый член нашей команды чувствовал себя комфортно и&nbsp;с&nbsp;интересом относился ко&nbsp;всему, что&nbsp;происходит в&nbsp;академии.</p>
</div>
            </div>
            <div class="friendly_community_img col-xs-12 col-sm-12 col-md-7 col-lg-6 col-xl-6 position-relative z-0">
            
                <img class="elips_img_position elips1 position-absolute" src="https://tennis-ocean.ru/wp-content/uploads/2023/05/ellipse-1.png" alt="">
                <img class="elips_img_position elips2 position-absolute" src="https://tennis-ocean.ru/wp-content/uploads/2023/05/ellipse-1.png" alt="">
                <img class="elips_img_position elips3 position-absolute" src="https://tennis-ocean.ru/wp-content/uploads/2023/05/ellipse-3.png" alt="">
                <img class="elips_img_position elips4 position-absolute" src="https://tennis-ocean.ru/wp-content/uploads/2023/05/ellipse-1.png" alt="">
                <img class="elips_img_position elips5 position-absolute" src="https://tennis-ocean.ru/wp-content/uploads/2023/05/ellipse-1.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="group_classes_for_children">
    <div class="container">
        <h3 class="text-center mb-80 group_classes_for_children_title">Групповые занятия<span class="counter_text"> для детей</span></h3>
        <div class="mb-60 flex row justify-content-between">
            <div class="group_img mb-3 mb-md-0 mx-auto position-relative z-0 col-xs-12 col-sm-12 col-md-7 col-lg-6 col-xl-6 p-0">
                <div class="row p-0 justify-content-center">
                    <div class="row p-0">
                        <div class="col-12 p-0 group-bg">
                            <img class="img-fluid" src="https://tennis-ocean.ru/wp-content/uploads/2023/05/firstimg.png" alt="">
                        </div>
                    </div>
                    <div class="row p-0 mb-sm-3">
                        <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 p-0">
                            <img class="bottom-img img-fluid" src="https://tennis-ocean.ru/wp-content/uploads/2023/05/img-1.png" alt="">
                        </div>
                        <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 p-0">
                            <img class="bottom-img img-fluid" src="https://tennis-ocean.ru/wp-content/uploads/2023/05/img-2.png" alt="">
                        </div>
                    </div>
                </div>
                <img class="elips_for_center position-absolute" src="https://tennis-ocean.ru/wp-content/uploads/2023/05/imgelipse.png" alt="">
            </div>

            <div class="group_classes_for_children_text col-xs-12 col-sm-12 col-md-7 col-lg-6 col-xl-6">
                <div class="row">
                                        <div class="col-12 mb-30">
                        <div class="p-0 ms-20p mb-11 d-flex justify-content-md-start">
                            <div class="blue-ball position-relative z-0">
                                <h3 class="fs-18 text-center text-md-start pl-35">Полная физическая нагрузка</h3>
                            </div>
                        </div>
                        <p class="fs-16 p-0">Игра укрепляет все мышцы, в том числе спины, ног, рук, шеи и пресса. Большой теннис тренирует сердечную мышцу и сосудистую системы в целом</p>
                    </div>
                                        <div class="col-12 mb-30">
                        <div class="p-0 ms-20p mb-11 d-flex justify-content-md-start">
                            <div class="blue-ball position-relative z-0">
                                <h3 class="fs-18 text-center text-md-start pl-35">Уникальная методика школы</h3>
                            </div>
                        </div>
                        <p class="fs-16 p-0">Дети прошедшие теннисную программу 10S, опережают своих сверстников в игре на счет хорошо «поставленной» и закрепленной базовой техники тенниса. Она позволяет ребенку гармонично развиваться и даже участвовать в соревнованиях.</p>
                    </div>
                                        <div class="col-12 mb-30">
                        <div class="p-0 ms-20p mb-11 d-flex justify-content-md-start">
                            <div class="blue-ball position-relative z-0">
                                <h3 class="fs-18 text-center text-md-start pl-35">Опытный тренерский состав</h3>
                            </div>
                        </div>
                        <p class="fs-16 p-0">Тренеры Tennis Ocean обучались в разных странах мира</p>
                    </div>
                                        <div class="col-12 mb-30">
                        <div class="p-0 ms-20p mb-11 d-flex justify-content-md-start">
                            <div class="blue-ball position-relative z-0">
                                <h3 class="fs-18 text-center text-md-start pl-35">Уникальные тренировки в игровой форме</h3>
                            </div>
                        </div>
                        <p class="fs-16 p-0">Игровой метод тренировки направлен на развитие координации движений, быстроты, выносливости. Он оказывает общее воздействие на организм игрока</p>
                    </div>
                                        <div class="col-12 mb-30">
                        <div class="p-0 ms-20p mb-11 d-flex justify-content-md-start">
                            <div class="blue-ball position-relative z-0">
                                <h3 class="fs-18 text-center text-md-start pl-35">Легкие ракетки и специальные мечи</h3>
                            </div>
                        </div>
                        <p class="fs-16 p-0">Лучшие ракетки для настольного тенниса начинающим и специальный тип учебных мячей</p>
                    </div>
                                    </div>
            </div>

        </div>
        <div class="button_center row">
            <div class="text-center col-12">
                <button class="button white-ball pr-50 position-relative z-0">Записаться</button>
            </div>
        </div>
    </div>
</section>
<section class="a_simple_start_to_learning">
    <div class="container">
        <div class="row mb-80">
            <h1 class="text-center counter_text">Простое начало обучения</h1>
        </div>

        <div class="step mb-20 p-30 row d-flex align-items-center">
            <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
                <p class="fs-18 fw-bold m-0 p-0"><span class="step-number me-2">1.</span> Перейдите на&nbsp;страницу
                    регистрации и заполните поля ввода данных</p>
            </div>
            <div class="mt-3 mt-mb-0  col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-sm-3 d-flex justify-content-center">
                <button class="button position-relative z-0 white-ball pr-50" data-auth="false">Зарегистрироваться</button>
            </div>
        </div>
        <div class="step mb-20 p-30 row d-flex align-items-center">
            <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <p class="fs-18 fw-bold m-0 p-0"><span class="step-number me-2">2.</span>Перейдите на сраницу обучения
                </p>
            </div>
        </div>
        <div class="step mb-20 p-30 row d-flex align-items-center">
            <div class="col-12">
                <p class="fs-18 fw-bold m-0 p-0"><span class="step-number me-2">3.</span>Запишитесь на онлайн или
                    оффлайн тренировку</p>
            </div>
        </div>
    </div>
</section>

@endsection