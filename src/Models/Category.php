<?php
namespace Branzia\Blog\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'blog_categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_visible',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}