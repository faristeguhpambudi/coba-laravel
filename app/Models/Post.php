<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'slug',
        'excerpt',
        'body'
    ];

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        //jika ada kata pencarian

        $query->when(isset($filters['search']) ? $filters['search'] : false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when(isset($filters['category']) ? $filters['category'] : false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when(isset($filters['author']) ? $filters['author'] : false, function ($query, $author) {
            return $query->whereHas('author', function ($query) use ($author) {
                $query->where('username', $author);
            });
        });
    }

    //membuat relasi dengan model Category, Relasinya one to one
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //membuat relasi dengan model User, Relasinya one to one
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}