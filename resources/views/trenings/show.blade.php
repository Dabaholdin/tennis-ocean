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
                                                <button class="button mb-4 mb-lg-0 white-ball pr-50 position-relative"
                                                    data-tr="{{ $trening->id }}">
                                                    Записаться
                                                </button>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <button class="button pr-50 arrow position-relative"
                                                    data-bs-target=".material" data-bs-toggle="collapse">Доп
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


            {{-- <div class="row">
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
                                    <h2 class="fs-16 grey-text">Теннис</h2>
                                </div>
                                <div class="row">
                                    <h2 class="fs-24 black-text">Тестовая</h2>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <span class="blue-text me-3 fs-24">от 10000 ₽</span>
                                        <span class="grey-text text-decoration-line-through fs-20">100000 ₽</span>
                                    </div>
                                </div>
                                <div class="row text-o">
                                    <p>Описание тренировки</p>
                                </div>

                                <div class="row text-center mt-auto">
                                    <div class="col-12 mb-4 mb-lg-0 col-lg-6">
                                        <button class="button mb-4 mb-lg-0 white-ball pr-50 position-relative"
                                            data-tid="452">Записаться</button>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <button class="button pr-50 arrow position-relative" data-bs-target=".material"
                                            data-bs-toggle="collapse">Доп материалы</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="collapse material row mb-4">
                            <div class="col-12 col-lg-6 ps-lg-0 me-auto">
                                <div class="bw p-30 ">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/KWZGAExj-es"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 pe-0">

                                <div class="bw p-30 d-flex free-text">

                                    <p class="fs-14 m-0">
                                        <img class="float-end img-fluid logo-intext"
                                            src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/logointext.png"
                                            alt="">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam inventore dolore natus
                                        nemo quaerat sequi voluptas! Blanditiis ea optio inventore iusto commodi ad non sed
                                        fugiat veniam necessitatibus quam, voluptas dolor ipsum ipsa eos, illum laborum
                                        nulla. Voluptatibus vero unde voluptate saepe repellat praesentium doloremque modi.
                                        Consequuntur quos, doloremque iure temporibus hic nam tempore facere voluptate
                                        sapiente tempora fuga dolorum sint pariatur dolores. Esse amet sit reprehenderit
                                        ullam quis incidunt, fugiat consectetur illum officia recusandae, sed quos expedita
                                        voluptates, impedit aut sunt. Beatae molestias fuga eum perspiciatis. Fugiat
                                        inventore sint facilis minima dolores pariatur nisi vero suscipit tempore quas rem
                                        nam debitis explicabo, neque maiores quam doloribus. Obcaecati, distinctio aperiam
                                        deserunt ex inventore suscipit magnam dolor, cum dolorem quia minima nulla vitae
                                        praesentium dicta aliquam quasi asperiores voluptate. Numquam, voluptate dolores
                                        porro laudantium quia atque. Rem veritatis adipisci nostrum facere, sed blanditiis
                                        soluta repellendus voluptas earum quo, atque suscipit dolore, laudantium quae ipsum
                                        ipsa voluptates. Quo rem iusto hic at eius autem velit suscipit explicabo, similique
                                        exercitationem? Veniam laudantium quo qui? Consectetur sint cumque excepturi nulla
                                        architecto! Obcaecati quo tenetur adipisci dolorum tempore hic! Nostrum ratione,
                                        illum molestiae cumque magnam eligendi eius vero laboriosam distinctio vitae
                                        officiis fugit corporis cupiditate unde veritatis sit dolorum optio minus quia
                                        beatae excepturi et, earum numquam mollitia! Aspernatur praesentium nisi, assumenda
                                        quaerat eaque, nemo suscipit fugit totam, placeat iure tenetur repellat deserunt
                                        labore. Beatae, obcaecati! Veritatis incidunt provident eum voluptatem laborum
                                        numquam cumque mollitia neque ducimus, enim molestiae aperiam ut minus, et quam
                                        repellendus labore minima debitis? Enim itaque ratione, nihil accusamus voluptate
                                        suscipit, molestias saepe ducimus veritatis facere, nam cupiditate odit. Commodi
                                        facere distinctio debitis tempore, rerum explicabo cum aut doloremque aliquam
                                        ducimus dolorem minus labore. Saepe impedit, amet laboriosam commodi ullam culpa
                                        odio eos est repudiandae, natus a blanditiis veritatis, debitis voluptate!
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div> --}}


        </div>
    </section>


@endsection
