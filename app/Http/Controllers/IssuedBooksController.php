<?php

namespace App\Http\Controllers;

use App\Book;
use App\IssuedBooks;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class IssuedBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::get();
        return view('issued_books.index', compact('users'));
    }

    public function get_data()
    {
        $data = IssuedBooks::select(['id', 'user_id', 'book_id', 'issued_date', 'return_date', 'return_status', 'fine']);
        return DataTables::of($data)
            ->addColumn('lib_id', function ($data) {
                return 'lib_' . $data->id;
            })
            ->addColumn('action', function ($data) {
                return $this->get_buttons($data->id);
            })
            ->addColumn('user_name', function ($data) {
                $user = User::find($data->user_id);

                return $user->name;
            })
            ->addColumn('book_name', function ($data) {
                $book = Book::find($data->book_id);
                return $book->name;
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::get();
        $books = Book::get();
        return view('issued_books.modal.add', compact('users', 'books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'book_name' => 'required',
                'user_name' => 'required',
                'issue_date' => 'required',
                'return_date' => 'required',
            ],
        );
        if ($validate->fails()) {
            return response()->json($validate->errors()->first(), 500);
        }
        $user = new IssuedBooks();
        $user->book_id = $request->book_name;
        $user->user_id = $request->user_name;
        $user->issued_date = $request->issue_date;
        $user->return_date = $request->return_date;
        $user->return_status = 'Issued';
        $user->save();
        return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = IssuedBooks::find($id);
        $users = User::get();
        $books = Book::get();
        return view('issued_books.modal.edit', compact('data', 'books', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'book_name' => 'required',
                'user_name' => 'required',
                'issue_date' => 'required',
                'return_date' => 'required',
            ],
        );
        if ($validate->fails()) {
            return response()->json($validate->errors()->first(), 500);
        }
        $user = IssuedBooks::find($request->id);
        $user->book_id = $request->book_name;
        $user->user_id = $request->user_name;
        $user->issued_date = $request->issue_date;
        $user->return_date = $request->return_date;
        $user->return_status = 'Issued';
        $user->save();
        return 'Updated Successfully';
    }

    public function return_issuedBooks(Request $request)
    {
        if ($request->returnRadio == 'user_name') {
            $block ='user_id';
        } else {
            $block =  'id';
            $request['id'] = explode("_", $request->id)[1];
        }

        $issued_books = IssuedBooks::where($block, $request->$block)->get();

        return $issued_books;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = IssuedBooks::find($id);
        $data->delete();
        return 'Deleted Succesfully';
    }
}
