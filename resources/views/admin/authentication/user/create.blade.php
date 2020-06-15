@extends('admin.layout.app')

@section('content')
    @include('admin.partials.common.page-title', ['page_title' => 'Create New User'])
    <div>
        <div class="row-fluid">
            <div class="span12">
                @include('admin.authentication.user.form')
            </div>
        </div>
    </div>
@endsection
