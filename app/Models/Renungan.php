<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Renungan extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    // Slug dijadikan route key agar bisa di gunakan pada URL ($renungan -> slug) agar lebih susah di hack
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // function untuk automatisasi pembuatan slug dari request url melalui 'title'
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
