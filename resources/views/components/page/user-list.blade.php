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
                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
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
    </script>

@endpush