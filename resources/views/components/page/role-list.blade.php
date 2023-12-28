<div class="col-xl-3 col-lg-3 col-md-3">
    <div class="card">
        <div class="card-body d-flex">
            <div class="flex-grow-1">
                <h4>{{$role->name}}</h4>
                <h6 class="text-muted fs-13 mb-0">Total User : {{$role->users_count}}</h6>
            </div>
            <div class="flex-shrink-0 avatar-sm">
                @if($role->name!=='Super Admin')
                    <div class="avatar-title bg-warning-subtle text-warning fs-20 rounded">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                           class="role-edit-modal"><i class="ri ri-pencil-line text-primary-emphasis"></i></a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

