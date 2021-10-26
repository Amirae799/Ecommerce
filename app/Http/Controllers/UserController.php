<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
  
    use Notifiable;
    public function login(Request $request){
      $user=User::where(["email"=>$request->email])->first();
  
      if(!$user || Hash::check($request->password,
              $user->password)){
          return "username or password is not  matched";
      }
      else{
          $request->session()->put('user',$user);
          return redirect('/');
      }
      }
      public function register(){
        return view('register');
      }
      public function store(Request $request){
       
        //insert  table offers in database
        $user =User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
          

        ]);
             //  $user->attachRole('user');   
            return redirect('/');

    }
  

  
      
      
}
