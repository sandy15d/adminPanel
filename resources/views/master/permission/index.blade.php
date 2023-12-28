@push('title')
    <title>Permissions</title>
@endpush
@extends('layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <x-layout.page-title title="Permission Page"/>
            <x-page.permission-list :permissions="$permissions"/>
        </div>
    </div>
@endsection