<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPageBuilder extends Model
{
    use HasFactory;

    public function cat1()
    {
        return $this->hasMany(Category::class, 'id', 'category1');
    }
    public function cat2()
    {
        return $this->hasMany(Category::class, 'id', 'category2');
    }
    public function cat3()
    {
        return $this->hasMany(Category::class, 'id', 'category3');
    }
    public function cat4()
    {
        return $this->hasMany(Category::class, 'id', 'category4');
    }
    public function cat5()
    {
        return $this->hasMany(Category::class, 'id', 'category5');
    }
    public function cat6()
    {
        return $this->hasMany(Category::class, 'id', 'category6');
    }
    public function cat7()
    {
        return $this->hasMany(Category::class, 'id', 'category7');
    }
    public function cat8()
    {
        return $this->hasMany(Category::class, 'id', 'category8');
    }
    public function cat9()
    {
        return $this->hasMany(Category::class, 'id', 'category9');
    }
    public function cat10()
    {
        return $this->hasMany(Category::class, 'id', 'category10');
    }
    public function cat11()
    {
        return $this->hasMany(Category::class, 'id', 'category11');
    }
    public function cat12()
    {
        return $this->hasMany(Category::class, 'id', 'category12');
    }
    public function cat13()
    {
        return $this->hasMany(Category::class, 'id', 'category13');
    }
    public function cat14()
    {
        return $this->hasMany(Category::class, 'id', 'category14');
    }
    public function cat15()
    {
        return $this->hasMany(Category::class, 'id', 'category15');
    }
    public function cat16()
    {
        return $this->hasMany(Category::class, 'id', 'category16');
    }
    public function cat17()
    {
        return $this->hasMany(Category::class, 'id', 'category17');
    }
    public function cat18()
    {
        return $this->hasMany(Category::class, 'id', 'category18');
    }
    public function cat19()
    {
        return $this->hasMany(Category::class, 'id', 'category19');
    }
    public function cat20()
    {
        return $this->hasMany(Category::class, 'id', 'category20');
    }
}
