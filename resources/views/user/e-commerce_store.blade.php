@extends('layouts.app')
@section('css_after')
    <style>
        .data-table-rows table.dataTable td .form-check {
            pointer-events: auto;
        }

        .shopify_img {
            vertical-align: middle;
            width: 151px;
            height: 151px;
            border-radius: 50%;
        }

        .progress-bar {
            position: relative;
            height: 10px;
            width: 200px;
            background: white;
            border-radius: 25px;
            border: 2px solid white;
            background-color: blue);
            /* box-shadow: 0 0 32px blue; */
        }

        .progress-fill {
            position: absolute;
            height: 20px;
            width: 0%;
            animation: progress-forward 3s;
            animation-fill-mode: forwards;
            background: rgb(34, 193, 195);
            background: linear-gradient(90deg,
                    rgba(34, 193, 195, 1) 0%,
                    rgb(45 253 51) 100%);
            border-radius: 15px;
        }

        @keyframes progress-forward {
            0% {
                width: 0%;
            }

            25% {
                width: 50%;
            }

            50% {
                width: 75%;
            }

            75% {
                width: 85%;
            }

            100% {
                width: 100%;
            }
        }

        ;
    </style>
@endsection
@section('content')
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">

            <!-- Title Start -->
            <div class="col-12 col-md-7">
                <h1 class="mb-0 pb-0 display-4" id="title">E- Commerce Stores</h1>

            </div>
        </div>
    </div>

    <div class="row">


        <div class="col-12 col-sm-6  mb-3">
            <div class="card mb-5 ">
                <div class="card-body">
                    <h5 class="card-title"><b> Shopify </b></h5>
                    <hr>
                    <p class="card-text">
                    <div class="m-auto text-center">
                        <img class="shopify_img" src="{{ asset('store/Shopify-Emblem.png') }}" alt="">
                    </div>
                    </p>

                </div>
                <div class="d-flex mb-2 m-auto">

                    <a href="" data-bs-toggle="modal" data-bs-target="#shopify" class="btn btn-primary ms-2 data_model">Sync
                        Data</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6  mb-3">
            <div class="card mb-5 ">
                <div class="card-body">
                    <h5 class="card-title"><b> Amazon </b></h5>
                    <hr>
                    <p class="card-text">
                    <div class="m-auto text-center">
                        <img class="shopify_img" src="{{ asset('store/amazon.png') }}" alt="">
                    </div>
                    </p>

                </div>
                <div class="d-flex mb-2 m-auto">

                    <a href="" data-bs-toggle="modal" data-bs-target="#amazon" class="btn btn-primary ms-2 data_model">Sync
                        Data</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6  mb-3">
            <div class="card mb-5 ">
                <div class="card-body">
                    <h5 class="card-title"><b> Ebay </b></h5>
                    <hr>
                    <p class="card-text">
                    <div class="m-auto text-center">
                        <img class="shopify_img" src="{{ asset('store/ebay.png') }}" alt="">
                    </div>
                    </p>

                </div>
                <div class="d-flex mb-2 m-auto">

                    <a href="" data-bs-toggle="modal" data-bs-target="#ebay" class="btn btn-primary ms-2 data_model">Sync
                        Data</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6  mb-3">
            <div class="card mb-5 ">
                <div class="card-body">
                    <h5 class="card-title"><b> ETSY </b></h5>
                    <hr>
                    <p class="card-text">
                    <div class="m-auto text-center">
                        <img class="shopify_img" src="{{ asset('store/etsy.png') }}" alt="">
                    </div>
                    </p>

                </div>
                <div class="d-flex mb-2 m-auto">

                    <a href="" data-bs-toggle="modal" data-bs-target="#etsy"
                        class="btn btn-primary data_model ms-2">Sync
                        Data</a>
                </div>
            </div>
        </div>


    </div>

    <!-- Content End -->
    <div class="card-body">
        <!-- Modal -->
        <div class="modal fade modal-close-out" id="shopify" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabelCloseOut" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabelCloseOut">Shopify</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body scroll-y mx-5">
                        <div class="m-auto text-center">
                            <img class="shopify_img" src="{{ asset('store/Shopify-Emblem.png') }}" alt="">
                        </div>
                        <div class="progress_bar">

                            <div class="progress-bar m-auto">
                                <div class="progress-fill"></div>
                            </div>
                            <p class="task_complete text-center" style="display: none"> <b
                                    style="font-size: 20px">Synchronization Complete</b> </p>
                        </div>

                    </div>
                    {{-- <div class="modal-footer">
                    <button type="button" onclick="load_table()" class="btn btn-primary">Save changes</button>
                </div> --}}
                </div>
            </div>
        </div>
        <div class="modal fade modal-close-out" id="amazon" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabelCloseOut" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabelCloseOut">Amazon</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body scroll-y mx-5">
                        <div class="m-auto text-center">
                            <img class="shopify_img" src="{{ asset('store/amazon.png') }}" alt="">
                        </div>
                        <div class="progress_bar">

                            <div class="progress-bar m-auto">
                                <div class="progress-fill"></div>
                            </div>
                            <p class="task_complete text-center" style="display: none"> <b
                                    style="font-size: 20px">Synchronization Complete</b> </p>
                        </div>

                    </div>
                    {{-- <div class="modal-footer">
                    <button type="button" onclick="load_table()" class="btn btn-primary">Save changes</button>
                </div> --}}
                </div>
            </div>
        </div>
        <div class="modal fade modal-close-out" id="ebay" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabelCloseOut" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabelCloseOut">Ebay</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body scroll-y mx-5">
                        <div class="m-auto text-center">
                            <img class="shopify_img" src="{{ asset('store/ebay.png') }}" alt="">
                        </div>
                        <div class="progress_bar">

                            <div class="progress-bar m-auto">
                                <div class="progress-fill"></div>
                            </div>
                            <p class="task_complete text-center" style="display: none"> <b
                                    style="font-size: 20px">Synchronization Complete</b> </p>
                        </div>

                    </div>
                    {{-- <div class="modal-footer">
                    <button type="button" onclick="load_table()" class="btn btn-primary">Save changes</button>
                </div> --}}
                </div>
            </div>
        </div>
        <div class="modal fade modal-close-out" id="etsy" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabelCloseOut" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabelCloseOut">ETSY</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body scroll-y mx-5">
                        <div class="m-auto text-center">
                            <img class="shopify_img" src="{{ asset('store/etsy.png') }}" alt="">
                        </div>
                        <div class="progress_bar">

                            <div class="progress-bar m-auto">
                                <div class="progress-fill"></div>
                            </div>
                            <p class="task_complete text-center" style="display: none"> <b
                                    style="font-size: 20px">Synchronization Complete</b> </p>
                        </div>

                    </div>
                    {{-- <div class="modal-footer">
                    <button type="button" onclick="load_table()" class="btn btn-primary">Save changes</button>
                </div> --}}
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('js_after')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <script>

            $('.data_model').click(function() {
                setTimeout(function() {
                    console.log('hello');
                    $('.task_complete').show();
                    // $(this).val('Submit');
                }, 4000);

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
