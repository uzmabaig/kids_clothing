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


  public function add($id)
  {
    $order = Product::with('productvariant')->find($id);

    $order = Order::create([
        'product_id' =>$order->productvariant->product_id,
        'name' => $order->name,
        'gender' => $order->productvariant->gender,
        'size' => $order->productvariant->size,
        'price' =>  $order->price,
      ]);


      if ($order) {
        return redirect()->route('order')->with('success', 'you order has been placed!');
      } else {
        return back()->with('error', 'sorry!please shop your order again');
      }


    $order = Order::get();
    return view('orders.order');
  }
};
