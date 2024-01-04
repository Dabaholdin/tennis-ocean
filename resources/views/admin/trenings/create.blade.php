@extends('layouts.admin')

@section('title', 'Новая тренировка')

@section('content')
    
    <div class="row">
        <div class="col-8">
            <form action="{{route('admin.store.trening')}}" method="POST" enctype='multipart/form-data'>
                @csrf
                <div class="row">
                    <div class="col-md-5">
                        <h3>Детали тренировки</h3>
                        <div class="row mb-3">
                            <label class="form-label" for="trening_img">Изображение тренировки</label>
                            <input type="file" class="form-control" name="trening_img">
                        </div>
                        <div class="row mb-3">
        
                            <label class="form-label" for="trening_title">Название</label>
                            <input class="input form-control" type="text" name="trening_title" id="trening_title">
                        </div>
                        <div class="row mb-3">
                            <label class="form-label" for="trening_category">Категория тренировки</label>
                            <select class="input form-select form-control" name="trening_category" id="trening_category">
                                <option selected>Выберите тип</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <label for="trening_method" class="form-label">Метод тренировки</label>
                            <select class="input form-select form-control" name="trening_method" id="trening_method">
                                <option selected>Выберите метод тренировки</option>
                                <option value="online">Онлайн</option>
                                <option value="offline">Офлайн</option>
                                <option value="abonement">Абонемент</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <label for="trening_type" class="form-label">Метод тренировки</label>
                            <select class="input form-select form-control" name="trening_type" id="trening_type">
                                <option selected>Выберите метод тренировки</option>
                                <option value="Групповая тренировка">Групповая тренировка</option>
                                <option value="Индивидуальная">Индивидуальная</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label" for="trening_description">Описание тренировки</label>
                            <textarea class="input form-control" name="trening_description" id="trening_description"></textarea>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label" for="prefix_price">Префикс цены</label>
                            <select class="input form-select form-control" name="prefix_price" id="prefix_price">
                                <option selected>Выберите префикс</option>
                                <option value="от">от</option>
                                <option value="до">до</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label" for="trening_price">Стоимость тренировки</label>
                            <input class="input form-control" type="number" name="trening_price" id="trening_price">
                        </div>
                        <div class="row mb-3">
                          <input type="submit" class="button" value="Добавить">
                        </div>
                    </div>
                    <div class="col-md-5 mx-auto">
                        <h3>Бесплатный контент</h3>
                        <div class="row mb-3">
                            <label class="form-label" for="free_content_type">Бесплатный контент</label>
                            <select class="input form-select form-control" name="free_content_type" id="free_content_type">
                                <option selected>Выберите тип</option>
                                <option value="video">Видео</option>
                                <option value="youtube">Youtube</option>
                                <option value="image">Изображение</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <label for="url" class="form-label">Ссылка</label>
                            <input type="text" class="input form-control" name="url" id="url" >
                        </div>
                        <div class="row mb-3">
                            <label for="free_content_description" class="form-label">Описание к контенту</label>
                            <textarea name="free_content_description" id="free_content_description" cols="50" rows="10" class="input"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
            {{-- $table->string('free_type')->default('img');
            $table->text('free_description');
            $table->text('free_video_url'); --}}