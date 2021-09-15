<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'title',
        'user_id',
        'category_id',
        'slug',
        'image',
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

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
