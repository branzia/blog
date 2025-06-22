<?php

namespace Branzia\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;

    protected $table = 'blog_authors';

    protected $fillable = [
        'name',
        'email',
        'photo',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}