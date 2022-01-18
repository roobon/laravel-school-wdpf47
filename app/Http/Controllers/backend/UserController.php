<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userView(){
    	$data['users'] = User::all();
    	return view('backend.users.index', $data);
    }

    public function userCreate(){
    	return view('backend.users.create');
    }

    public function userStore(Request $request){
    	$validated = $request->validate([
    		'name' => 'required|min:5',
    		'email'=> 'required|email|unique:users',
    		'password'=> 'required' 
    	]);

    	$user = new User;
    	$user->name = $request->name;
    	$user->userRole =	$request->role;
    	$user->email =	    $request->email;
    	$user->password =   bcrypt($request->password);
    	$user->save();

    	$info =  array(
    			'message'=> 'User added successfully',
    			'alert-type' => 'success'
    		); 
    	return redirect()->route('user_list')->with($info);
    }

    public function userEdit($id){
    		$data['user'] = User::find($id);
    	return view('backend.users.edit', $data);
    }

    public function userUpdate(Request $request, $id){
    		$user = User::find($id);
    	$user->name = $request->name;
    	$user->userRole =	$request->role;
    	$user->email =	    $request->email;
    	$user->password =   bcrypt($request->password);
    	$user->save();
    	return redirect()->route('user_list');
    }

    public function userDelete($id){
    		 User::destroy($id);
    		//$user->delete();

    		$info =  array(
    			'message'=> 'User deleted successfully',
    			'alert-type' => 'success'
    		) ;
    	return redirect()->route('user_list')->with($info);
    }
}
