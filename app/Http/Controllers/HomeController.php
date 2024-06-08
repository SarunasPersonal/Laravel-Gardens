<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//auth was added to check if the user is authenticated or not
use Illuminate\Support\Facades\Auth;
//app model user was added to check the usertype of the user
use App\Models\User;

class HomeController extends Controller
{

    //adding the index function to redirect to the userpage
    public function index()
    {
        return view('home.userpage');
    }
    //it will check if the user is authenticated or not
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        //if user is admin then it will redirect to admin.home page
        if ($usertype=='1') {
            return view('admin.home');

        } 
        else 
        {
            return view('dashboard');
        }
    }
}
