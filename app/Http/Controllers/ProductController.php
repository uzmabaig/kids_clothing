<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function show()
  {
    $products = Product::get();
    return view('product.products', ['data' => $products]);
  }

  public function single($id)
  {
    $products = Product::find($id);
    return view('product.get', ['data' => $products]);
  }

  public function add(Request $request)
  {
    if ($request->method() === 'POST') {
      $products = $request->validate([
        'name' => 'required|unique:products',
        'price' => 'required|numeric',
        'gender' => 'required',
        'size' => 'required',

      ]);
      $products = Product::create([
        'name' => $request->name,
        'price' => $request->price,
      ]);
      $products->productvariant()->create([
        'gender' => $request->gender,
        'size' => $request->size,
      ]);

      if ($products) {
        return redirect()->route('products')->with('success', 'Product added successfully!');
      } else {
        return back()->with('error', 'Product not added!');
      }
    }
    $products = Product::get();
    return view('product.add');
  }

  public function update(Request $request, $id)
  {

    if ($request->method() === 'POST') {
      $products = $request->validate([
        'name' => 'required',
        'price' => 'required|numeric',
        'gender' => 'required',
        'size' => 'required',

      ]);

      $products = Product::where('id', $id)->update([
        'name' => $request->name,
        'price' => $request->price,
        'updated_at' => now()
      ]);
      $products = Product::find($id);
      $products->productvariant()->update([
        'gender' => $request->gender,
        'size' => $request->size,
        'updated_at' => now()
      ]);


      if ($products) {
        return redirect()->route('products')->with('success', 'Product updated successfully!');
      } else {
        return back()->with('error', 'Product not updated!');
      }
    }

    $products = Product::find($id);
    return view('product.update', ['data' => $products]);
  }


  public function delete($id)
  {
    $products = Product::with('productvariant')->where('id', $id)->delete();
    if ($products) {
      return redirect()->route('products')->with('success', 'Product deleted successfully!');
    } else {
      return redirect()->route('products')->with('error', 'Product not deleted!');
    }
  }
}
