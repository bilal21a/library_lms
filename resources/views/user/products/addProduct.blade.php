@extends('layouts.app')
@section('content')
    <div class="page-title-container">
        <div class="row">
            <!-- Title Start -->
            <div class="col-12 col-md-7">
                <h1 class="mb-0 pb-0 display-4" id="title">Add New Product</h1>

            </div>
        </div>
    </div>


    <div class="post d-flex flex-column-fluid mt-5" id="kt_post">
        <div id="kt_content_container" class="container  bg-white">

            @if ($errors->any())
                <div class="alert alert-danger offset-1 pb-5">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form {{-- action="{{ route('saveCustomer') }}" --}} method="post" enctype="multipart/form-data" id="add_customer">
                @csrf


                @include('user.customers.form.createOrUpdateCustomer')


            </form>
        </div>
    </div>
@endsection
