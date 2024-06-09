<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_category()
    
    {
        $data=Category::all();
        return view('admin.category',compact('data'));
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
        return redirect()->back()->with('message','Category Successfully added!');
    }
    public function delete_category($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Category Successfully deleted!');

    }

    public function view_product()
    {
        $category=category::all();
        return view('admin.product',compact('category'));

    }
    public function add_product (Request $request)
    {
        $product=new product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->discount_price;
        $product->category=$request->category;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move('product', $imagename);
            $product->image = $imagename;
            $product->save();
        }


        return redirect()->back()->with('message','Category Successfully added!');

        
       




    }
    
}
