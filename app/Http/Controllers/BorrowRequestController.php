<?php

namespace App\Http\Controllers;

use App\Book;
use App\BorrowRequest;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;



class BorrowRequestController extends Controller
{
    public function index()
    {
        return view('borrow_request.index');
    }

    public function get_borrow_request(Request $request)
    { {
            $data = BorrowRequest::select(['id', 'user_id', 'book_id', 'issue_date', 'return_date', 'approved']);
            return DataTables::of($data)
                ->addColumn('action', function ($data) {

                    return  $this->delete_button($data->id);
                })
                // ->addColumn('issuedBookID', function ($data) {
                //     dd($data->issued_book->id);
                //     return  'lib_' . $data->issued_book->id;
                // })
                // ->addColumn('user_name', function ($data) {
                //     return $data->issued_book->user->complete_name_styled();
                // })
                // ->addColumn('book_name', function ($data) {
                //     return $data->issued_book->book->name;
                // })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function add_borrow_request()
    {
        $users = User::role(['student', 'faculty'])->get();
        $books = Book::get();
        return view('borrow_request.add_request', compact('users', 'books'));
    }

    public function save_borrow_request(Request $request)
    {

        $user = new BorrowRequest();
        $user->book_id = $request->book_name;
        $user->user_id = $request->user_name;
        $user->issue_date = $request->issue_date;
        $user->return_date = $request->return_date;
        $user->save();

        return 'Success';
    }

    public function delete_borrow_request($id)
    {
        $data = BorrowRequest::find($id);
        $data->delete();

        return 'Deleted Successfully';
    }
}
