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
        <!-- Title and Top Buttons End -->

        {{-- ---------- --}}
        @php
            $tableName = 'users-table';
            $tableData = ['ID', 'Name', 'Email', 'Created At', 'Updated At', 'Actions'];
        @endphp
        @include('common.table.table')
    </div>
    <div class="modal modal-right large fade" id="addEditModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modelData"></div>
            </div>
        </div>
    </div>
@endsection

@section('js_after')
    <script>
        $(function() {

            app_block =
                $('#users-table').dataTable({
                    responsive: true,
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('get_users') }}",
                    aaSorting: [
                        [0, "desc"]
                    ],
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'updated_at',
                            name: 'updated_at'
                        },
                        {
                            data: 'action',
                            name: 'action'
                        },

                    ]
                });
        });
    </script>
@endsection
