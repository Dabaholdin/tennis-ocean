<x-form method="POST" action="{{@route('login.enter')}}">
    <div class="row">
        @csrf
        @auth
        1 
            @else
        2
        @endif
        <h3 class="text-center mb-30">Регистрация</h3>
        <div class="col-sm-1 p-0">
            <img src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/icons/userregistrationstart.png" alt="">
        </div>
        <div class="col-sm-4 "></div>
        <div class="col-sm-1 mx-auto p-0">
            <img src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/icons/mailverefied.png" alt="">
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-1 p-0 mb-40">
            <img src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/icons/registrationredy.png" alt="">
        </div>
        <div class="col-sm-12 mb-3 p-0">
            <p class="text-center text-bold">
                Регистрация прошла успешно! Теперь вы можете войти в свой аккаунт
            </p>
        </div>
        <div class="col-sm-12 mb-3 p-0">
            <label for="login" class="grey-text mb-1">Эл.почта</label>
            <input type="Email" name="email" class="w-100 input" id="login">
        </div>
        <div class="col-sm-12 mb-4 p-0">
            <label for="acc-psw" class="grey-text mb-1">Пароль</label>
            <input type="password" class="w-100 input" name="password" id="acc-psw">
        </div>
        <button class="button signon">Вход</button>
    </div>
</x-form>