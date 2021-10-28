<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Product;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(Admin $admin){
      return view('admin.dashboard');
  }
  public function createProduct(){
    return view('admin.createProduct');
  }
  public function storeProduct(Request $request){
    $request->validate([
      'name' => 'required',
      'price' => 'required',
      'description' => 'required',
  ]);

   $products= Product::create([
     
      'name' => $request->name,
      'description' =>$request->description,
      'category' => $request->category,
      'price' =>  $request->price,
      'gallery' => $request->gallery,
  ]);
  return view('admin.allproduct');
  }
  public function editProduct($id){
  $products=Product::find($id);
if(!$products)
return redirect()->back();
  $products=Product::select('name','description','category','price','gallery')->find($id);
  
  return view('admin.productedit',compact('products'));

  }
  //////////////////////////////////////////////////////UPDATE PRODUCT BY ADMIN//////////////////////////////////////////////////
  public function updateProduct(Request $request,Product $products,$id){
 
    $request->validate([
      'name' => 'required',
      'price' => 'required',
      'detail' => 'required',
  ]);

   $products->update($request->all());

      return redirect()->route('admin.allproduct')
      ->with('success','Product updated successfully');
    
      }
  ///////////////////////////////////////////////delete product by user////////////////////////////////
  public function delete($product_id)
    {
        //check if offer id exists

        $product = Product::find($product_id);   // Offer::where('id','$offer_id') -> first()
        $product->delete();
        return redirect()
            ->route('admin.allproducts')
            ->with(['success' => ('product deleted successfully')]);

    }
    //////////////////////admin modify users///////////////////////
    ///////////////////////////////////////////////////show all users/////////////////////////////////////////////////////
    public function allusers(){
      $users = User::all(); 
      // return collection

  return view('admin/allusers', compact('users'));
}
public function createUser(){
  return view('admin.createUser');
}
public function storeUser(Request $request){
  $request->validate([
    'name' => 'required',
    'email' => 'required',
    'password' => 'required',
]);
  $users=User::create([
    'name' => $request->name,
    'email' =>   $request->email,
    'password' => $request->password,
]);
return redirect('admin/allusers');
}
public function deleteuser($id){
 //check if offer id exists

 $user = User::find($id);   // Offer::where('id','$offer_id') -> first();
 $user->delete();
 return redirect('admin/allusers')->with(['success' => ('user deleted successfully')]);
   
    
}
public function edituser($id){
  $users=User::all()->find($id);
  return view('admin.updateUser',compact('users'));
}
public function Updateuser(User $user,Request $request,$id){
  $request->validate([
    'name' => 'required',
    'email' => 'required',
    'roles' => 'required'
  ]);

           $user = User::find($id);
           $requestData = $request->except('password');
           $user->update($requestData);
           $user->syncRoles($request->roles);

           return redirect('admin/allusers');
}
/////////////////////////////////////manger modify admins///////////////////
public function alladmins(){
  $admins = Admin::all(); 
  // return collection

return view('admin/alladmins', compact('admins'));
}
    }

