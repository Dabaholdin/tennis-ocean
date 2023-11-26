@extends('layouts.admin')

@section('title','Тренировки')

@section('content')
<div class="row mb-3">
  <a href="#" class="button txt-bold link-td-none">Добавить тренировку</a>
</div>
<div class="row">
  <div class="col-12">
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Изображение</th>
            <th scope="col">Название</th>
            <th scope="col">Категория</th>
            <th scope="col">Описание</th>
            <th scope="col">Стоимость</th>
            <th scope="col">Префикс стоимости</th>
            <th scope="col">Бесплатный контент</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($trainings as $training)
            <tr>
              @if ($training ->training_img !='')
                  <td><img class="img-circle elevation-2" width="35px" height="35px" src="{{@asset("storage/" . $training ->training_img)}}" alt="training_img".{{$training->id}}></td>
              @else
              <td>Фото не установлено</td>
              @endif
              <td>{{$training ->name}}</td>
              <td>{{$training ->category_id}}</td>
              <td>{{$training ->name_description}}</td>
              <td>{{$training ->price}}</td>
              <td>{{$training ->price_prefix}}</td>
              <td>
              oekdoed
              </td>
            </tr>
              
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection