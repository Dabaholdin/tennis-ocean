<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserChildren;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChildrenController extends Controller
{
   
    public function index()
    {
        //
    }

 
    public function create(Request $request)
    {
        $path = '';
        if($request->hasFile('children_add_img')){
            $file = $request->file('children_add_img');
            $path = $file->store('images/children');
        };

        $child = UserChildren::Create([
            'user_id' => $request->uid,
            'firstname' => $request->add_children_first_name,
            'lastname' => $request->add_children_last_name,
            'gender' => $request->add_children_gender,
            'birthdate' => $request->add_children_birth_date,
            'avatar' => $path,
        ]);
    
    if($child){
        return response()->json([
            'status'=>200,
            'children_add'=>true
        ]);
    }
        
    }

   
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
