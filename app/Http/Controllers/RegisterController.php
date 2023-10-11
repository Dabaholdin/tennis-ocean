<?php

namespace App\Http\Controllers;

use App\Mail\regMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function add(Request $request){
        //dd($request);
        $validated = $request->validate([
            'firstname'=> ['required','string','max:50'], 
            'lastname' => ['required','string','max:50'],
            'email'    => ['required','string','max:50','email','unique:users'],
            'password'  => ['required','string','max:50','min:6']
        ]);
        $user = User::query()->create([
            'firstname'=> $validated['firstname'],
            'lastname' => $validated['lastname'],
            'role_id'=>1,
            'email'=> $validated['email'],
            'password'=> $validated['password']
        ]);
        Mail::to($validated['email'])->send(new regMail());
            return redirect(Route('home.index'));
    }
}
