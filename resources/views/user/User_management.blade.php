@extends('layouts.app')
@section('css_after')
    <style>
        .data-table-rows table.dataTable td .form-check {
            pointer-events: auto;
        }

        .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
    </style>
@endsection
@section('content')
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">
            <!-- Title Start -->
            <div class="col-12 col-md-7">
                <h1 class="mb-0 pb-0 display-4" id="title">User Managment</h1>

            </div>
        </div>
    </div>

    <div class="row">
        <div>

            <a class="btn btn-primary me-5 float-end" data-bs-toggle="modal" data-bs-target="#adduser">Add
                User</a>
        </div>

        <div class="col-12 col-sm-12">
            <div class="os-content" style="padding: 0px 15px; height: auto; width: 100%;">
                <div class="data-table-rows slim">
                    <!-- Controls Start -->

                    @php
                        $tableName = 'app_block';
                        $tableData = ['#', 'user', 'role', 'last login', 'status', 'joined date', 'action'];
                    @endphp
                    @include('common.table.userTable')

                </div>
            </div>
        </div>

    </div>

    <div class="card-body">
        <!-- Modal -->
        <div class="modal fade modal-close-out" id="adduser" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabelCloseOut" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabelCloseOut">Add User</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body scroll-y mx-5">
                        <form id="kt_modal_add_user_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                            method="POST">

                            <div class="fv-row mb-5 fv-plugins-icon-container">
                                <label class="required fw-bold fs-6 mb-2">Full Name</label>
                                <input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Full Name" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="fv-row mb-5 fv-plugins-icon-container">
                                <label class="required fw-bold fs-6 mb-2">Email</label>
                                <input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="example@domain.com" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="fv-row mb-5">
                                <label class=" fw-bold fs-6 mb-2">Phone Number</label>
                                <input type="phone" name="phone" class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Phone" value="">

                            </div>
                            <div class="fv-row mb-5 fv-plugins-icon-container">
                                <label class="required fw-bold fs-6 mb-2">Password</label>
                                <input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Full Name" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
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


                                            <option value="60">Admin</option>
                                            <option value="61">Manager</option>
                                            <option value="61">Salesmen</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="text-center pt-15 mb-5">

                        <button class="btn btn-primary" type="submit">
                            <span class="indicator-label">Submit</span>
                        </button>
                    </div>
                    <div></div>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" onclick="load_table()" class="btn btn-primary">Save changes</button>
                </div> --}}
            </div>
        </div>
    </div>
    {{-- Edit User --}}
    <div class="card-body">
        <!-- Modal -->
        <div class="modal fade modal-close-out" id="closeButtonOutExample" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabelCloseOut" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabelCloseOut">Edit User</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body scroll-y mx-5">
                        <form id="kt_modal_add_user_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                            method="POST">

                            <div class="fv-row mb-5 fv-plugins-icon-container">
                                <label class="required fw-bold fs-6 mb-2">Full Name</label>
                                <input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Full Name" value="Dummy">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="fv-row mb-5 fv-plugins-icon-container">
                                <label class="required fw-bold fs-6 mb-2">Email</label>
                                <input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="example@domain.com" value="dummy@gmail.com">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="fv-row mb-5">
                                <label class=" fw-bold fs-6 mb-2">Phone Number</label>
                                <input type="phone" name="phone" class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Phone" value="+44982155478">

                            </div>
                            <div class="fv-row mb-5 fv-plugins-icon-container">
                                <label class="required fw-bold fs-6 mb-2">Password</label>
                                <input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Full Name" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
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


                                            <option value="60" selected>Admin</option>
                                            <option value="61">Manager</option>
                                            <option value="61">Salesmen</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="text-center pt-15 mb-5">

                        <button class="btn btn-primary" type="submit">
                            <span class="indicator-label">Submit</span>
                        </button>
                    </div>
                    <div></div>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" onclick="load_table()" class="btn btn-primary">Save changes</button>
                </div> --}}
            </div>
        </div>
    </div>
    {{-- Edit User End  --}}
    <!-- Content End -->
@endsection

@section('js_after')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".mark_all").click(function() {
                $("input:checkbox").prop('checked', $(this).prop("checked"));

            });
            $cbs = $('input:checkbox').click(function() {
                $('.delete-all').toggle($cbs.is(":checked"));
            });
        });

        // sweetalert2
        var testing = "viewproduct";



        function myalert(icon = "success", title = "null", timer = "3000") {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: timer,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: icon,
                title: title
            })
        }

        function ConfirmDelete() {

            swal({
                title: 'Are You Sure',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#07be6e',
                cancelButtonColor: '#d57171',
                cancelButtonText: 'No,_cancel_it!',
                confirmButtonText: 'Yes Delete!'
            }, function() {
                $.ajax({
                    type: 'GET',
                    url: '',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {

                        $('.delete').hide();

                        myalert("success", 'User Deleted Successfully', 1000);

                    },
                });
            });
        }

        function singleDelete() {
            alert("Are you sure you want to delete thia")
        }


        function load_table() {
            $('.csv_content').show();
            $('.slim').hide();
            $('.modal').modal('toggle');
        }
    </script>
@endsection
