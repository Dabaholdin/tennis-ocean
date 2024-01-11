<header class="header pb-4 pt-4">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="mb-0 mb-md-0 col-6 order-2 order-lg-1 col-xs-12 col-md-4  col-lg-3 ">
                <a class="navbar-brand d-flex justify-content-center" href="{{ @route('home.index') }}"><img
                        class="logo img-fluid" src="{{ @asset('assets/img/logo/Logo.png') }}" alt=""></a>
            </div>
            <div
                class="mb-0 mb-md-0 col-3 order-1 order-lg-2 col-xs-12 col-md-4  col-lg-7 d-flex justify-content-center">
                <nav class="navbard navbar navbar-expand-lg bg-body-tertiary ">
                    <div>
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="true" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="bgw z-2 dropdown-container navbar-collapse justify-content-center collapse"
                            id="navbarSupportedContent" style="">
                            <ul class="navbar-nav mb-2 mb-lg-0 ">
                                <li id="menu-item-107"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-107">
                                    <a href="{{ @route('trenings.index') }}"
                                        class="nav-link fs-16 fw-bold">Тренировки</a>
                                </li>
                                <li>
                                    <a href="{{ @route('fees.index') }}" class="nav-link fs-16 fw-bold">Сборы</a>
                                </li>
                                <li>
                                    <a href="{{ @route('gallery.index') }}" class="nav-link fs-16 fw-bold">Галерея</a>
                                </li>
                                <li>
                                    <a href="{{ @route('courts.index') }}" class="nav-link fs-16 fw-bold">Корты</a>
                                </li>
                                <li>
                                    <a href="{{ @route('aboutus.index') }}" class="nav-link fs-16 fw-bold">О нас</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            @auth
                @include('menu.account')
            @else
                <div
                    class="col-3 order-3 order-lg-3 col-xs-12 col-md-4  col-lg-2 col-xl-2 text-center position-relative p-0">
                    <x-button class="button button-fn" data-target="open-popup">Войти</x-button>
                </div>
            @endauth

        </div>
    </div>
</header>
