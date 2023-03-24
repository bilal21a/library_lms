@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h1 class="mb-0 pb-0 display-4" id="title">Books Managment</h1>
                </div>
            </div>
        </div>

        <button class="btn btn-icon btn-icon-start btn-primary mb-4" type="button" data-bs-toggle="modal"
            onclick="addFormShow()" data-bs-target="#myModal">
            <i data-acorn-icon="plus"></i>
            <span>Add Book</span>
        </button>

        {{-- -----Table----- --}}
        @php
            $tableName = 'datatable';
            $tableData = ['ISBN Number', 'Name', 'Category', 'Author', 'Price', 'Actions'];
        @endphp
        @include('common.table.table')
    </div>

    @include('common.modal.add_edit_modal')
@endsection

@section('js_after')
    {{-- **Show Data** --}}
    <script>
        var tabelDataArray = ['isbn_number', 'name', 'category', 'author',  'price', 'action'];
        var get_data_url = "{{ route('get_books') }}"
    </script>
    @include('common.js.get_data')

    {{-- **Save Data** --}}
    <script>
        var add_form_url = "{{ route('book.create') }}"
        var save_data_url = "{{ route('book.store') }}"
        var add_title = "Add Book"
    </script>
    @include('common.js.add_data')


    {{-- **View Data** --}}
    <script>
        var show_form_url = '{{ route('book.show', ':id') }}'
        var view_title = "Book Info"
    </script>
    @include('common.js.view_data')


    {{-- **Update Data** --}}
    <script>
        var edit_form_url = '{{ route('book.edit', ':id') }}'
        var update_data_url = '{{ route('book.update', ':id') }}'
        var edit_title = "Edit Book"
    </script>
    @include('common.js.edit_data_post')


    {{-- **Delete Data** --}}
    <script>
        var delete_data_url = '{{ route('book.destroy', ':id') }}'
    </script>
    @include('common.js.delete_data')
@endsection
