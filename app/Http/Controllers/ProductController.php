<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\order;
use Session;

use Illuminate\Support\Facades\DB;
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

    public function cartlist(){
      $user_id = Session::get('user')['id'];
      $product = DB::table('cart')
      ->join('products','cart.product_id','products.id')
      ->where('cart.user_id',$user_id)
      ->select('products.*','cart.id as card_id')
      ->get();
      return view('cartlist',['product'=> $product]);
    }
    public function removecart($id){
        Cart::destroy($id);
        return redirect('/cartlist');  
        
    }
    public function ordernow(){
        $user_id = Session::get('user')['id'];
        $total = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$user_id)
        ->sum('products.price');
        return view('order',['total'=> $total]);
    }
    public function orderplace(Request $req){
    $user_id = Session::get('user')['id'];
    $allcart = Cart::where('user_id',$user_id)->get();
    foreach($allcart as $cart){
        $order = new Order;
        $order->product_id = $cart['product_id'];
        $order->user_id = $cart['user_id'];
        $order->status ="Pending";
        $order->payment_method = $req->payment;
        $order->user_name = $req->user_name;
        $order->payment_status ="Pending";
        $order->address =$req->address;
        $order->save();
        Cart::where('user_id',$user_id)->delete();
    }
        $req->input();
        return redirect('/');
    }

    public function myorders(){
        $user_id = Session::get('user')['id'];
         $order = DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$user_id)
        ->get();
        return view('myorder',['order'=> $order]);  
      }
}