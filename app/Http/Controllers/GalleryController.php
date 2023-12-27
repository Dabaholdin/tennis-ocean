<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $albums = Album::query()->get()->whereIn('id',[1,2,3,4,5]);
        return view('gallery.index',compact('albums'));
    }

    public function show(){

    }
}
