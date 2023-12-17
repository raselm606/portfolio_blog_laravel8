<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class, 'cate_id','id');
    }
}
