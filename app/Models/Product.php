<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
    'title','price','image','category','brand','industry'
    ];

    public function brand(){
        return $this->hasMany(Brand::class);
    }
}
