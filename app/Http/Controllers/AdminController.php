<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin_data = Auth::user();
        return view('admin.index', compact('admin_data'));
    }

    public function users(){
        $users = User::query()->get()->all();
        return view('admin.users.index',compact('users'));
    }

    public function trenings(Training $trainings){
        $trainings = $trainings->query()->get()->all();
        return view('admin.trenings.index', compact('trainings'));
    }
    
    public function corts(){
        return view('admin.corts.index');
    }
    

}
