@extends('layouts.admin')

@section('title', 'Редактирование записи на тренировку')

@section('content')

   
    <div class="row">
        <div class="col-md-6">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Редактирование заявки тренировки пользователя</h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Тип тренировки</label>
                            <select class="custom-select input" class="form-control" name="">
                                @foreach ($trening_type as $i=>$name)
                                    <option value="{{$i}}">{{$name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-label">
                                Корт                                
                            </div>
                            <div class="input">
                                {{$tactiviti->GetCort->title}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Ценна</label>
                            <input type="number" class="form-control input" value="1000">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Период</label>
                            <select class="custom-select input" class="form-control" name="">
                                <option>Первая половина</option>
                                <option>Вторая половина</option>
                                <option>Третья половина</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Статус</label>
                            <select class="custom-select input" class="form-control" name="">
                                
                                @foreach($status as $i=>$name)
                                <option value="{{$i}}" {{$tactiviti->status === $i?'checked':''}}>{{$name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Обновить</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Информация заявки тренировки</h3>
                </div>
                <div class="row">
                <div class="col-md-8 p-4">
                    <ul class="list-unstyled">
                        <li>
                            <b>Название тренировки:</b>
                             {{$tactiviti->trening_title}}</li>
                        <li>
                            <b>Тип тренировки:</b> 
                            {{$tactiviti->trening_type}}
                        </li>
                        <li>
                            <b>Метод тренировки:</b>
                            {{$tactiviti->TreningInfo->trening_method}}
                        </li>
                        <li>
                            <b>Дата заявки:</b>
                            {{$tactiviti->created_at->format('d.m.Y H:i:s')}}
                        </li>
                        <li>
                            <b>Пользователь:</b>
                            {{ $tactiviti->GetUser->firstname }} {{ $tactiviti->GetUser->lastname }}
                        </li>
                        <li>
                            <b>Контакты:</b>
                            <ul class="list-unstyled ml-3">
                                <li class="danger">Телефон: {{ $tactiviti->GetUser->phone }}</li>
                                <li>Почта: {{ $tactiviti->GetUser->email }}</li>
                            </ul>
                            
                        </li>
                        <li>
                            <b>Статус:</b>
                            {{$status[$tactiviti->status]}}
                        </li>
                        <li>
                            <b>Стоимость:</b>
                            {{$tactiviti->price}} &#8381; 
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection
