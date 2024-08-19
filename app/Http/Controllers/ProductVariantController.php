<?php

namespace App\Http\Controllers;
use App\Models\Productvariant;



class ProductVariantController extends Controller
{
  public function show()
  {
    $productvariants = Productvariant::get();
    return view('productvariants.provariants', ['data' => $productvariants]);
  }

  public function delete($id)
  {
    $productvariant = Productvariant::where('id', $id)->delete();
    
    if ($productvariant) {
      return redirect()->route('provariants')->with('success', 'Product deleted successfully!');
    } else {
      return redirect()->route('provariants')->with('error', 'Product not deleted!');
    }
  }
}
