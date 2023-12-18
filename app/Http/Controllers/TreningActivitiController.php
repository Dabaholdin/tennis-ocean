<?php

namespace App\Http\Controllers;

use App\Models\Cort;
use App\Models\Treining;
use Illuminate\Http\Request;
use App\Models\TreiningActiviti;

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
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trening = Treining::query()->get(['id','title','price','trening_type'])->where('id','=',$request->trening_id)->first();
        $cort = Cort::query()->get()->where('id','=',1)->first();
        // dd($trening->trening_type);
        $new_activiti = TreiningActiviti::query()->create([
            'treining_id' => $trening->id,
            'treining_title' => $trening->title,
            'treining_method' => $trening->trening_type,
            'user_id' => $request->user_id,
            'cort_id' => 1,
            'cort_name' => $cort->title,
            'price' => $trening->price,
            'date_start' => $request->chosed_date,
            'day_period' => 'Первая половина',
            'status' => 'new'
        ]);
       return $new_activiti;
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
    public function edit(string $id)
    {
        //
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
