@push('title')
    <title>Users</title>
@endpush
@extends('layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <x-layout.page-title title="Create New User"/>
            <div class="row">
                <div class="col-lg-6">
                    <x-page.user.create-user :roles="$roles"/>
                </div>
            </div>
        </div>

    </div>
@endsection
