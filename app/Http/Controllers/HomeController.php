<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{

    //adding the index function to redirect to the userpage
    public function index()

    {
        //amount of products per page is 6
        $product=Product::paginate(3);
        //returning the userpage view all the products
        return view('home.userpage',compact('product'));
        //returning the userpage view all the products
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
            $product=Product::paginate(3);
            //returning the userpage view all the products
            return view('home.userpage',compact('product'));
            //returning the userpage view all the products
        }
    
    }
    public function product_details($id)
    {
        $product=Product::find($id);
        return view('home.product_details',compact('product'));
    }
}
