{{-- <div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Full Name</label>
    <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full Name"
        value="">
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
    <input type="text" name="password" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Password">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('password')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-5">
    <label class="required fw-bold fs-6 mb-2">Role</label>
    <div data-kt-user-table-filter="form">
        <div class="mb-10">
            <select class="form-select form-select-solid fw-bolder select2-hidden-accessible" style="height:50px;"
                data-kt-select2="true" data-placeholder="Select Option" data-allow-clear="true"
                data-kt-user-table-filter="role" data-hide-search="true" name="role"
                data-select2-id="select2-data-7-dvwh" tabindex="-1" aria-hidden="true">
                <option value="student">Student</option>
                <option value="faculty">Faculty</option>
                <option value="librarian">Librarian</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        @error('role')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div> --}}

@php
    $data = $renew->issued_book->book;
@endphp
<div class="row g-0 align-items-center">
    @if ($data->image_url != null)
        <div class="col-5 pe-5">
            <img src="{{ $data->image_url }}" class="card-img sh-15 sh-sm-25 scale mb-5" alt="vertical content image">
        </div>
    @endif
    <div class="col ps-0">
        <div class="card-body ps-0">
            <h2 class="text-primary mb-0">{{ $data->name }}</h2>
            <h6 class="text-alternate">{{ $data->isbn_number }}</h6>
        </div>
    </div>
</div>


<div class="mb-3">
    <h4>Description</h4>
    <p class="text-alternate">{{ $data->desc }}</p>
</div>

<div class="mb-3">
    <h4>Availability</h4>
    <p class="text-alternate">{{ $data->remaining }}</p>
</div>

<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">New Return Date</label>
    <input type="date" name="return_date" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Return Date" value="{{ $renew->return_date }}" required>
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('password')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<input type="hidden" name="id" value="{{ $renew->id }}">

<div class="d-flex justify-content-end">
    <button type="button" class="btn btn-outline-primary me-2" data-bs-dismiss="modal">Close</button>
    <button class="btn btn-primary" type="submit">
        <span class="indicator-label">Approve</span>
    </button>
</div>
