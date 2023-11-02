<div class="col-3 order-3 order-lg-3 col-xs-12 col-md-4 col-lg-2 col-xl-2 p-0">
    <div class="row user-menu-wrap">
        <div class="col menu-container">
            <div class="row um">
                <div class="col-3">
                    <div class="round-image toggle">
                        <img class="accminimg" width="38" height="38"
                            src="{{ @asset('storage/'.auth()->user()->avatar) }}">
                    </div>
                </div>
                
                <div class="col-9">
                    <div class="cmenu">
                        <div>
                            <p class="fs-14 p-0 m-0 text-bold">{{ auth()->user()->firstname }}
                                {{ auth()->user()->lastname }}</p>
                            <p class="fs-12 p-0 m-0">{{ auth()->user()->email }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 cmenu">
                    <nav class="user-nav">
                        <ul class="p-0 m-0">
                            <li class="li-nav">
                                <div class="nav-wrap ">
                                    <a href="{{ @Route('cabinet.index') }}"
                                        class="text-decoration-none black-text ac-nav-menu">Мой кабинет</a>
                                </div>
                            </li>
                            <li class="li-nav">
                                <div class="nav-wrap ">
                                    <a href="{{ @Route('cabinet.setings') }}"
                                        class="text-decoration-none black-text ac-nav-menu ">Настройки</a>
                                </div>
                            </li>
                            <li class="li-nav">
                                <div class="nav-wrap ">
                                    <a href="{{ @Route('login.logout') }}"
                                        class="text-decoration-none black-text ac-nav-menu ">Выход</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
