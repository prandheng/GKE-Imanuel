<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;
    //protected $fillable = ['title', 'fillable', 'excerpt', 'body'];     // Yang terisi hanya title,excerpt, dan body. Selain itu tidak terisi

    protected $guarded = ['id'];  //Semua nya terisi kecuali ID
    protected $with = ['category', 'author'];


    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });
        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) => 
            $query->where('username', $author)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class, "category_id");
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Slug dijadikan route key agar bisa di gunakan pada URL ($post -> slug) agar lebih susah di hack
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // function untuk automatisasi pembuatan slug dari request url melalui id 'title' pada input html
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
