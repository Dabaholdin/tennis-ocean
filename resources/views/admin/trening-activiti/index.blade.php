@extends('layouts.admin')

@section('title', 'Записи на тренировку')

@section('content')
   
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mr-3">Записи на тренировку</h3>
                    <a href="{{ route('admin.create.tactiviti') }}" class="button txt-bold link-td-none p-2">Добавить тренировку</a>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Название</th>
                                <th scope="col">Тип тренировки</th>
                                <th scope="col">Пользователь</th>
                                <th scope="col">Корт</th>
                                <th scope="col">Ценна</th>
                                <th scope="col">Дата начала</th>
                                <th scope="col">Период</th>
                                <th scope="col">Статус</th>
                                <th scope="col">Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trening_activitis as $trening_activiti)
                            <tr>
                                <td>{{ $trening_activiti->trening_title }}</td>
                                <td>{{ $trening_activiti->trening_type }}</td>
                                <td>{{ $trening_activiti->GetUser->firstname }} {{ $trening_activiti->GetUser->lastname }}
                                </td>
                                <td>{{ $trening_activiti->cort_name }}</td>
                                <td>{{ $trening_activiti->price }}</td>
                                <td>{{ $trening_activiti->date_start->format('d.m.Y') }}</td>
                                <td>{{ $trening_activiti->day_period }}</td>
                                <td>{{ $status[$trening_activiti->status] }}</td>
                                <td>
                                    <a href="{{route('admin.edit.tactiviti',$trening_activiti->id)}}">
                                        <i class="fa-regular fa-pen-to-square" style="color: #0f67ff;"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

@endsection
