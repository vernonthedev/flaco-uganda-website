<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $fillable = [
        'blog_title',        // Change 'blog-title' to 'blog_title'
        'short_description', // Change 'short-description' to 'short_description'
        'image',
        'posted_by',         // Change 'posted-by' to 'posted_by'
        'long_description',
    ];
}
