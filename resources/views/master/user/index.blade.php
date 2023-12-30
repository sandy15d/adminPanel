@push('title')
    <title>Users</title>
@endpush
@extends('layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <x-layout.page-title title="User Page"/>
           <x-page.new-page-navigation title="Create New User" route="user.create"/>
            <x-page.user-list :users="$users"/>
        </div>
    </div>
@endsection

