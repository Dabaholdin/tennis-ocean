@extends('layouts.admin')

@section('title','Тренировки')

@section('content')
<div class="row mb-3">
  <a href="{{route('admin.create.trening')}}" class="button txt-bold link-td-none">Добавить тренировку</a>
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
            <th scope="col">Бесплатный контент</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($trenings as $trening)
            <tr>
              @if ($trening ->trening_img !='')
                  <td><img class="img-circle elevation-2" width="35px" height="35px" src="{{@asset("storage/" . $trening ->trening_img)}}" alt="trening_img".{{$trening->id}}></td>
              @else
              <td>Фото не установлено</td>
              @endif
              <td>{{$trening ->title}}</td>
              <td>{{$trening ->category_id}}</td>
              <td>{{$trening ->title_description}}</td>
              <td>{{$trening ->price_prefix}} {{$trening ->price}}₽</td>
              <td>
              oekdoed
              </td>
              <td>
                <form action="{{route('admin.destroy.trening' , $trening->id)}}" method="post">
                  @csrf
                  @method('delete')
                <input type="submit" class="delete_button" value="X">
                </form>  
              </td>
            </tr>
              
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection