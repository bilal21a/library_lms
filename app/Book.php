<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        if ($this->cover_image) {
            return asset('storage/books/images/' . $this->cover_image);
        }
        return null;
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    protected $casts = [
        'qty' => 'integer',
        'remaining' => 'integer',
    ];
}
