@extends('layouts.admin')

@section('title','Пользователи')

@section('content')
<div class="row mb-3">
  <a href="#" class="button txt-bold link-td-none">Добавить пользователя</a>
</div>
    
    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table class="table table-hover">

            <thead>
              <tr>
                <th>Аватар</th>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Пол</th>
                <th>Телефон</th>
                <th>Почта</th>
                <th>Роль</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
              <tr>
                @if ($user ->avatar !='')
                    <td><img class="img-circle elevation-2" width="35px" height="35px" src="{{@asset("storage/" . $user ->avatar)}}" alt="user_avatar".{{$user->id}}></td>
                @else
                <td>Фото не установлено</td>
                @endif
                <td><p>{{$user ->lastname}}</p></td>
                <td>{{$user ->firstname}}</td>
                <td>{{$user ->gender}}</td>
                <td>{{$user ->phone}}</td>
                <td>{{$user ->email}}</td>
                <td>{{$user ->role->name}}</td>
              </tr>
                
            @endforeach
          </tbody>
            </table>
        </div>
    </div>   
  </div>
@endsection