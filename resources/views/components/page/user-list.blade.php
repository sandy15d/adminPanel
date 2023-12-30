<div class="row">
    <div class="card" id="userList">
        <div class="card-header">
            <div class="row">
                <div class="col-md-3">
                    <h5>User List</h5>
                </div>
                <div class="col-md-auto ms-auto">
                    <div class="d-flex align-items-center">
                        <select class="form-control form-select mb-0">
                            <option value="">Select Role</option>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-card mb-3">
                        <table class="table table-hover table-sm" id="userTable">
                            <thead class="table-light">
                            <tr>
                                <th class="text-center">#</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @foreach($user->roles as $role)
                                            <span class="badge bg-primary">{{$role->name}}</span>
                                        @endforeach
                                    </td>
                                    <td class="text-center">
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> </a>

                                            </li>
                                            <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top" title="Delete">
                                                <a href="javascript:void(0);" class="text-muted d-inline-block" data-bs-toggle="modal"
                                                   data-bs-target="#removeUserModal" onclick="removeUser({{$user->id}});">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="removeUserModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
            </div>
            <form action="{{'user.destroy'}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                   colors="primary:#f7b84b,secondary:#f06548"
                                   style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you Sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this User ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn w-sm btn-danger" id="remove-user">Yes, Delete It!</button>
                    </div>
                </div>
            </form>


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

@push('script')
    <script>
        $(document).ready(function () {
            $('#userTable').DataTable({
                searching: true,
                dom: "<'row'<'col-sm-9'B><'col-sm-3 text-right'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-4'i><'col-sm-4 text-center'l><'col-sm-4'p>>",
                buttons: [
                    {
                        extend: 'excelHtml5',
                        text: '<i class="las la-file-excel" style="font-size: 18px;"></i>Excel',
                        titleAttr: 'Excel',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="las la-file-pdf" style="font-size: 18px;"></i> PDF',
                        titleAttr: 'PDF',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'print',
                        text: '<i class="las la-print" style="font-size: 18px;"></i> Print',
                        titleAttr: 'Print',
                        customize: function (win) {
                            $(win.document.body)
                                .css('font-size', '10pt');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        },
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                ],


            });
        });
        function removeUser(id) {
            //change form action to delete
            $('#removeUserModal form').attr('action', 'user/' + id);
        }
    </script>

@endpush