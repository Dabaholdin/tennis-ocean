<?php

namespace App\Http\Controllers;

use App\Models\Cort;
use App\Models\Trening;
use Illuminate\Http\Request;
use App\Models\TreningActiviti;

class TreningActivitiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.trening-activiti.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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
        
        return view('admin.trening-activiti.edit',compact('id'));
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
