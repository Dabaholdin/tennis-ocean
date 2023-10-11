<x-form class="registration-form" action="{{route('register.add')}}" method="POST">
    @csrf
   
    <div class="row">
        <h3 class="text-center mb-30">Регистрация</h3>
        <div class="col-1 p-0">
            <img src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/icons/userregistration.png" alt="">
        </div>
        <div class="col-4 "></div>
        <div class="col-1 mx-auto p-0">
            <img src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/icons/mailnoverifi.png" alt="">
        </div>
        <div class="col-4"></div>
        <div class="col-1 p-0 mb-40">
            <img src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/icons/accountnotregister.png" alt="">
        </div>
        <div class="col-6 p-0 mb-3 sinput me-auto">
            <label for="firstname" class="grey-text mb-1">Ваше имя</label>
            <input type="text" name="firstname" class="input firstname" id="firstname">
        </div>
        <div class="col-6 mb-3 sinput p-0">
            <label for="lastname" class="grey-text mb-1">Ваша фамилия</label>
            <input type="text" name="lastname" class="input lastname" id="lastname">
        </div>
        <div class="col-12 mb-3 p-0">
            <label for="email" class="grey-text mb-1">Эл. почта</label>
            <input type="email" name="email" class="w-100 input" id="email">
        </div>
        <div class="col-12 mb-3 p-0">
            <label for="password" class="grey-text mb-1">Пароль</label>
            <input type="password" name="password" class="w-100 input" id="password">
        </div>
        <div class="col-12 mb-30 p-0">
            <label for="password-confirmation" class="grey-text mb-1">Повторите пароль</label>
            <input type="password" name="password-confirmation" class="w-100 input" id="password-confirmation">
        </div>
        {{-- <div class="col-12 mb-30 p-0">
            <label for="cupon" class="grey-text mb-1">Купон</label>
            <input type="text" name="cupon" class="w-100 input" id="cupon">
        </div> --}}
        <div class="col-12 mb-3 mt-3 mt-md-0 p-0">
            <button class="button w-100 next-step" data-step=".registration" data-next-step=".activation">Далее</button>
        </div>
        <div class="col-12 mb-3 p-0">
            <p class="text-center fs-14">
                Нажимая «Далее», Вы соглашаетесь с <span class="blue-text">правилами</span> и
                <span class="blue-text">политикой конфиденциальности
                </span>
            </p>
        </div>
        <div class="col-sm-12">
            <p class="text-center">Уже есть аккаунт? <a href="">Войти</a></p>
        </div>
    </div>
</x-form>