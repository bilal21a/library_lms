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
                <h1 class="mb-0 pb-0 display-4" id="title">Details</h1>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-4">
            <div class="card mb-5">
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
            </div>
        </div>
        <div class="col-12 col-sm-8">
            <div class="card card-flush mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header pt-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2 class="d-flex align-items-center">
                            Users Assigned <span class="text-gray-600 fs-6 ms-1"></span>
                        </h2>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Search-->


                        <!--begin::Group actions-->

                        <!--end::Group actions-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_roles_view_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">

                                <th class="min-w-150px">#</th>
                                <th class="min-w-150px">User</th>
                                <th class="min-w-125px">Joined Date</th>
                                <th class="min-w-50px">Last Login</th>

                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">

                            <tr>
                                <td class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a>
                                            <div class="symbol-label">
                                                <img class="avatar" alt="profile"
                                                    src="{{ asset('acron/img/profile/profile-9.webp') }}" />
                                            </div>
                                        </a>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="d-flex flex-column">
                                        <span>dummy@gmail.com</span>
                                    </div>
                                </td>
                                <td>7 months ago</td>

                                <td>1 month ago</td>

                            </tr>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
    </div>

    <!-- Content End -->
@endsection
