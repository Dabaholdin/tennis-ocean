@extends('layouts.admin')

@section('title', 'Редактирование записи на тренировку')

@section('content')

    {{ $id }}
    <div class="row">
        <div class="col-md-6">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Редактирование тренировки пользователя</h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="tname">Название</label>
                            <input type="text" class="form-control input" id="tname" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Тип тренировки</label>
                            <select class="custom-select input" class="form-control" name="">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-label">
                                Пользователь
                            </div>
                            <div class="input">
                                Бахолдин Дмитрий
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label">
                                Корт                                
                            </div>
                            <div class="input">
                                Новоделкино
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Ценна</label>
                            <input type="number" class="form-control input" value="1000">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Дата начала</label>
                            <input type="date" class="form-control input" value="2023-12-21">
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
                                <option value="new">Новый</option>
                                <option value="not-confirmed">Не подтверждён</option>
                                <option value="confirmed">Подтверждён</option>
                                <option value="await-pay">Ожидает оплаты</option>
                            </select>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
