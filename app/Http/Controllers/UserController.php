<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth;  


class UserController extends Controller
{
    public function user(){
        $data['getRecord'] = User::getRecordUser();
        return view('backend.user.list', $data);
    }
    public function add_user(Request $request){
        return view('backend.user.add');
    }
    public function insert_user(Request $request){
        // dd($request->all());
        request()->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required'
        ]);
        $save           = new User;
        $save->name     = trim($request->name);
        $save->email    = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->status   = trim($request->status);
        $save->save(); 
        return redirect('panel/user/list')->with('success', "User Successfully created.");
    }
    public function edit_user($id){
        $data['getRecord'] = User::getSingle($id);
        return view('backend.user.edit', $data);
    }
    public function update_user($id, Request $request){
        request()->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email,'.$id
        ]);
        $save           = User::getSingle($id);
        $save->name     = trim($request->name);
        $save->email    = trim($request->email);
        if(!empty($request->password)){
            $save->password = Hash::make($request->password);
        }
        $save->status   = trim($request->status);
        $save->save(); 
        return redirect('panel/user/list')->with('success', "User Successfully updated.");
    }
    public function delete_user($id){
        $save = User::getSingle($id);
        $save->is_delete = 1;
        $save->save();
        return redirect()->back()->with('success', 'User successfully deleted.');
    }
}
