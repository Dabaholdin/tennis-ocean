<?php

namespace App\Http\Controllers;

use App\Models\Trening;
use Illuminate\Http\Request;
use App\Models\Trening_category;
use Illuminate\Support\Facades\Storage;

class TreningController extends Controller
{

    public function index()
    {
        $Trening_categorys = Trening_category::all();
        return view('trenings.index',compact('Trening_categorys'));
        
    }

    
    public function create()
    {
        return view('admin.trenings.create');
    }

   
    public function store(Request $request)
    {
        // if($request->hasFile('trening_img')){
        //     dd('glaswd');
        // };
        if($request->hasFile('trening_img')){
            $file = $request->file('trening_img');
            $path = $file->store('images/trenings');
        };
        $new_t = Trening::create([
            'category_id' => $request->trening_category,
            'title' => $request->trening_title,
            'title_description' =>$request->trening_description  ,
            'description' => $request->trening_description ,
            'trening_method' => $request->trening_method,
            'trening_type' => $request->trening_type,
            'trening_img' => $path,
            'price' => $request->trening_price ,
            'price_prefix' => $request->prefix_price,
            'free_type' => $request->free_content_type ,
            'free_description' => $request->free_content_description ,
            'free_video_url' => $request->url,
        ]);
        return redirect()->route('admin.trenings');
    }

    public function show( $category , $type)
    {
        $Trening_categorys = Trening_category::query()
        ->get()
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

    public function destroy(Trening $Trening)
    {

        Storage::delete($Trening->trening_img);
        $Trening->delete();
        return redirect()->route('admin.trenings');
    }
}