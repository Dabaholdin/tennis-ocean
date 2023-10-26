<div class="col-3 order-3 order-lg-3 col-xs-12 col-md-4 col-lg-2 col-xl-2 p-0">
    <div class="row user-menu-wrap">
        <div class="col menu-container">
            <div class="row um">
                <div class="col-3">
                    <div class="round-image toggle">
                        <img class="accminimg" width="38" height="38" src="https://tennis-ocean.ru/wp-content/uploads/2022/09/1c3c1f7865a8505dbff6e416696927f9-2-150x150.jpg"> 
                    </div>
                </div>

                <div class="col-9">
                    <div class="cmenu">
                        <div>
                            <p class="fs-14 p-0 m-0 text-bold">{{auth()->user()->firstname}} {{auth()->user()->lastname}}</p>
                            <p class="fs-12 p-0 m-0">{{auth()->user()->email}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 cmenu">
                    <nav class="user-nav">
                        <ul class="p-0 m-0">
                            <li class="li-nav">
                                <a href="{{ @Route('cabinet.index') }}" class="text-decoration-none black-text ac-nav-menu py-3">Мой
                                    кабинет</a>
                            </li>
                            <li class="li-nav">
                                <a href="#" class="text-decoration-none black-text ac-nav-menu py-3">Настройки</a>
                            </li>
                            <li class="li-nav">
                                <a href="{{@Route('login.logout')}}" class="text-decoration-none black-text ac-nav-menu py-3">Выход</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                
            </div>
        </div>
    </div>
</div>
{{-- 
<div class="row d-flex align-items-center ps-3 pe-3 ">
    <div class="col-3 p-0">
        <a class="">
            <img width="38" height="38"
                src="https://tennis-ocean.ru/wp-content/uploads/2022/09/1c3c1f7865a8505dbff6e416696927f9-2-150x150.jpg"
                class="rounded-circle" alt="" decoding="async"> </a>
    </div>
    <div class="col-9 collapseMenu p-0 collapse show" style="">
        <p class="fs-14 text-bold m-0">Бахолдин Дмитрий</p>
        <p class="fs-14 text-bold m-0 grey-text">d.a.baholdin@yandex.ru</p>
    </div>
</div>
<div class="row position-absolute bg-white">
    <ul id="5" class="top_header_account collapseMenu collapse show" style="">
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73 ln pb-3">
            <a href="{{ @Route('cabinet.index') }}" class="text-decoration-none black-text ac-nav-menu py-3">Мой
                кабинет</a>
        </li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-72 ln pb-3">
            <a href="#" class="text-decoration-none black-text ac-nav-menu py-3">Настройки</a>
        </li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-92 ln pb-3">
            <a href="" class="text-decoration-none black-text ac-nav-menu py-3">Выход</a>
        </li>
    </ul>
</div> --}}