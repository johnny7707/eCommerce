<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{
    public function StoreNewsletter(Request $request)
    {
    	$validateData = $request->validate([
    		'email' => 'required|unique:newsletter|max:100',
    	]) ;

    	$data = array();
    	$data['email'] = $request->email;
    	DB::table('newsletter')->insert($data);

    	$notification = array(
                    'messege'=>'Thanks for your Subcribing', 'alert-type'=>'success');

            return Redirect()->back()->with($notification);
    }

    
}
