<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Category;
use DB;

class CategoryController extends Controller
{
    public function __construct()
    {    	
        $this->middleware('auth:admin');
    }

    public function category()
    {
    	// echo "Hi! Rajiva";
	//	return view('admin.category.category');

        $category = categories::all();

        return view('admin.category.category',compact('category'));
    }

    public function storecategory(Request $request)
    {

    	//   $validateData = $request->validate(['category_name' => 'required|unique:categories|max:255']);

	    //	$data = array();
	    //	$data['category_name']=$request->category_name;
	    //	DB::Table('categories')->insert($data);

	    	$category = new Category();
	    	$category->category_name = $request->category_name;
	    	$category=save();

    	    $notification=array(
                       'messege'=>'Category added successfully', 'alert-type'=>'success');
                    return Redirect()->back()->with($notification);

    }

    


}
