<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;


class AdminController extends Controller
{



    // Show Admin
    public function getall(){
            
        $data = Admin::get();
        return response()->json($data);

    }


    // Add Admin
    public function newAdmin(Request $req)
    {
        $admin = Admin::create([
            "fname" => $req->input('fname'), 
            "lname" => $req->input('lname'), 
            "gmail" => $req->input('gmail'), 
            "password" => $req->input('password'), 
        ]);


      return $admin;

    }

    // Delete Admin
    public function deleteAdmin($id)
    {
      $admins = Admin::find($id);
      $res   = $admins -> delete();
      
      if ($res) {
        return ["result" => "admin has been delete"];
      } else {
        return ["result" => "admin is not deleted"];
      }
      
    }



    // Update Admin
    public function updateAdmin($id,Request $request)
    {
      $update   = Admin::Where("id",$id)->update([
        "fname"   =>  $request -> fname,
        "lname"   =>  $request -> lname,
        "password" =>  $request -> password,
        "gmail"    =>  $request -> gmail


      ]);
       
    }

}
