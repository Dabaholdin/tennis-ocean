<?php

namespace App\Http\Controllers;

use App\Models\Trening;
use Illuminate\Http\Request;
use App\Models\Trening_category;

class TreningController extends Controller
{

    public function index()
    {
        $Trening_categorys = Trening_category::all();
        return view('trenings.index',compact('Trening_categorys'));
        
    }

    
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        
    }

    public function show( $category , $type)
    {
        $Trening_categorys = Trening_category::query()->get()
        
        ->where('name',$category)->first();
        $trenings = Trening::query()->get()
        ->where('trening_method','=',$type)
        ->where('category_id','=',$Trening_categorys->id);
        return view('trenings.show', compact('category','type','trenings'));
    }

    public function edit(Role $role)
    {
        
    }

   
    public function update(Request $request, Role $role)
    {
        
    }

    public function destroy(Role $role)
    {
        
    }
}