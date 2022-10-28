<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageBuilder extends Model
{
    use HasFactory;

    public function section1(){
        return $this->hasMany(Product::class,'id','section1_id');
    }
    public function section2(){
        return $this->hasMany(Product::class,'id','section2_id');
    }
    public function section3(){
        return $this->hasMany(Product::class,'id','section3_id');
    }
    public function section4(){
        return $this->hasMany(Product::class,'id','section4_id');
    }

    public function sec1(){
        return $this->hasMany(Blog::class,'id','sec1_id');
    }
    public function sec2(){
        return $this->hasMany(Blog::class,'id','sec2_id');
    }
    public function sec3(){
        return $this->hasMany(Blog::class,'id','sec3_id');
    }
    public function sec4(){
        return $this->hasMany(Blog::class,'id','sec4_id');
    }
}
