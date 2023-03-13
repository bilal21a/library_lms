<div class="data-table-rows slim">
    <!-- Table Start -->
    <div class="data-table-responsive-wrapper">
        <table id="{{ $tableName }}" class="data-table nowrap hover dataTable no-footer w-100" role="grid">
            <thead>
                <tr role="row">
                    @foreach ($tableData as $data)
                        @if ($data == 'delete_btn')
                            <th><button class="btn btn-primary delete_all">Delete </button></th>
                        @else
                            <th class="text-muted text-small text-uppercase">{{ __($data) }}</th>
                        @endif
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <img class="avatar" alt="profile" src="{{asset('acron/img/profile/profile-9.webp')}}" /></td>
                    <td>dummy@gmail.com</td>
                    <td>admin.</td>
                    <td>5 min ago.</td>
                    <td>active.</td>
                    <td>March22,2023.</td>
                    <td><a href="" data-bs-toggle="modal" data-bs-target="#closeButtonOutExample"><i class="bi bi-pen"></i></a>
                        <a onclick="ConfirmDelete()"><i class="bi bi-trash text-danger"></i></a>
                    </td>
                </tr>
                <tr>
                    <td> <img class="avatar" alt="profile" src="{{asset('acron/img/profile/profile-9.webp')}}" /></td>
                    <td>dummy@gmail.com</td>
                    <td>salesmen.</td>
                    <td>5 min ago.</td>
                    <td>active</td>
                    <td>March22,2023.</td>
                    <td><a href="" data-bs-toggle="modal" data-bs-target="#closeButtonOutExample"><i class="bi bi-pen"></i></a>
                        <a onclick="ConfirmDelete()"><i class="bi bi-trash text-danger"></i></a>
                    </td>
                </tr>
                <tr class="delete">
                    <td> <img class="avatar" alt="profile" src="{{asset('acron/img/profile/profile-9.webp')}}" /></td>
                    <td>dummy@gmail.com</td>
                    <td>manager.</td>
                    <td>5 min ago.</td>
                    <td>active</td>
                    <td>March22,2023.</td>

                    <td><a href="" data-bs-toggle="modal" data-bs-target="#closeButtonOutExample"><i class="bi bi-pen"></i></a>
                        <a onclick="ConfirmDelete()"><i class="bi bi-trash text-danger"></i></a>
                    </td>
                </tr>
                <tr>
                    <td> <img class="avatar" alt="profile" src="{{asset('acron/img/profile/profile-9.webp')}}" /></td>
                    <td>dummy@gmail.com</td>
                    <td>salesmen</td>
                    <td>5 min ago.</td>
                    <td>active</td>
                    <td>March22,2023.</td>

                    <td><a href="" data-bs-toggle="modal" data-bs-target="#closeButtonOutExample"><i class="bi bi-pen"></i></a>
                        <a onclick="ConfirmDelete()"><i class="bi bi-trash text-danger"></i></a>
                    </td>
                </tr>
                <tr>
                    <td> <img class="avatar" alt="profile" src="{{asset('acron/img/profile/profile-9.webp')}}" /></td>
                    <td>dummy@gmail.com</td>
                    <td>salesmen.</td>
                    <td>5 min ago.</td>
                    <td>active</td>
                    <td>March22,2023.</td>

                    <td><a href="" data-bs-toggle="modal" data-bs-target="#closeButtonOutExample"><i class="bi bi-pen"></i></a>
                        <a onclick="ConfirmDelete()"><i class="bi bi-trash text-danger"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Table End -->
</div>
