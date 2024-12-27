<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function tags()
    { 
        return $this->belongsToMany(Tag::class, 'posts_tag', 'post_id', 'tag_id');
    }
    public function users() 
    {
        return $this->belongsTo(User::class);
    }


}
