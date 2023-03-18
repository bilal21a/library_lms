<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return view('author.index');
    }
    public function get_data()
    {
        $users = User::select(['id', 'name', 'email', 'created_at', 'updated_at']);
        return DataTables::of($users)
            ->addColumn('action', function ($user) {
                return $this->get_buttons($user->id);
            })
            ->make(true);
    }
    public function add_form()
    {
        return view('users.modal.add');
    }
    public function save_data(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => ['required', Rule::unique('users')],
                'password' => 'required|min:8',
                'role' => 'required',
            ],
        );
        if ($validate->fails()) {
            return response()->json($validate->errors()->first(), 500);
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // $user->role= $request->role;
        $user->save();
        return 'Success';
    }

    public function edit_form($id)
    {
        $user = User::find($id);
        return view('users.modal.edit', compact('user'));
    }

    public function update_data(Request $request)
    {
        $agent = User::find($request->id);
        $agent->name = $request->name;
        // $agent->role=$request->role;
        $agent->password = $request->password != null ?  Hash::make($request->password) : $agent->password;
        $agent->save();
        return 'User Updated Successfully';
    }

    public function delete_data($id)
    {
        $agent = User::find($id);
        $agent->delete();
        return 'User Deleted Succesfully';
    }
}
