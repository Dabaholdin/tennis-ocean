@extends('layouts.base')

@section('title', 'Тренировки')

@section('content')


    <section class="education-section">
        <div class="container">
            <div class="row">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb  mb-20">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item" aria-current="page">Тренировки</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <h1 class="text-center text_title">Тренировки</h1>
            </div>

            @foreach ($Trening_categorys as $Trening_category)
                <a class="text-decoration-none black-text" href="{{@route('trenings.show',['cat_id'=>$Trening_category->name,'type'=>'offline'])}}">
                    <div class="row p-30 bg-white mb-4">
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-5 col-xl-5">
                            @if ($Trening_category->category_img != "")
                                <img class="img-fluid" src="{{ @asset($Trening_category->category_img) }}" alt="">
                            @else
                                <img class="img-fluid" src="{{ @asset('storage/category/defimg.png') }}" alt="">
                            @endif   
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-6 col-xl-6">
                            <div class="row">

                                <h2 class="fs-24">{{ $Trening_category->name }}</h2>

                            </div>
                            <div class="row">
                                <div class="education-status">

                                    <p>Базовые</p>


                                    <p>Продвинутые</p>


                                    <p>Вип</p>

                                </div>
                            </div>
                            <div class="row">
                                <p>
                                    {{ $Trening_category->description }} 
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
