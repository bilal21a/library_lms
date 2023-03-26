<?php

namespace App\Http\Controllers;

use App\Book;
use App\IssuedBooks;
use App\ReservedRequest;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class ReserveRequestController extends Controller
{
    public function index()
    {
        return view('reserve_request.index');
    }
    public function get_reserved_request(Request $request)
    {
        $data = ReservedRequest::select(['id', 'user_id', 'book_id', 'approved'])->get();
        return DataTables::of($data)
            ->addColumn('action', function ($data) {
                if ($data->approved == 0) {
                    return $this->approve_button($data->id) . $this->delete_button($data->id);
                } else {
                    return $this->delete_button($data->id);
                }
            })
            ->addColumn('user_name', function ($data) {
                $user = User::find($data->user_id);

                return $user->name;
            })
            ->addColumn('book_name', function ($data) {
                $book = Book::find($data->book_id);
                return $book->name;
            })
            ->addColumn('approved', function ($data) {
                if ($data->approved == 0) {
                    return "Pending";
                } else {
                    return "Approved";
                }
            })
            ->make(true);
    }

    public function add_reserved_request()
    {
        $users = User::get();
        $books = Book::get();
        return view('reserve_request.add_request', compact('users', 'books'));
    }

    public function save_reserved_request(Request $request)
    {
        $data = new ReservedRequest();
        $data->user_id = $request->user_name;
        $data->book_id = $request->book_name;
        $data->save();
        return 'Success';
    }

    public function delete_reserved_request($id)
    {
        $data = ReservedRequest::find($id);
        $data->delete();

        return 'Deleted Successfully';
    }

    public function show_reserve_approve_req($id)
    {
        $data['reserve'] = ReservedRequest::find($id);
        return view('reserve_request.modal.approve', $data);
    }

    public function approve_reserve(Request $request)
    {
        $data = ReservedRequest::find($request->id);
        $data->approved = 1;
        $data->save();
        $user = new IssuedBooks();
        $user->book_id = $data->book_id;
        $user->user_id = $data->user_id;
        $user->issued_date = $data->issue_date;
        $user->return_date = $data->return_date;
        $user->return_status = 'Issued';
        $user->save();

        $book = Book::find($data->book_id);
        $book->remaining = $book->remaining - 1;
        $book->save();
        return  'Success';
    }
}
