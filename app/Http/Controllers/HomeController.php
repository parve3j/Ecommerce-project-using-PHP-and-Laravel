<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirects()
    {
        $usertype= Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.home');
        }
        else{
            return view('user.home');
        }
    }

    public function index()
    {
        if(Auth::id()){
            return redirect('redirects');
        }else{
            return view('user.home');
        }
    }
}
