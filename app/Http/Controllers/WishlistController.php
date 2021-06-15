<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
   public function addWishlist($id){

    $userid = Auth::id();
    $check = DB::table('wishlists')->where('user_id',$userid)->where('product_id',$id)->first();

    $data = array(
    'user_id' => $userid,
    'product_id' => $id,

    );

			  if (Auth::Check()) {
             
             if ($check) {
               return \Response::json(['error' => 'Product Already Has on your wishlist']);
              // return redirect()->back()->with(['message' => 'Product Already Has on your wishlist!', 'alert' => 'alert-danger']);
	 
             }else{
             	DB::table('wishlists')->insert($data);
               return \Response::json(['success' => 'Product Added on wishlist']);
               // return redirect()->back()->with(['message' => 'Product Added on wishlist!', 'alert' => 'alert-success']);

 
             }
             
			  	 
			  }else{
            return \Response::json(['error' => 'At first loing your account']);   
            // return redirect()->back()->with(['message' => 'At first loing your account!', 'alert' => 'alert-danger']);
			  } 

   }





}
