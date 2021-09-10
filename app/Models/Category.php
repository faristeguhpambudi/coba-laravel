<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    //menghubungkan dengan tabel post, relainya one to many
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
