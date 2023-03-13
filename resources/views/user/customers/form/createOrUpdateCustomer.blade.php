<div class="row mt-5">
    <div class="col-lg-8 offset-lg-2 col-sm-12 ">
        <div class="offset-2 pb-5">


            {{-- customer_name --}}
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class="required">@lang('Name')</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="@lang('Specify_Customer_Name')"></i>
                </label>
                <input type="text" class="form-control form-control-solid" placeholder="@lang('Name')"
                    autocomplete="off" name="customer_name" value="" />
            </div>


            {{-- customer_address --}}
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class="">@lang('Address')</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                        title="@lang('Specify_address')"></i>
                </label>
                <input type="text" class="form-control form-control-solid" placeholder="@lang('Address')"
                    autocomplete="off" name="customer_address" value="" />
            </div>


            {{-- customer_phone --}}
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class="">@lang('Phone')</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                        title="@lang('Specify_phone_number')"></i>
                </label>
                <input type="text" class="form-control form-control-solid" placeholder="@lang('Phone')"
                    autocomplete="off" name="customer_phone" value="" />
            </div>


            {{-- contact_person% --}}
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class=""> @lang('Contact_Person')</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                        title="@lang('Specify_Contact_Person')"></i>
                </label>
                <input type="text" class="form-control  form-control-solid" placeholder="@lang('Contact_Person')"
                    autocomplete="off" name="contact_person" value="">
            </div>


            {{-- comment --}}
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class="">@lang('Comment')</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                        title="@lang('Do_Comment')"></i>
                </label>
                <input type="text" class="form-control form-control-solid" placeholder="@lang('Comment')"
                    autocomplete="off" name="comment" value="" />
            </div>
            {{-- opening_balance --}}
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class="">@lang('Current_Balance')</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                        title="@lang('Write_down_your_Balance')"></i>
                </label>


                    <input type="text" class="form-control form-control-solid" placeholder="5000" autocomplete="off"
                        name="current_balance" />
            </div>


            {{-- <div class="row mb-6 my-5">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-bold fs-6"> @lang('Avatar')</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Image input-->
                    <div class="image-input image-input-outline" data-kt-image-input="true"
                        style="background-image: url({{ asset('assets/media/avatars/blank.png') }})">
                        <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-125px h-125px"
                                style="background-image: url({{ asset('storage/images/Customer/orignal/' . $customer->image) }})">
                            </div>
                            <div class="image-input-wrapper w-125px h-125px"
                                style="background-image: url({{ asset('Default/favicon.ico') }})">
                            </div>


                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" title="@lang('Change_Avatar')">
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <!--begin::Inputs-->
                            <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="image_remove" />
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="@lang('Cancel_Avatar')">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                            data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="@lang('Remove_Avatar')">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Remove-->
                    </div>
                    <!--end::Image input-->
                    <!--begin::Hint-->
                    <div class="form-text">@lang('Allowed_file_types'): png, jpg, jpeg.</div>
                    <!--end::Hint-->
                </div>
                <!--end::Col-->
            </div> --}}


        </div>
    </div>
</div>
<div class="card-footer d-flex justify-content-end py-6 px-9">
    <a href="{{ route('customer') }}" class="btn btn-white btn-active-light-primary me-2">
        @lang('Discard')
    </a>
    <button class="btn btn-primary btn-save">
        <span class="btn-text">@lang('Save_Changes')</span>
        {{-- <span class="spinner-border spinner-border-sm align-middle ms-2 btnLoader"></span> --}}
    </button>
</div>
