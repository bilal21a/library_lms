<?php

namespace App\Http\Controllers;

use App\Book;
use App\IssuedBooks;
use App\RenewRequest;
use App\User;
use Yajra\DataTables\Facades\DataTables;

use Illuminate\Http\Request;

class RenewRequestController extends Controller
{
    public function index()
    {
        return view('renew_request.index');
    }

    public function get_renew_request(Request $request)
    {
        $data = RenewRequest::with('issued_book')->select(['id', 'user_id', 'issued_book_id', 'return_date','approved']);
        return DataTables::of($data)
            ->addColumn('action', function ($data) {
                if ($data->approved == 0) {
                    return  $this->approve_button($data->id) . $this->delete_button($data->id);
                } else {
                    return  $this->delete_button($data->id);
                }
            })
            ->addColumn('issuedBookID', function ($data) {
                return  'lib_' . $data->issued_book->id;
            })
            ->addColumn('user_name', function ($data) {
                return $data->issued_book->user->name;
            })
            ->addColumn('book_name', function ($data) {
                return $data->issued_book->book->name;
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

    public function add_renew_request($book_id = null)
    {
        if ($book_id != null) {
            $data['book_id'] = $book_id;
            $data['issued_book_info'] = IssuedBooks::with('book')->find($book_id);
        } else {
            $data['users'] = User::get();
            $data['books'] = IssuedBooks::where('return_status', 'Issued')->get();
        }
        return view('renew_request.add_request', $data);
    }

    public function save_renew_request(Request $request)
    {
        $data = new RenewRequest();
        $data->user_id = $request->user_name;
        $data->return_date = $request->return_date;
        $data->issued_book_id =  $request->issued_book_id;
        $data->save();
        return 'Success';
    }
    public function delete_renew_request($id)
    {
        $data = RenewRequest::find($id);
        $data->delete();

        return 'Deleted Successfully';
    }

    public function show_renew_approve_req($id)
    {
        $data['renew'] = RenewRequest::find($id);
        return view('renew_request.modal.approve', $data);
    }

    public function approve_renew(Request $request)
    {
        $renew = RenewRequest::find($request->id);
        $renew->approved = 1;
        $renew->save();
        $issue = IssuedBooks::find($renew->issued_book_id);
        $issue->return_date = $request->return_date;
        $issue->return_status = "Issued";
        $issue->save();

        return "approved";
    }
}
