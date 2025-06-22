<?php

namespace Branzia\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
class Post extends Model
{
    use HasFactory;

    protected $table = 'blog_posts';

    protected $fillable = [
        'blog_author_id',
        'blog_category_id',
        'title',
        'slug',
        'content',
        'published_at',
        'image',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class, 'blog_author_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'blog_category_id');
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}