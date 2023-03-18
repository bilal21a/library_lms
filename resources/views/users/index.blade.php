@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h1 class="mb-0 pb-0 display-4" id="title">Users</h1>
                </div>
            </div>
        </div>

        <button class="btn btn-icon btn-icon-start btn-primary mb-4" type="button" data-bs-toggle="modal"
            onclick="addFormShow()" data-bs-target="#myModal">
            <i data-acorn-icon="plus"></i>
            <span>Add User</span>
        </button>

        {{-- -----Table----- --}}
        @php
            $tableName = 'datatable';
            $tableData = ['ID', 'Name', 'Email', 'Created At', 'Updated At', 'Actions'];
        @endphp
        @include('common.table.table')
    </div>

    @include('common.modal.add_edit_modal')
@endsection

@section('js_after')
    {{-- **Show Data** --}}
    <script>
        var tabelDataArray = ['id', 'name', 'email', 'created_at', 'updated_at', 'action'];
        var get_data_url = "{{ route('get_users') }}"
    </script>
        @include('common.js.get_data')

    {{-- **Save Data** --}}
    <script>
        var add_form_url = "{{ route('user_add_show') }}"
        var save_data_url = "{{ route('add_user') }}"
    </script>
        @include('common.js.add_data')


    {{-- **Update Data** --}}
    <script>
        var edit_form_url = '{{ route('edit_user', ':id') }}'
        var update_data_url = "{{ route('update_user') }}"
    </script>
        @include('common.js.edit_data')


    {{-- **Delete Data** --}}
    <script>
        var delete_data_url = '{{ route('delete_user', ':id') }}'
    </script>
        @include('common.js.delete_data')
@endsection