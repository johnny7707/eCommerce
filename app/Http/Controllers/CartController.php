<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;

class CartController extends Controller
{
    public function addCart($id)
    {
    	// $userid = Auth::id();

    	$product = DB::table('products')->where('id',$id)->first();

    	$data = array();

    	if ($product->discount_price == NULL) {
    		$data['id'] = $product->id;
    		$data['name'] = $product->product_name;
    		$data['qty'] = 1;
    		$data['price'] = $product->selling_price;
    		$data['weight'] = 1;
    		$data['options']['color'] = $product->product_color;
    		$data['options']['size'] = $product->product_size;
    		$data['options']['image'] = $product->image_one;

    		Cart::add($data);

    		return \Response::json(['success' => 'Successfully added to your Cart']);

    	}else{
    		$data['id'] = $product->id;
    		$data['name'] = $product->product_name;
    		$data['qty'] = 1;
    		$data['price'] = $product->discount_price;
    		$data['weight'] = 1;
    		$data['options']['color'] = $product->product_color;
    		$data['options']['size'] = $product->product_size;
    		$data['options']['image'] = $product->image_one;

    		Cart::add($data);

    		return \Response::json(['success' => 'Successfully Added to your Cart']);
    	}
    	
    }

    public function check()
    	{
    		$content = Cart::content();
    		return response()->json($content);

    	}


    public function ShowCart(){

    	$cart = Cart::content();

    	return view('pages.cart',compact('cart'));
    }

    public function RemoveCart($rowId){

    	$remove = Cart::remove($rowId);

    	$notification=array(
                        'messege'=>'Your Product has removed from Cart',
                        'alert-type'=>'success'
                         );
                       return Redirect()->back()->with($notification);
    }

    public function UpdateCart(Request $request){

    	$rowId = $request->productid;
    	$qty = $request->qty;

    	Cart::update($rowId, $qty);

    	$notification=array(
                        'messege'=>'Your Product Quantity has updated on your Cart',
                        'alert-type'=>'success'
                         );
        return Redirect()->back()->with($notification);
    }

}
