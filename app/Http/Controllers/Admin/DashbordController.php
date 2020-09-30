<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DashbordController extends Controller
{
    //
    public function registered()
    {
       $user =User::all();
       return view('admin.register')->with('user',$user);
    }

    public function register_edit($id){
    	//return "hiii";
    	$user =User::findOrfail($id);
    	return view('admin.register-edit')->with('user',$user);

    }

    public function register_update(Request $request,$id )
    {
    	$user=User::find($id);
    	$user->name =$request->input('username');
    	$user->user_type =$request->usertype;
    	$user->update();

    	return redirect('/role-register')->with('status','Succesfully Updated User Role');
    }


    public function register_delete($id){
    	$users = User::findOrfail($id);
    	$users->delete();

    	return redirect('/role-register')->with('status','User data is deleted');
    }

}
