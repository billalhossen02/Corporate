<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogDetails extends Model
{
    use HasFactory;

    protected $table = 'blog_details';

    protected $primaryKey = 'id';
    
    //A blog_detail belongs to a blog.
    // public function blogdetails()
    // {   
    //     return $this->belongsTo(Blog::class);
    // }
}
