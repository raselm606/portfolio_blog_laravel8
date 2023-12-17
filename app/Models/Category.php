<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $guarded = [];

    public function productpost(){
        return $this->hasMany(Products::class,'cate_id','id') ;
    }
    public function blogpost(){
        return $this->hasMany(Blogs::class,'cate_id','id') ;
    }
}
