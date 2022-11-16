<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $fillable = [

        'first_name',
        'last_name',
        'company',
        'email',
        'phone',
        'support_topic',
        'comment',
        'contact_by'
    ];
}
