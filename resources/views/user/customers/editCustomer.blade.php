@extends('layouts.app')
@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container  bg-white">
            <div class="row gy-5 g-xl-8">
                <div class="col-md-12">
                    <div class="mb-13 text-center mt-13">
                        <h1 class="mb-3">Edit Details</h1>
                    </div>
                </div>
            </div>
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
