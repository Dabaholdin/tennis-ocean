<?php

namespace App\Http\Controllers;

use App\Models\Cort;
use Illuminate\Http\Request;

class CortController extends Controller
{
    public function index(){
        $all_corts = Cort::query()->get()->all();
        
        return view('corts.index' ,compact('all_corts'));
    }
}
