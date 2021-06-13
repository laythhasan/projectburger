<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{

    // Show users
    public function getall(){
            
        $data = Users::get();
        return response()->json($data);

    }


    // Add Users
    public function newUsers(Request $req)
    {
        $user = Users::create([
            "fname" => $req->input('fname'), 
            "lname" => $req->input('lname'), 
            "gmail" => $req->input('gmail'), 
            "password" => $req->input('password'), 
            "tittle" => $req->input('tittle'), 
        ]);


      return $user;

    }

    // Delete Users
    public function deleteUsers($id)
    {
      $users = Users::find($id);
      $res   = $users -> delete();
      
      if ($res) {
        return ["result" => "user has been delete"];
      } else {
        return ["result" => "user is not deleted"];
      }
      
    }

    // Update Users 
    public function updateUsers($id,Request $request)
    {
      $update   = Users::Where("id",$id)->update([
        "fname"   =>  $request -> fname,
        "lname"   =>  $request -> lname,
        "password" =>  $request -> password,
        "gmail"    =>  $request -> gmail,
        "tittle"   =>  $request -> tittle
      ]);
       
    }
}
