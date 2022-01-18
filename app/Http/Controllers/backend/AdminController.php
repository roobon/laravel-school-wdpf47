<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function logout(){
    	Auth::logout();
    	//return redirect('login');
    	return Redirect()->route('login');
    }
}
