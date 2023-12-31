@extends('layouts.admin')

@section('title', 'Новая тренировка')

@section('content')
    <div class="row mb-3">
        <a href="#" class="button txt-bold link-td-none">Добавить тренировку</a>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{route('admin.store.trening')}}" method="POST">
                <div class="row">
                    <label for="trening_img">Изображение тренинга</label>
                    <input type="file" name="trening_img">
                </div>
                <div class="row">

                    <label class="label" for="trening_title">Название</label>
                    <input class="input" type="text" name="trening_title">
                </div>
                <div class="row">
                    <label class="label" for="trening_category">Категория тренировки</label>
                    <input class="input" type="text" name="trening_category">
                </div>
                <div class="row">
                    <label class="label" for="trening_description">Описание тренировки</label>
                    <input class="input" type="text" name="trening_description">
                </div>
                <div class="row">
                    <label class="label" for="trening_price">Стоимость тренировки</label>
                    <input class="input" type="text" name="trening_price">
                </div>
                <div class="row">
                    <label class="label" for="free_content">Бесплатный контент</label>
                    <input class="input" type="text" name="free_content">
                </div>
                <div class="row">
                  <input type="submit" value="Добавить">
                </div>
            </form>
        </div>
    </div>
@endsection
            $table->string('free_type')->default('img');
            $table->text('free_description');
            $table->text('free_video_url');