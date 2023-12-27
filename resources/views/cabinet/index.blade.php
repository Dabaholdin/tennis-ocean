@extends('layouts.base')

@section('title', 'Личный кабинет')

@section('content')

    <section class="account-cabinet mt-40 mb-170">
        <div class="container">
            <h1 class="text-center">Личный кабинет</h1>
            <div class="row mb-40">
                <ul class="nav nav-pills" id="myTab" role="tablist">
                    <li class="nav-item mr-20" role="presentation">
                        <button class="tab_btn active_tab" data-func="tab" data-target="basic">Основное</button>
                    </li>
                    <li class="nav-item mr-20" role="presentation">
                        <button class="tab_btn " data-func="tab" data-target="training">Тренировки</button>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="tab-content">
                    <div class="mb-4 p-30 bg-white basic" role="tabpanel" aria-labelledby="tofline-tab">
                        <div class="row">
                            <div class="col-sm-2 blue-border circle cab-img me-auto p-0">
                                <img width="159" height="89" src="{{ @asset('storage/' . auth()->user()->avatar) }}"
                                    class="rounded-circle">
                            </div>
                            <div class="col-sm-10 p-0">
                                <div class="row ">
                                    <div class="col-sm-11 title-acc mb-3">
                                        <div class="row">
                                            <div class="col-sm-9 me-auto">
                                                <span class="name_user_text">{{ auth()->user()->firstname }}
                                                    {{ auth()->user()->lastname }}</span>
                                            </div>
                                            <div class="col-sm-3 w-auto">
                                                <span class="text_parent_name">Взрослый</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1 w-auto">
                                        <div class="add_button_wrapper">
                                            <img src="https://tennis-ocean.ru/wp-content/themes/tennisocean/assets/img/icons/add.png"
                                                alt="">
                                        </div>
                                    </div>

                                    <div class="col-sm-4 mb-2"><b>Возраст:</b> 35 лет</div>
                                    <div class="col-sm-3 mb-2"><b>Дата регистрации:</b>
                                        {{ auth()->user()->created_at->format('d.m.Y') }}</div>
                                    <div class="col-sm-3 mb-2">{{--<b>Активность:</b>--}}</div>
                                    <div class="col-sm-2 mb-2">{{--<b>Скидка</b> 10%--}}</div>

                                    <div class="col-sm-4 mb-2"><b>Эл. почта:</b> {{ auth()->user()->email }}</div>
                                    <div class="col-sm-3 mb-2"><b>Кол-во тренировок:</b> 0</div>
                                    <div class="col-sm-3 mb-2">{{--<b>Постоянная скидка:</b> 5%--}}</div>
                                    <div class="col-sm-2 mb-2"></div>

                                    <div class="col-sm-4 mb-2"><b>Телефон:</b> +7 (901) 369-01-70</div>
                                    <div class="col-sm-3 mb-2">{{--<b>Пройдено обучений:</b> 5--}}</div>
                                    <div class="col-sm-3 mb-2"></div>
                                    <div class="col-sm-2 mb-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 training" style="display: none" role="tabpanel" aria-labelledby="tofline-tab">
                        <div class="row bgw p-4">
                            <div class="col-sm-4 p-0">
                                <div id="calendar"></div>
                            </div>
                            <div class="col-8">
                                <div class="row mb-4">
                                    <div class="col-sm-3">
                                        <input type="text" class="input w-100" value="За всё время">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="input w-100" value="{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}">
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                                <div class="row">
                                    <div class="todo-list pe-4">
                                        @foreach ($trenings as $trening)
                                            <div class="row p-2 blue-border mb-2 todo-item">
                                                <div class="col-10 p-0">
                                                    <div class="row">
                                                        <span class="trening-title">
                                                            {{$trening->trening_type}}
                                                        </span>
                                                    </div>
                                                    <div class="row">
                                                        <span>
                                                            {{$trening->date_start->translatedFormat('l, d F')}}<br>
                                                            
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-2 p-0">
                                                    <div class="status-wrapper h-100 d-flex align-items-center justify-content-end">
                                                        <p class="p-0 m-0 fs-14 bold status-{{$trening->status}}">
                                                            @if ($trening->status =='new')
                                                                Новый
                                                            @elseif($trening->status =='not-confirmed')
                                                                Не подтверждено
                                                            @elseif($trening->status =='confirmed')
                                                                Подтверждено
                                                            @elseif($trening->status =='await-pay')
                                                                Ожидает оплаты
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                            
                                                
                                                {{-- <div class="row p-2 blue-border mb-2 todo-item">
                                                    <div class="col-10 p-0">
                                                        <div class="row">
                                                            <span class="trening-title">
                                                                Групповая тренировка
                                                            </span>
                                                        </div>
                                                        <div class="row">
                                                            <span>
                                                                Суббота, 30 апреля, 15:50. Tennis Siti (Крокус сити)
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 p-0">
                                                        <div class="status-wrapper h-100 d-flex align-items-center justify-content-end">
                                                            <p class="p-0 m-0 fs-14 bold status-await-pay">
                                                                Ожидает оплаты
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row p-2 blue-border mb-2 todo-item">
                                                    <div class="col-10 p-0">
                                                        <div class="row">
                                                            <span class="trening-title">
                                                                Групповая тренировка
                                                            </span>
                                                        </div>
                                                        <div class="row">
                                                            <span>
                                                                Суббота, 30 апреля, 15:50. Tennis Siti (Крокус сити)
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 p-0">
                                                        <div class="status-wrapper h-100 d-flex align-items-center justify-content-end">
                                                            <p class="p-0 m-0 fs-14 bold status-not-confirmed">
                                                                Не подтверждено
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row p-2 blue-border mb-2 todo-item">
                                                    <div class="col-10 p-0">
                                                        <div class="row">
                                                            <span class="trening-title">
                                                                Групповая тренировка
                                                            </span>
                                                        </div>
                                                        <div class="row">
                                                            <span>
                                                                Суббота, 30 апреля, 15:50. Tennis Siti (Крокус сити)
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 p-0">
                                                        <div class="status-wrapper h-100 d-flex align-items-center justify-content-end">
                                                            <p class="p-0 m-0 fs-14 bold status-confirmed">
                                                                Подтверждено
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row p-2 blue-border mb-2 todo-item">
                                                    <div class="col-10 p-0">
                                                        <div class="row">
                                                            <span class="trening-title">
                                                                Групповая тренировка
                                                            </span>
                                                        </div>
                                                        <div class="row">
                                                            <span>
                                                                Суббота, 30 апреля, 15:50. Tennis Siti (Крокус сити)
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 p-0">
                                                        <div class="status-wrapper h-100 d-flex align-items-center justify-content-end">
                                                            <p class="p-0 m-0 fs-14 bold status-new">
                                                                Новый
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/assets/js/air-datepicker.js"></script>
<script>
    let today = new Date();
    let dates = '{!!$trenigs_activiti!!}';
    // let dates = null;
    dates = (dates)?JSON.parse(dates):false;
    console.log(today)
new AirDatepicker('#calendar', {
    // Handle render process
    // Select 10th day of the month
    // selectedDates: new Date(today.getFullYear(), today.getMonth(), today.getDay()),
    toggleSelected:false,
        onRenderCell({date, cellType}) {
            for(let i=0;i<dates.length;i++){
                    //console.log(date.getMonth()+1)
                    if(date.getMonth()+1 == dates[i]['month'] && date.getDate() == dates[i]['day']){
                        console.log(i)
                    return{
                        classes:dates[i]['status']
                    }
                }
                
            }
        }
    
});
</script>
@endsection
