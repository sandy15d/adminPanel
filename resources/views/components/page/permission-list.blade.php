<div class="row">
    <div class="card" id="permissionList">
        <div class="card-header">
            <div class="row">
                <div class="col-md-3">
                    <h5>Permission List</h5>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-card mb-3">
                        <table class="table table-hover table-sm" id="permissionTable">
                            <thead class="table-light">
                            <tr>
                                <th class="text-center">#</th>
                                <th>Group</th>
                                <th>Name</th>
                                <th>Assigned To</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($permissions as $permission)

                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td>{{$permission->group_name}}</td>
                                    <td>{{$permission->name}}</td>
                                    <td class="status">
                                        @foreach($permission->roles as $role)
                                            <span class="badge bg-primary">{{$role->name}}</span>
                                        @endforeach
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
            $('#permissionTable').DataTable({
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