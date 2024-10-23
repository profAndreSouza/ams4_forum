<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Post
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
        'category_id'
    ];

    // Relacionamento Polimórfico
    public function post()
    {
        return $this->morphOne(Post::class, 'postable');
    }

    // public function post()
    // {
    //     return $this->belongsTo(Post::class);
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
