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
    <h4>Category</h4>
    <p class="text-alternate"><span class="badge" style="background:{{ $data->category->background }}">&nbsp;&nbsp;</span>{{ $data->category->name }}</p>
</div>
<div class="mb-3">
    <h4>Issue Date</h4>
    <p class="text-alternate">{{ $return_book->issued_date }}</p>
</div>
<div class="mb-3">
    <h4>Return Date</h4>
    <p class="text-alternate">{{ $return_book->return_date }}</p>
</div>

<form id="issued_book_filter" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="fv-row mb-5 fv-plugins-icon-container">
        <label class="required fw-bold fs-6 mb-2">Fine</label>
        <input type="text" name="fine" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Fine"
            value="">
        <div class="fv-plugins-message-container invalid-feedback"></div>
        @error('fine')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="fv-row mb-5 fv-plugins-icon-container">
        <label class="required fw-bold fs-6 mb-2">Quantity</label>
        <input type="text" name="quantity" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Quantity"
            value="">
        <div class="fv-plugins-message-container invalid-feedback"></div>
        @error('quantity')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


    <button class="btn btn-icon btn-icon-start btn-primary" type="submit">
        <i data-acorn-icon="search"></i>
        <span>Submit</span>
    </button>
</form>

