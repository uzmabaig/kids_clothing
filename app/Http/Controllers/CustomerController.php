<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function customer(){
        $customers = Product::with('productvariant')->get();
       return view('customers.customer',['data' => $customers]);
     
      }

      public function single($id){
        $customers = Product::find($id);
        return view('customers.get',['data' => $customers]);
      }

    public function order(Request $request){
    if($request->method() === 'POST'){
     
      $customers = Customer::create([
        'product_id'=>$request->product_id,
        'name'=>$request->name,
        'gender'=> $request->gender,
        'size'=> $request->size,
        'price'=>$request->price,
      ]);
    
      
      if($customers){
        return redirect()->route('customers.customer')->with('success','you order has been placed!');
        
      }else{
        return back()->with('error','sorry!please shop your order again');
      }
     }
    // $customers = Customer::get();
    // return view('customers.customer',['data' => $customers]); 
    
  }


};

