<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\produc;


class ProductController extends Controller
{

    // Show Product
    public function getall(){
            
        $data = produc::get();
        return response()->json($data);

    }


    // Add Product
    public function newProduct(Request $req)
    {
        $product = produc::create([
            
            "name" => $req->input('name'), 
            "category-id" => $req->input('vs'), 
            "price" => $req->input('price'), 
        ]);
      return $product;
    }


    // Delete Product
    public function deleteProduct($id)
    {
      $products = produc::find($id);
      $res   = $products -> delete();
      
      if ($res) {
        return ["result" => "product has been delete"];
      } else {
        return ["result" => "product is not deleted"];
      }
    }
 


    // Update Product
    public function updateProduct($id,Request $request)
    {
        $update   = produc::Where("id",$id)->update([
        "name"        =>  $request -> name,
        "category-id" =>  $request -> categoryId,
        "price"       =>  $request -> price,    
          ]);
    }
}
