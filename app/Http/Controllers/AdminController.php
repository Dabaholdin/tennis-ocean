<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trening;
use Illuminate\Http\Request;
use App\Models\TreningActiviti;
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

    public function trenings(Trening $trenings){
        $trenings = $trenings->query()->get()->all();
        return view('admin.trenings.index', compact('trenings'));
    }
    
    public function corts(){
        return view('admin.corts.index');
    }
    public function trening_activiti(TreningActiviti $trening_sctiviti){
        $status = [
            'new' =>'Новый',
            'not-confirmed'=>'Не подтверждён',
            'confirmed'=>'Подтверждён',
            'await-pay'=>'Ожидает оплаты'
        ];
        $trening_activitis = $trening_sctiviti->query()->get()->all();
        return view('admin.trening-activiti.index',compact('trening_activitis','status'));
    }

}
