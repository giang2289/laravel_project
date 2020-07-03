<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $table ='category';

    protected $fillable =['id','name','image','status','prioty','meta_description','meta_keywords','meta_title','created_at','updated_at'];
}
