<?php

namespace App\Http\Controllers;

use App\Book;
use App\IssuedBooks;
use App\RequestedBooks;
use App\ReservedRequest;

class ProfileController extends Controller
{
    public function index()
    {
        // $issued = IssuedBooks::where('user_id', auth()->id())->where('return_status', 'issued')->count();
        // $return = IssuedBooks::where('user_id', auth()->id())->where('return_status', 'return')->count();
        return view('profile.index');
    }

    public function get_issued_books()
    {
        $books = IssuedBooks::where('user_id',auth()->id())->where('return_status', 'issued')->get();
        return view('profile.issued_books', compact('books'));
    }
    public function get_returned_books()
    {
        $issuebook = IssuedBooks::where('user_id',auth()->id())->where('return_status', 'return')->pluck('book_id');
        $books=Book::whereIn('id', $issuebook)->get();
        return view('profile.returned_books',compact('books'));
    }
    public function get_requested_books()
    {
        $books = RequestedBooks::where('user_id',auth()->id())->get();
        return view('profile.requested_books',compact('books'));
    }
    public function get_reserved_books()
    {
        $issuebook = ReservedRequest::where('user_id', auth()->id())->pluck('book_id');
        $books = Book::whereIn('id', $issuebook)->get();
        return view('profile.reserved_books',compact('books'));
    }
}
