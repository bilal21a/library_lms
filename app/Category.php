<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    //
    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/category/images/'.$this->image);
        }
        else{
            return 'https://ui-avatars.com/api/?background=f9f9f9&color=1ea8e7&size=512&bold=true&name='.$this->name;
        }
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
