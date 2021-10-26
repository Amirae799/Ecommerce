<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function getLogin()
    {
        return view('auth.admin.login');
    }

    public function postLogin(Request $req)
    {
        $this->validate($req, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $admin=Admin::where(['email'=> $req ->email])-> first();
        if( !$admin ||Hash::check($req->password,$admin->password)){
            return 'User Name or Password incorrect';
        }else{
            $req -> Session() -> put('admin', $admin);
            return response()->view('admin.dashboard');
        }
       // return $next($req);

    }
    public function allproducts(){
      $products = Product::select('id',
            'name',
            'description',
            'category' ,
            'gallery'
        )->limit(10)->get(); // return collection

        return view('admin.allproduct', compact('products'));
    }

}
