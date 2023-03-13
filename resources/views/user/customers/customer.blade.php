@extends('layouts.app')
@section('css_after')
    <style>
        .data-table-rows table.dataTable td .form-check {
            pointer-events: auto;
        }

        .csv_content {
            display: none;
        }
    </style>
@endsection
@section('content')
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">
            <!-- Title Start -->
            <div class="col-12 col-md-7">
                <h1 class="mb-0 pb-0 display-4" id="title">Customer</h1>

            </div>
        </div>
    </div>

    <a href="{{ route('add_customer') }}" class="btn btn-primary">Add New Customer</a>
    <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#closeButtonOutExample">Add Customers in
        Bulk</a>
    <a href="{{ asset('Defualt/customer.csv') }}" class="btn btn-light">Export CSV</a>
    <a href="{{ route('customer') }}" class="btn btn-light btn-sm">
        <i class="bi bi-arrow-repeat"></i>
        Sync</a>
    {{-- <a href="#" class="btn btn-light btn-sm mark_all">Mark All</a> --}}
    <a href="javascript:void(0);" class="btn btn-sm btn-danger delete-all" onclick="ConfirmDelete()" style="display: none"
        data-url="">
        <i class="fa fa-trash"></i>
        @lang('Delete_Selected')
        {{-- (<span id="lengthcek" style="font-weight: bolder;">0 </span> ) --}}
    </a>

    <a class="btn btn-light all_select">
        Mark All

        <input type="checkbox" name="check_data" class=" mark_all " style=" margin-left:5px; cursor:pointer;"
            id="select-all" {{-- value="true" --}} />
    </a>
    <div class="row">

        <div class="col-12 col-sm-12">
            <div class="os-content" style="padding: 0px 15px; height: auto; width: 100%;">
                <div class="data-table-rows slim">
                    <!-- Controls Start -->

                    @php
                        $tableName = 'app_block';
                        $tableData = ['id', 'name', 'Address', 'Phone', 'Comment', 'balance'];
                    @endphp
                    @include('common.table.table')
                </div>

                {{-- CSV TABLE --}}
                <div class="data-table-rows  csv_content">
                    <!-- Controls Start -->

                    @php
                        $tableName = 'table_csv';
                        $tableData = ['id', 'name', 'Address', 'Phone', 'Comment', 'balance'];
                    @endphp
                    @include('common.table.csvTable')
                </div>
            </div>
        </div>

    </div>

    {{-- <section class="scroll-section" id="closeButtonOut"> --}}
    {{-- <div class="card mb-5"> --}}
    <div class="card-body">
        <!-- Modal -->
        <div class="modal fade modal-close-out" id="closeButtonOutExample" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabelCloseOut" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabelCloseOut">Add Customers In Bulk</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"><input type="file" name="csv_file" class="form-control" accept=".csv"
                            required="">
                        <a href="{{ asset('Defualt/customer.csv') }}" data-toggle="tooltip" data-placement="right"
                            title="" data-bs-original-title="CSV File">

                            <div class="d-flex mt-3">
                                <div>
                                    {{-- <i  class="fa fa-2x fa-download " aria-hidden="true"></i> --}}
                                    <i class="bi bi-cloud-arrow-down" style="color: #4495E8;font-size: 26px; "></i>
                                </div>
                                <div style="margin-left: 10px; margin-top:5px; color:#4495E8 ">

                                    <h3>Download Sample</h3>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="load_table()" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
    {{-- </section> --}}

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

                        $('.slim').hide();
                        $('.csv_content').hide();

                        myalert("success", 'Customer Deleted Successfully', 1000);

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
