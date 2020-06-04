<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;


class WishlistController extends Controller
{
    public function addWishlist($id)
    {
    	$userid = Auth::id();

    	$check = DB::table('wishlists')->where('user_id',$userid)->where('product_id',$id)->first();

    	$data = array(
    		'user_id' => $userid,
    		'product_id' => $id,

    	);

    	if (Auth::Check()) {
    		if ($check) {
    			return \Response::json(['error' => 'Your Product already has in your Wishlist!']);
    			// $notification=array(
       //          'messege'=>'Already has in your Wishlist',
       //          'alert-type'=>'error'
       //           );
       //         return Redirect()->back()->with($notification);

    		}else{

    			DB::table('wishlists')->insert($data);

    			return \Response::json(['success' => 'Product already added to your wishlist!']);

    			// $notification=array(
       //          'messege'=>'Add to wishlist',
       //          'alert-type'=>'success'
       //           );
       //         return Redirect()->back()->with($notification);
    		}
    	}else{

    		return \Response::json(['error' => 'Login to your account first!']);
    		// $notification=array(
      //           'messege'=>'Please Login to your Account first.',
      //           'alert-type'=>'warning'
      //            );
      //          return Redirect()->back()->with($notification);
    	}

    }











}
