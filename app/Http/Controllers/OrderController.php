<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function order()
  {
    $order = Product::with('productvariant')->get();
    return view('orders.order', ['data' => $order]);
  }

  public function single($id)
  {
    $order = Product::find($id);
    return view('orders.get', ['data' => $order]);
  }


  public function add(Request $request, $id)
  {

    if ($request->method() === 'GET') {



      $order = Order::create([
        'product_id' => optional($request->productvariant)->product_id,
        'name' => $request->name,
        'gender' => optional($request->productvariant)->gender,
        'size' => optional($request->productvariant)->size,
        'price' => $request->price,
      ]);


      if ($order) {
        return redirect()->route('orders.order')->with('success', 'you order has been placed!');
      } else {
        return back()->with('error', 'sorry!please shop your order again');
      }
    }
    echo "check post request";

    $order = Order::get();
    return view('orders.order', ['data' => $order]);
  }
};
