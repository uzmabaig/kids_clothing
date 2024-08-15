<?php

namespace App\Http\Controllers;

use App\Models\Productvariant;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductVariantController extends Controller
{
  public function show()
  {
    $products = Productvariant::get();
    return view('productvariants.provariants', ['data' => $products]);
  }

  public function delete($id)
  {
    $products = Productvariant::where('id', $id)->delete();
    if ($products) {
      return redirect()->route('provariants')->with('success', 'Product deleted successfully!');
    } else {
      return redirect()->route('provariants')->with('error', 'Product not deleted!');
    }
  }
}
