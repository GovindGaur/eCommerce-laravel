<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Session;
class ProductController extends Controller
{
    public function index()
    {
        $data =  Product::all();
       return view('product',['product'=>$data]); 
    }

    public function detail($id)
    {
          $data =  Product::find($id);
          return view('detail',['product'=>$data]);  
    }
    public function search(Request $req)
    {
       $data = Product::where('name','like','%'.$req->input('query').'%')->get() ;
        return view('search',['product'=>$data]);
    }

    public function addToCart(Request $req){
       if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
           return redirect('/');
       }
       else
       {
           return redirect('/login');
       }
    }
    static public function cartItem()
    {
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id',$user_id)->count();
    }
}