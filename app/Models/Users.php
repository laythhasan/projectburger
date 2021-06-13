<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = ['fname','lname','gmail','tittle','password'];
    protected $hidden = ['created_at','updated_at'];
}
