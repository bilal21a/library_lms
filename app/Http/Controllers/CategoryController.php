<?php

namespace App\Http\Controllers;

use App\Category;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category.index');
    }

    public function get_data()
    {
        $data = Category::select(['id', 'name']);
        return DataTables::of($data)
            ->addColumn('action', function ($data) {
                $view_btn = $data->books->count() > 0 ? $this->viewButton($data->id, "View Books"):'';
                $edit_delete_btn = $this->get_buttons($data->id);
                return $view_btn . $edit_delete_btn;
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
        return view('category.modal.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validate = Validator::make(
            $request->all(),
            [
                'name' => 'required|unique:categories,name',
                'image' => 'image|max:2048' // validate that the uploaded file is an image and its size is less than or equal to 2MB
            ],
        );
        if ($validate->fails()) {
            return response()->json($validate->errors()->first(), 500);
        }

        $data = new Category();
        $data->name = $request->name;

        if ($request->hasFile('image')) {
            $slug = Str::slug($request->name);
            $image = $request->file('image');
            $randomString = Str::random(5);
            $imageName = $slug . '_' . $randomString . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/category/images', $imageName);
            $data->image = $imageName;
        }
        $data->save();
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
        $data = Category::find($id);
        return view('category.modal.edit', compact('data'));
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
                'name' => 'required|unique:categories,name,' . $id,
                'image' => 'nullable|image|max:2048' // validate that the uploaded file is an image and its size is less than or equal to 2MB
            ],
        );
        if ($validate->fails()) {
            return response()->json($validate->errors()->first(), 500);
        }

        $data = Category::find($id);
        $data->name = $request->name;
        $slug = Str::slug($request->name);

        if ($request->hasFile('image')) {
            //check for old image file
            $imagePath = 'public/category/images/' . $data->image;

            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }
            //save image file
            $image = $request->file('image');
            $randomString = Str::random(5);
            $imageName = $slug . '_' . $randomString . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/category/images', $imageName);
            $data->image = $imageName;
        }

        $data->save();
        return 'Success';
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Category::findOrFail($id);
        $imagePath = 'public/category/images/' . $data->image;

        if (Storage::exists($imagePath)) {
            Storage::delete($imagePath);
        }

        $data->delete();
        return 'Category Deleted Successfully';
    }
}
