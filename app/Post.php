<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'image',
        'content',
        'premium'
    ];

    public function author() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function getExcerpt() {
        return str_limit($this->content, 40);
    }

}
