<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserChildren;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SessionController extends Controller
{
   
    public function index()
    { 
       
       return view('cabinet.index');
       
    }

    public function create(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'firstname'=> ['required','string','max:50'], 
            'lastname' => ['required','string','max:50'],
            'email'    => ['required','string','max:50','email','unique:users'],
            'password'  => ['required','string','max:50','min:6'],
            'cpassword' =>['required','string','max:60','min:6','same:password']
        ],[
            'firstname.required'=>'Имя обязательно',
            'lastname.required'=>'Фамилия обязательно',

            'email.unique'=>'Пользователь с таким Email существует',
            'email.required'=>'Пользователь с таким Email существует',

            'password.required'=> 'Поле пароль обязательно',
            'password.min'=> 'Поле пароль меньше 6 симолов',


            'cpassword.same'=> 'Пароль не совпадает',
            'cpassword.min'=> 'Поле повтор пароля меньше 6 симолов',
            'cpassword.required'=> 'Подтверждение пароля обязательно к заполнению',
        ]);
        
        
        if($validated->fails()){
            return response()->json([
                'status'=>400,
                'messages'=> $validated->getMessageBag(),
            ]);
        }else{
        $verivicodegen = random_int(100000, 999999);
        $user = User::query()->create([
            'firstname'=> $request->firstname,
            'lastname' => $request->lastname,
            'role_id'=>1,
            'email'=> $request->email,
            'password'=> $request->password,
            'verivi_code'=> $verivicodegen,
        ]);
        return $user;
//        Mail::to($request->email)->send(new regMail());
//        return redirect(Route('home.index'));
        }
    }

    public function login(Request $request){
        $formFields = $request->only(['email','password']);
        $uid = false;
        if(Auth::attempt($formFields)){
            $uid = Auth::user()->id;
            if(Auth::user()->verivied){
                return response()->json([
                    'status'=>200,
                    'link'=> route('home.index'),
                    'verivied'=>true
                ]);
            }
            else{ 
                Auth::logout();
            return response()->json([
                'status'=>400,
                'verivied'=>false,
                'uid' => $uid,
            ]);
            }

         
        }else{
         return response()->json([
            'status'=>400,
            'error'=>0
         ]);
         }
         
     }

    public function logout(){
        Auth::logout();
        return redirect(Route('home.index'));
    }
   

    

    public function show(User $auth)
    {   
        
        //dd(Storage::allFiles());
        $user = auth()->user();
        $userchilds = auth()->user()->childrens;
      
        $firstname = $user->firstname;
        $lastname = $user->lastname;
        return view('cabinet.setings', compact('firstname','lastname','userchilds'));
    }

    
    public function edit(Request $request)
    {
        return $request;
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }

    public function activation(Request $request){
        $user_id = $request->user_id;
        $verivi_code = $request->verivi_code;
        $user = User::query()->get(['id','firstname','email','verivi_code','verivied'])->where('id',$user_id)->where('verivi_code',$verivi_code)->first();
        if($user != NULL){
            //$user = User::find($user_id);
             $user->update([
                'verivied' => true,
             ]);
             return response()->json([
                'status'=>200,
                'verivied_code'=>true
            ]);
        }else{ 
            return response()->json([
                'status'=>400,
                'verivied_code'=>false
            ]);
        }
    }
}
