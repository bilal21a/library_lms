@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h1 class="mb-0 pb-0 display-4" id="title">Users</h1>
                </div>
            </div>
        </div>

        <button class="btn btn-icon btn-icon-start btn-primary mb-4" type="button" data-bs-toggle="modal"
            onclick="addFormShow()" data-bs-target="#myModal">
            <i data-acorn-icon="plus"></i>
            <span>Add User</span>
        </button>

        {{-- -----Table----- --}}
        @php
            $tableName = 'datatable';
            $tableData = ['ID', 'Name', 'Email', 'Created At', 'Updated At', 'Actions'];
        @endphp
        @include('common.table.table')
    </div>

    @include('common.modal.add_edit_modal')
@endsection

@section('js_after')
    <script>
        var tabelDataArray = ['id', 'name', 'email', 'created_at', 'updated_at', 'action'];
        var data_url="{{ route('get_users') }}"
        @include('common.js.get_data')

        function addFormShow() {
            event.preventDefault();
            $('#edit_data_form').html('');
            $('#modalTitle').html('Add User');
            var url = "{{ route('user_add_show') }}";

            $.ajax({
                type: 'GET',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    $('#add_data_form').html(data);
                },
            });
        }
        $('#add_data_form').on('submit', function(e) {
            e.preventDefault();
            let singleDeleteDraw = {
                ...dataTable
            };
            var formData = new FormData(this);
            console.log('formData: ', formData);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ route('add_user') }}",
                data: formData,
                success: function(response) {
                    console.log('response: ', response);
                    singleDeleteDraw._fnDraw();
                    myalert("success", response, 5000);
                    $('#myModal').modal('hide')
                },
                error: function(xhr, status, error) {
                    console.log('error: ', xhr.responseJSON);
                    myalert("error", xhr.responseJSON, 10000);
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });

        function editFormShow(id) {
            event.preventDefault();
            $('#modalTitle').html('Edit User');
            $('#add_data_form').html('');
            var url = '{{ route('edit_user', ':id') }}';
            url = url.replace(':id', id);

            $.ajax({
                type: 'GET',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    $('#edit_data_form').html(data);
                },
            });
        }
        $('#edit_data_form').on('submit', function(e) {
            e.preventDefault();
            let singleDeleteDraw = {
                ...dataTable
            };

            var formData = new FormData(this);
            console.log('formData: ', formData);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ route('update_user') }}",
                data: formData,
                success: function(response) {
                    console.log('response: ', response);
                    singleDeleteDraw._fnDraw();
                    myalert("success", response, 5000);
                    $('#myModal').modal('hide')
                },
                error: function(xhr, status, error) {
                    console.log('error: ', xhr.responseJSON);
                    myalert("error", xhr.responseJSON, 10000);
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });

        function deleteData(id) {
            let singleDeleteDraw = {
                ...dataTable
            };
            Swal.fire({
                title: 'Are you sure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!'
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.get(`{{ url('/delete_user') }}/` + id)
                        .then(function(response) {
                            singleDeleteDraw._fnDraw();
                            Swal.fire(
                                'Deleted!',
                                'Your data has been Deleted.',
                                'success'
                            )
                        })
                        .catch(function(error) {});
                }
            })
        }
    </script>
@endsection
