<div
    class="m-mobile round-image {{ empty(auth()->user()->avatar) ? 'bbg accminimg white-text bold d-flex justify-content-center align-items-center' : '' }}">
    @empty(auth()->user()->avatar)
        {{ mb_substr(auth()->user()->firstname, 0, 1) }}{{ mb_substr(auth()->user()->lastname, 0, 1) }}
    @else
        <img class="accminimg" width="38" height="38" src="{{ @asset('storage/' . auth()->user()->avatar) }}">
    @endempty
</div>

<div class="mobile-accmenu-wrapper ">
    <div class="mobile-accmenu w-100 bgw">
        <div class="col-12">

            <div class="text-center">
                <p class="fs-17 p-0 m-0 text-bold">{{ auth()->user()->firstname }}
                    {{ auth()->user()->lastname }}</p>
                <p class="fs-12 p-0 m-0">{{ auth()->user()->email }}</p>
            </div>
        </div>
        <div class="col-md-12">
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
                    @can('view', auth()->user())
                        <li class="li-nav">
                            <div class="nav-wrap ">
                                <a href="{{ @Route('admin.home') }}"
                                    class="text-decoration-none black-text ac-nav-menu ">Адимн панель</a>
                            </div>
                        </li>
                    @endcan
                </ul>
            </nav>
        </div>
    </div>

</div>
