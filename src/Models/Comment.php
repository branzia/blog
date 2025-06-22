<?php

namespace Branzia\Blog\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'blog_comments';

    protected $guarded = [];

    protected $casts = [
        'is_visible' => 'boolean',
    ];


    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}
