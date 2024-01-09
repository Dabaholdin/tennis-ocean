<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $albums = Album::query()->get()->whereIn('id',[1,2,3,4,5]);
        return view('gallery.index',compact('albums'));
    }

    public function show($album ='all'){
        if($album === 'all'){
            $albums = Album::query()->get()->all();
        }else{
            $albums = Album::query()->get()->where('id','=',$album);
        }
        //dd($images);
        return view('gallery.show',compact('albums'));
    }
}
