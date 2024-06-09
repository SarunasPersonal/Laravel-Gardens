<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use LDAP\Result;

class AdminController extends Controller
{
    public function view_category()
    {
        return view('admin.category');
    }
    public function add_category(Request $request)
    //add category function
    {
        $data=new category;
        $data->category_name=$request->category;

        $data->save();
        return redirect()->back();

    }
}
