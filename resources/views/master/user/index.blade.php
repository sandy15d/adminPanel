@push('title')
    <title>Users</title>
@endpush
@extends('layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <x-layout.page-title title="User Page"/>
            <div class="row mb-3">
                <div class="col-sm">
                    <div class="d-flex justify-content-sm-end">
                        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addUserModal">
                            <i class="ri-add-line align-bottom me-1"></i> Create User
                        </button>
                    </div>
                </div>
            </div>

            <x-page.user-list :users="$users"/>
        </div>

        <!-- Add User Modal -->
        <x-modal.modal id="addUserModal" title="Add New User" size="modal-lg"/>
    </div>
@endsection
