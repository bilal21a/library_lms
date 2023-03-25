@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h1 class="mb-0 pb-0 display-4" id="title">Issued Books</h1>
                </div>
            </div>
        </div>

        <button class="btn btn-icon btn-icon-start btn-primary mb-4" type="button" data-bs-toggle="modal"
            onclick="addFormShow()" data-bs-target="#myModal">
            <i data-acorn-icon="plus"></i>
            <span>Issue Book</span>
        </button>

        {{-- -----Table----- --}}
        @php
            $tableName = 'datatable';
            $tableData = ['ID', 'Book Name', 'User name', 'Issue Date', 'Return Date', 'status', 'fine', 'Actions'];
        @endphp
        @include('common.table.table')
    </div>


    @include('common.modal.add_edit_modal')
@endsection

@section('js_after')
    {{-- **Show Data** --}}
    <script>
        var tabelDataArray = ['lib_id',  'book_name','user_name', 'issued_date', 'return_date', 'return_status', 'fine', 'action'];
        var get_data_url = "{{ route('get_issuedBooks') }}"
    </script>
    @include('common.js.get_data')

    {{-- **Save Data** --}}
    <script>
        var add_form_url = "{{ route('issuedBooks.create') }}"
        var save_data_url = "{{ route('issuedBooks.store') }}"
        var add_title = "Add Author"
    </script>
    @include('common.js.add_data')


    {{-- **Update Data** --}}
    <script>
        var edit_form_url = '{{ route('issuedBooks.edit', ':id') }}'
        var update_data_url = '{{ route('issuedBooks.update', ':id') }}'
        var edit_title = "Edit Author"
    </script>
    @include('common.js.edit_data')


    {{-- **Delete Data** --}}
    <script>
        var delete_data_url = '{{ route('issuedBooks.destroy', ':id') }}'
    </script>
    @include('common.js.delete_data')
@endsection
