@extends('layouts.app')
@section('css_after')
    <style>
        .data-table-rows table.dataTable td .form-check {
            pointer-events: auto;
        }

        .bullet {
            display: inline-block;
            background-color: #b5b5c3;
            width: 8px;
            height: 4px;
            flex-shrink: 0;
        }
    </style>
@endsection
@section('content')
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">

            <!-- Title Start -->
            <div class="col-12 col-md-7">
                <h1 class="mb-0 pb-0 display-4" id="title">Roles and Permission</h1>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="mb-3">

            <a class="btn btn-primary me-5 float-end" data-bs-toggle="modal" data-bs-target="#add_role">Add
                Role</a>
        </div>

        <div class="col-12 col-sm-4 mb-3">
            <div class="card mb-5 h-100">
                <div class="card-body">
                    <h5 class="card-title"><b> Admin </b></h5>
                    <hr>
                    <p class="card-text">
                    <div class="d-flex flex-column text-gray-600">



                        <div class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-3"></span>
                            view,add,edit,delete,
                            Products
                        </div>


                        <div class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-3"></span>
                            view,add,edit,delete,
                            Customers
                        </div>

                        <div class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-3"></span>
                            view,add,edit,delete,
                            Payments
                        </div>

                        <div class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-3"></span>
                            view,add,edit,delete,
                            Expenditure
                        </div>

                        <div class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-3"></span>
                            view,add,edit,delete,
                            User Management
                        </div>


                        <div class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-3"></span>
                            view,add,edit,delete,
                            Roles&amp;Permission
                        </div>

                    </div>
                    </p>

                </div>
                <div class="d-flex mb-3 ms-5">

                    <a href="{{ route('role_details') }}" class="btn btn-primary">View Role</a>
                    <a href="" data-bs-toggle="modal" data-bs-target="#edit_role" class="btn btn-light ms-2">Edit Role</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4 mb-3">
            <div class="card mb-5 h-100">
                <div class="card-body">
                    <h5 class="card-title"><b> Manager </b></h5>
                    <hr>
                    <p class="card-text">
                    <div class="d-flex flex-column text-gray-600">



                        <div class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-3"></span>
                            view,add,edit,delete,
                            Products
                        </div>


                        <div class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-3"></span>
                            view,add,edit,delete,
                            Customers
                        </div>

                        <div class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-3"></span>
                            view,add,edit,delete,
                            Payments
                        </div>

                        <div class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-3"></span>
                            view,add,edit,delete,
                            Expenditure
                        </div>

                        <div class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-3"></span>
                            view,add,edit,delete,
                            User Management
                        </div>


                        <div class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-3"></span>
                            view,add,edit,delete,
                            Roles&amp;Permission
                        </div>

                    </div>
                    </p>
                </div>
                <div class="d-flex mb-3 ms-5">

                    <a href="{{ route('role_details') }}" class="btn btn-primary">View Role</a>
                    <a href="" data-bs-toggle="modal" data-bs-target="#edit_role" class="btn btn-light ms-2">Edit Role</a>
                    <a  onclick="confirmDelete()" class="btn btn-danger ms-2">Delete Role</a>

                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4 mb-3 salesmen">
            <div class="card mb-5 h-100">
                <div class="card-body">
                    <h5 class="card-title"><b> Salesmen </b></h5>
                    <hr>
                    <p class="card-text">
                    <div class="d-flex flex-column text-gray-600">



                        <div class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-3"></span>
                            view,add,edit,
                            Products
                        </div>


                        <div class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-3"></span>
                            view,add,edit,
                            Customers
                        </div>

                        <div class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-3"></span>
                            view,add,edit,
                            Payments
                        </div>
                    </div>
                    </p>
                </div>
                <div class="d-flex mb-3 ms-5">

                    <a href="{{ route('role_details') }}" class="btn btn-primary">View Role</a>
                    <a href="" data-bs-toggle="modal" data-bs-target="#edit_role" class="btn btn-light ms-2">Edit Role</a>
                    <a  onclick="confirmDelete()" class="btn btn-danger ms-2">Delete Role</a>
                </div>
            </div>
        </div>

    </div>

    <!-- Content End -->

    <div class="card-body">
        <!-- Modal -->
        <div class="modal fade modal-close-out" id="add_role" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabelCloseOut" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabelCloseOut">Add a Role</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body scroll-y mx-5">
                        <form id="kt_modal_add_user_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                            method="POST">

                            <div class="fv-row mb-5 fv-plugins-icon-container">
                                <label class="required fw-bold fs-6 mb-2">Role Name</label>
                                <input type="text" name="role_name" class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Role Name" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bolder form-label mb-2">Role Permissions</label>
                                <!--end::Label-->
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                        <!--begin::Table body-->
                                        <tbody class="text-gray-600 fw-bold">
                                            <!--begin::Table row-->


                                            <tr>

                                                <td class="text-gray-800">Products</td>
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <div class="row ">
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Products.view" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        view
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Products.add" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        add
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Products.edit" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        edit
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Products.delete" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        delete
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>

                                                <td class="text-gray-800">Customers</td>
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <div class="row ">
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Customers.view" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        view
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Customers.add" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        add
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Customers.edit" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        edit
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Customers.delete" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        delete
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>



                                            <tr>

                                                <td class="text-gray-800">Payments</td>
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <div class="row ">
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Payments.view" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        view
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Payments.add" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        add
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Payments.edit" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        edit
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Payments.delete" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        delete
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>

                                                <td class="text-gray-800">Expenditure</td>
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <div class="row ">
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Expenditure.view" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        view
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Expenditure.add" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        add
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Expenditure.edit" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        edit
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Expenditure.delete" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        delete
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>



                                            <tr>

                                                <td class="text-gray-800">User Management</td>
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <div class="row ">
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="User Management.view" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        view
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="User Management.add" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        add
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="User Management.edit" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        edit
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="User Management.delete"
                                                                        name="permissions[]" id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        delete
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>

                                                <td class="text-gray-800">Roles&amp;Permission</td>
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <div class="row ">
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Roles&amp;Permission.view"
                                                                        name="permissions[]" id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        view
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Roles&amp;Permission.add"
                                                                        name="permissions[]" id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        add
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Roles&amp;Permission.edit"
                                                                        name="permissions[]" id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        edit
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Roles&amp;Permission.delete"
                                                                        name="permissions[]" id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        delete
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>


                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
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
    <div class="card-body">
        <!-- Modal -->
        <div class="modal fade modal-close-out" id="edit_role" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabelCloseOut" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabelCloseOut">Add a Role</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body scroll-y mx-5">
                        <form id="kt_modal_add_user_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                            method="POST">

                            <div class="fv-row mb-5 fv-plugins-icon-container">
                                <label class="required fw-bold fs-6 mb-2">Role Name</label>
                                <input type="text" name="role_name" class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Role Name" value="Salesmen">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bolder form-label mb-2">Role Permissions</label>
                                <!--end::Label-->
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                        <!--begin::Table body-->
                                        <tbody class="text-gray-600 fw-bold">
                                            <!--begin::Table row-->


                                            <tr>

                                                <td class="text-gray-800">Products</td>
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <div class="row ">
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Products.view" name="permissions[]"
                                                                        id="kt_permissions_core" checked>
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        view
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Products.add" name="permissions[]"
                                                                        id="kt_permissions_core" checked>
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        add
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Products.edit" name="permissions[]"
                                                                        id="kt_permissions_core" checked>
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        edit
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Products.delete" name="permissions[]"
                                                                        id="kt_permissions_core" checked>
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        delete
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>

                                                <td class="text-gray-800">Customers</td>
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <div class="row ">
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Customers.view" name="permissions[]"
                                                                        id="kt_permissions_core" checked>
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        view
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Customers.add" name="permissions[]"
                                                                        id="kt_permissions_core" checked>
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        add
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Customers.edit" name="permissions[]"
                                                                        id="kt_permissions_core" checked>
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        edit
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Customers.delete" name="permissions[]"
                                                                        id="kt_permissions_core" checked>
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        delete
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>



                                            <tr>

                                                <td class="text-gray-800">Payments</td>
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <div class="row ">
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Payments.view" name="permissions[]"
                                                                        id="kt_permissions_core" checked>
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        view
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Payments.add" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        add
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Payments.edit" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        edit
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Payments.delete" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        delete
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>

                                                <td class="text-gray-800">Expenditure</td>
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <div class="row ">
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Expenditure.view" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        view
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Expenditure.add" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        add
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Expenditure.edit" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        edit
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Expenditure.delete" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        delete
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>



                                            <tr>

                                                <td class="text-gray-800">User Management</td>
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <div class="row ">
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="User Management.view" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        view
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="User Management.add" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        add
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="User Management.edit" name="permissions[]"
                                                                        id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        edit
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="User Management.delete"
                                                                        name="permissions[]" id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        delete
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>

                                            <tr>

                                                <td class="text-gray-800">Roles&amp;Permission</td>
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <div class="row ">
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Roles&amp;Permission.view"
                                                                        name="permissions[]" id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        view
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Roles&amp;Permission.add"
                                                                        name="permissions[]" id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        add
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Roles&amp;Permission.edit"
                                                                        name="permissions[]" id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        edit
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label
                                                                    class=" form-check form-check-custom form-check-solid me-9 ">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="Roles&amp;Permission.delete"
                                                                        name="permissions[]" id="kt_permissions_core">
                                                                    <span class="form-check-label"
                                                                        for="kt_permissions_core">
                                                                        delete
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>


                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
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
@endsection
@section('js_after')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>

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

        function confirmDelete() {

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

                        $('.salesmen').hide();

                        myalert("success", 'Role Deleted Successfully', 1000);

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
