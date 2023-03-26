<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssuedBooks extends Model
{
    // protected $appends = ['book_info','user_info'];

    // public function getBookInfoAttribute()
    // {
    //     $book = Book::find($this->book_id);
    //     return $book;
    // }

    // public function getUserInfoAttribute()
    // {
    //     $user = User::find($this->user_id);
    //     return $user;
    // }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
