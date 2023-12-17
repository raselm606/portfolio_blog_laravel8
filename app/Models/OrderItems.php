<?php

namespace App\Models;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItems extends Model
{
    use HasFactory;
    protected $table = 'order_items';
    protected $guarded = [];

    public function prod(){
        return $this->belongsTo(Products::class, 'prod_id','id');
    }


}
