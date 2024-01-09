<?php

namespace App\Http\Controllers;

use App\Models\Cort;
use App\Models\Trening;
use Illuminate\Http\Request;
use App\Models\TreningActiviti;

class TreningActivitiController extends Controller
{
   public $status = [
    'new' =>'Новый',
    'not-confirmed'=>'Не подтверждён',
    'confirmed'=>'Подтверждён',
    'await-pay'=>'Ожидает оплаты'
    ];
    public $trening_type =[
        'group'=>'Групповая тренировка',
        'individual'=>'Индивидуальная',
    ];
    public function index()
    {
        //
    }

   
    public function create()
    {
        return view('admin.trening-activiti.create');
    }

    public function store(Request $request)
    {
        $trening = Trening::query()->get(['id','title','price','trening_type'])->where('id','=',$request->trening_id)->first();
        $cort = Cort::query()->get()->where('id','=',1)->first();
        
        $new_activiti = TreningActiviti::query()->create([
            'trening_id' => $trening->id,
            'trening_title' => $trening->title,
            'trening_type' => $trening->trening_type,
            'user_id' => $request->user_id,
            'cort_id' => 1,
            'cort_name' => $cort->title,
            'price' => $trening->price,
            'date_start' => $request->chosed_date,
            'day_period' => $request->interval,
            'status' => 'new'
        ]);
        if($new_activiti){
            return response()->json([
                'code'=>200,
                'reload'=>true
            ]);;
        }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TreningActiviti $trening_activiti ,string $id)
    {   
        $trening_type = $this->trening_type;
        $status = $this->status;
        $tactiviti = $trening_activiti::query()->get()->where('id','=',$id)->first();
        return view('admin.trening-activiti.edit',compact('id','tactiviti','status','trening_type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
