<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produc extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','category-id','price','id'];
    protected $hidden = ['created_at','updated_at'];
}
