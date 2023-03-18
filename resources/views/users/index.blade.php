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


    {{-- -----Modal----- --}}
    <div class="modal modal-right large fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modalTitle"></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body scroll-y mx-5">
                    <form method="post" enctype="multipart/form-data" id="edit_data_form">
                        @csrf
                    </form>
                    <form method="post" enctype="multipart/form-data" id="add_data_form">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js_after')
    <script>
        $(function() {
            dataTable =
                $('#datatable').dataTable({
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

        function addFormShow() {
            event.preventDefault();
            $('#edit_data_form').html('');
            $('#modalTitle').html('Add User');
            var url = "{{ route('user_add_show') }}";

            $.ajax({
                type: 'GET',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    $('#add_data_form').html(data);
                },
            });
        }
        $('#add_data_form').on('submit', function(e) {
            e.preventDefault();
            let singleDeleteDraw = {
                ...dataTable
            };
            var formData = new FormData(this);
            console.log('formData: ', formData);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ route('add_user') }}",
                data: formData,
                success: function(response) {
                    console.log('response: ', response);
                    singleDeleteDraw._fnDraw();
                    myalert("success", response, 5000);
                    $('#myModal').modal('hide')
                },
                error: function(xhr, status, error) {
                    console.log('error: ', xhr.responseJSON);
                    myalert("error", xhr.responseJSON, 10000);
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });

        function editFormShow(id) {
            event.preventDefault();
            $('#modalTitle').html('Edit User');
            $('#add_data_form').html('');
            var url = '{{ route('edit_user', ':id') }}';
            url = url.replace(':id', id);

            $.ajax({
                type: 'GET',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    $('#edit_data_form').html(data);
                },
            });
        }
        $('#edit_data_form').on('submit', function(e) {
            e.preventDefault();
            let singleDeleteDraw = {
                ...dataTable
            };

            var formData = new FormData(this);
            console.log('formData: ', formData);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ route('update_user') }}",
                data: formData,
                success: function(response) {
                    console.log('response: ', response);
                    singleDeleteDraw._fnDraw();
                    myalert("success", response, 5000);
                    $('#myModal').modal('hide')
                },
                error: function(xhr, status, error) {
                    console.log('error: ', xhr.responseJSON);
                    myalert("error", xhr.responseJSON, 10000);
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });

        function deleteData(id) {
            let singleDeleteDraw = {
                ...dataTable
            };
            Swal.fire({
                title: 'Are you sure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!'
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.get(`{{ url('/delete_user') }}/` + id)
                        .then(function(response) {
                            singleDeleteDraw._fnDraw();
                            Swal.fire(
                                'Deleted!',
                                'Your data has been Deleted.',
                                'success'
                            )
                        })
                        .catch(function(error) {});
                }
            })
        }
    </script>
@endsection
