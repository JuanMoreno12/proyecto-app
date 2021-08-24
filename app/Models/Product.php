<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    function Brand(){
        return $this->belongsTo(Brand::class);
    }

    function Category(){
        return $this->belongsTo(Category::class);
    }
}