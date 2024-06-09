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
    /**
     * Add a new category.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add_category(Request $request)
    {
        // Create a new instance of the category model
        $data = new category;
        
        // Set the category name from the request
        $data->category_name = $request->category;

        // Save the category to the database
        $data->save();

        // Redirect back to the previous page
        return redirect()->back();
    }
}
