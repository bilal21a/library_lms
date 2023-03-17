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

        <div class="mb-3">

            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEditModal" style="margin-left: 1rem">Add
                User</a>
        </div>

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
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabelCloseOut">Add User</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body scroll-y mx-5">

                    <form {{-- action="{{ route('updateCustomer') }}" --}} method="post" enctype="multipart/form-data" id="add_user">

                        @csrf
                        <div class="fv-row mb-5 fv-plugins-icon-container">
                            <label class="required fw-bold fs-6 mb-2">Full Name</label>
                            <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="Full Name" value="">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="fv-row mb-5 fv-plugins-icon-container">
                            <label class="required fw-bold fs-6 mb-2">Email</label>
                            <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="example@domain.com" value="">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="fv-row mb-5 fv-plugins-icon-container">
                            <label class="required fw-bold fs-6 mb-2">Password</label>
                            <input type="password" name="password" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="*******">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label class="required fw-bold fs-6 mb-2">Role</label>
                            <div data-kt-user-table-filter="form">
                                <div class="mb-10">
                                    <select class="form-select form-select-solid fw-bolder select2-hidden-accessible"
                                        style="height:50px;" data-kt-select2="true" data-placeholder="Select Option"
                                        data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true"
                                        name="role" data-select2-id="select2-data-7-dvwh" tabindex="-1"
                                        aria-hidden="true">
                                        <option value="admin">Admin</option>
                                        <option value="student">Student</option>
                                        <option value="libararian">libararian</option>
                                        <option value="facalty">facalty</option>
                                    </select>
                                </div>
                                @error('role')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="text-center pt-15 mb-5">
                            <button class="btn btn-primary" type="submit">
                                <span class="indicator-label">Submit</span>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    {{-- EDIT USER MODEL --}}
    <div class="modal modal-right large fade" id="EditModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabelCloseOut">Edit User</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body scroll-y mx-5">

                    <form {{-- action="{{ route('updateCustomer') }}" --}} method="post" enctype="multipart/form-data" id="update_user">
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


        $('#add_user').on('submit', function(e) {
            e.preventDefault();
            let singleDeleteDraw = {
                ...app_block
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
                    $('#addEditModal').modal('hide')
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

        function editUser(id) {

            event.preventDefault();
            var url = '{{ route('edit_user', ':id') }}';
            url = url.replace(':id', id);


            $.ajax({
                type: 'GET',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {

                    $('#update_user').html(data);

                },
            });
        }

        $('#update_user').on('submit', function(e) {
            e.preventDefault();
            let singleDeleteDraw = {
                ...app_block
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
                    $('#EditModal').modal('hide')

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

        function deleteUser(id) {

            let singleDeleteDraw = {
                ...app_block
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
                                'Your user has been Deleted.',
                                'success'
                            )
                        })
                        .catch(function(error) {});
                }
            })
        }
    </script>
@endsection
