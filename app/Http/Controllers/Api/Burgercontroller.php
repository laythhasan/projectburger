<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;


class Burgercontroller extends Controller
{
    
    // Show Category
    public function getall(){
            
        $data = Category::get();
        return response()->json($data);
    }
    

    // Add Category 
    public function newCategory(Request $req)
    {
        $category = Category::create([
            
            "name" => $req->input('name'), 
        ]);
      return $category;
    }
    
    // Delete Category
    public function deleteCategory($id)
    {
      $category = Category::find($id);
      $res   = $category -> delete();
      
      if ($res) {
        return ["result" => "category has been delete"];
      } else {
        return ["result" => "category is not deleted"];
      }
    }

    // Update Category
    public function updateCategory($id,Request $request)
    {
      $update   = Category::Where("id",$id)->update([
      "name"    =>  $request -> name,   
        ]);
    }

   
}
