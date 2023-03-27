<?php

namespace App\Http\Controllers;

use App\Book;
use App\ReturnRequest;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class ReturnRequestController extends Controller
{
    public function index()
    {
        return view('return_request.index');
    }

    public function get_return_request(Request $request)
    {
        $data = ReturnRequest::with('issued_book')->select(['id', 'user_id', 'issue_book_id']);
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

    public function add_return_request()
    {
        $users = User::role(['student', 'faculty'])->get();
        $books = Book::get();
        return view('return_request.add_request', compact('users', 'books'));
    }

    public function save_return_request(Request $request)
    {
        $data = new ReturnRequest();
        $data->user_id = $request->user_name;
        $data->issue_book_id =  $request->issued_book_id;
        $data->save();
        return 'Success';
    }

    public function delete_return_request($id)
    {
        $data = ReturnRequest::find($id);
        $data->delete();

        return 'Deleted Successfully';
    }
}
