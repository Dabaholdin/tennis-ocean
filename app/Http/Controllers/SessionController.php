<?php

namespace App\Http\Controllers;

use Response;
use Carbon\Carbon;
use App\Models\User;
use App\Mail\regMail;
use App\Models\Training;
use Spatie\Backtrace\File;
use App\Models\UserChildren;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SessionController extends Controller
{
    public function index()
    {
        
        $trenings = Auth()->user()->Trenings;
        $user = Auth()->user();

        $trening_info =[];
        $trenigs_activiti=[];
        foreach($trenings as $trening){
            
            $trenigs_activiti[]=[
                'day'=> $trening->date_start->format('d'),
                'month'=> $trening->date_start->format('m'),
                'year'=> $trening->date_start->format('Y'),
                'status'=> $trening->status,
            ];
            
        };
        $trenigs_activiti = json_encode($trenigs_activiti);
        
        //dd($trenigs_activiti);
    //dd($mytr[0]->date_start->format('Y'));
       return view('cabinet.index',compact('trenigs_activiti' , 'trenings','user'));
       
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
            'role_id'=> 2,
            'email'=> $request->email,
            'password'=> $request->password,
            'verivi_code'=> $verivicodegen,
        ]);
        
        $send_mail = Mail::to($request->email)->send(new regMail($verivicodegen));
        return response()->json([
            'mail'=>$send_mail,
            'user'=>$user
        ]);
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
            'error'=>0,
            'auth'=>Auth::attempt($formFields)
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
        $gender = $user->gender;
        $uid = $user->id;
        $birthdate = $user->birthdate;
        return view('cabinet.setings', compact('uid','firstname','lastname','userchilds','gender','birthdate','user'));
    }

    
    public function edit(Request $request, $id)
    {
        
        
    }

    
    public function update(Request $request, string $id)
    {
        $path = '';
        $user = User::find($id);
        if($request->hasFile('user_image')){
            if($user->avatar !=''){
                Storage::delete($user->avatar);
            }
            $user->avatar = $path ;
        }
        if($request->hasFile('user_image')){
            $file = $request->file('user_image');
            $path = $file->store('images/user');
        };
        
        
        $user->update([
            'firstname'=> $request->firstname,
            'lastname'=> $request->lastname,
            'email'=> ($request->email == $user->email)?$user->email:$request->email,
            'phone'=> $request->phone,
            'birthdate'=> $request->birthdate,
            'gender'=> $request->gender,
            'avatar'=> $path,
        ]);

        
        
        
        if($user){
            return response()->json([
                'status'=>200,
                'changed'=>true,
                'user'=>$user,
                'data'=>[
                    'ID'=>$request->id,
                    'firstname' => $request->firstname ,
                    'lastname' => $request->lastname,
                    'birthdate' => $request->birthdate,
                    'gender' => $request->gender ,
                    'email' => $request->email,
                    'phone' => $request->phone,
                ]
            ]);
        }
    }

    public function changepassword(ChangePasswordRequest $request, string $id){
        if(Auth::check()){
            $user = User::find($id);
            $data = $request->validated();
            $user->update([
                'password'=>$request->new_password_confirm,
            ]);
            return response()->json([
                'link'=>Route('login.logout')
            ]);
            }
        
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
                'verivied_code'=>false,
                'user_id'=>$user_id,
                'request'=>$request
            ]);
        }
    }

    





}
