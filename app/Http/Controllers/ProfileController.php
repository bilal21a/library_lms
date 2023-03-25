<?php

namespace App\Http\Controllers;

use App\Book;
use App\IssuedBooks;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $issued = IssuedBooks::where('user_id', auth()->id())->where('return_status', 'issued')->count();
        $return = IssuedBooks::where('user_id', auth()->id())->where('return_status', 'return')->count();
        // dd($return);
        return view('profile.index');
    }

    public function get_issued_books()
    {
        $issuebook = IssuedBooks::where('user_id',auth()->id())->where('return_status', 'issued')->pluck('book_id');
        $books=Book::whereIn('id', $issuebook)->get();
        // dd($books);

        return view('profile.issued_books', compact('books'));
    }
    public function get_returned_books()
    {
        $issuebook = IssuedBooks::where('user_id',auth()->id())->where('return_status', 'return')->pluck('book_id');
        $books=Book::whereIn('id', $issuebook)->get();

        return view('profile.returned_books',compact('books'));
    }
}
