<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class ProductController extends Controller
{
    //
    public function index(){
      $products=Product::all();
      return view('product',['products'=>$products]);
  }
    public function detail($id){
      $data= Product::find($id);
      return view('detials',['product'=>$data]);
  }
  public function search(Request $request){
    $data=Product::where('name','like','%'.$request->input('query').'%')->get();
    return view('search',['products'=>$data]);
  }
  //////////////////
  public function addToCart(Request $req){
    if($req->session()->has('user')){
$cart=new Cart();
$cart->user_id=$req->session()->get('user')['id'];
$cart->product_id=$req->product_id;
$cart->save();


return redirect('/');
    }
    else{
        return redirect('/login');
    }
}
static function cartItem(){
    $userId=Session::get('user')['id'];
    return Cart::where('user_id',$userId)->count();
}
public function cartList(){
    $userId=Session::get('user')['id'];
    $products=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();
    return view('cartlist',['products'=>$products]);
}
public function removecart($id){
    Cart::destroy($id);
    return redirect('/cartlist');

}
public function OrderNow(){
    $userId=Session::get('user')['id'];
    $total= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');
    return view('ordernow',['total'=>$total]);

}
public function Orderplace(Request $request){
$userId=Session::get('user')['id'];
$allcart=Cart::where('user_id',$userId)->get();
    foreach ($allcart as $cart) {
        $order=new Order();
        $order->product_id=$cart['product_id'];
        $order->user_id=$cart['user_id'];
        $order->address=$request->address;
        $order->status="pending";
        $order->payment_method=$request->payment;
        $order->payment_status="pending";
        $order->save();
}
    Cart::where('user_id',$userId)->delete();
    return redirect('/');
}
public function myOrder(){
    $userId=Session::get('user')['id'];
    $orders= DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
    ->get();
    return view('MyOrder',['orders'=>$orders]);
}
}
