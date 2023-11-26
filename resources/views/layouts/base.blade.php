<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="-1" />
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=e8f80dd6-6709-49c9-9d22-9bd35053ee89"
        type="text/javascript"></script>
    <link rel="icon" href="{{ asset('assets/img/icons/image16.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/assets/css/default.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/old_default.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    
    <title>@yield('title')</title>
</head>
<body>
    @include('includes.header')
    
        @yield('content')
    
    @include('includes.footer')
    
    <div class="popup-wrapper" style="display:none;">
        <div class="popub-background">
            <div class="popup-form row bgw form-container registration">
                <div class="col"> 
                    @include('forms.registration')
                </div>               
            </div>
            <div class="popup-form row bgw form-container activation">
                <div class="col">
                    @include('forms.activation')
                </div>
            </div>
            <div class="popup-form row bgw form-container login ">
                <div class="col">
                    @include('forms.enter')
                </div>
            </div>
        </div>
    </div>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/popup.js"></script>
    <script src="/assets/js/scripts.js"></script>
    <script src="/assets/js/requestTrening.js"></script>
</body>
</html>