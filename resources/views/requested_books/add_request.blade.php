@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-sm-6 mb-5">

                    <h1 class="mb-0 pb-0 display-4" id="title">Add Requested</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-8 col-xxl-9 mb-5">
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row g-0 justify-content-center">
                            <div class="col-8">
                                <form method="POST" enctype="multipart/form-data" id="requested_books">
                                    @csrf
                                    <div class="fv-row mb-5 fv-plugins-icon-container">
                                        <label class="required fw-bold fs-6 mb-2">Select User</label>
                                        <select id="inputState" name="user_name" class="form-select">
                                            <option value="" selected disabled>Choose...</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('user_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-5 fv-plugins-icon-container">
                                        <label class="required fw-bold fs-6 mb-2">Book Name</label>
                                        <input type="text" name="book_name"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Book Name"
                                            value="">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('book_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-5 fv-plugins-icon-container">
                                        <label class="required fw-bold fs-6 mb-2">Author Name</label>
                                        <input type="text" name="author_name"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Author Name"
                                            value="">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('author_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-5 fv-plugins-icon-container">
                                        <label class="required fw-bold fs-6 mb-2">Subject</label>
                                        <input type="text" name="subject"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Subject"
                                            value="">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('subject')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="fv-row mb-5 fv-plugins-icon-container">
                                        <label class="required fw-bold fs-6 mb-2">Description</label>
                                        <input type="text" name="desc"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Description"
                                            value="">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('desc')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary" type="submit">
                                            <span class="indicator-label">Submit</span>
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('js_after')
    <script>
        $('#requested_books').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            console.log('formData: ', formData);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ route('requested_books.save_request') }}",
                data: formData,
                success: function(response) {

                    myalert("success", response, 5000);

                    document.getElementById("requested_books").reset();
                },
                error: function(xhr, status, error) {
                    myalert("error", xhr.responseJSON, 10000);
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });
    </script>
@endsection
