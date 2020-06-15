@extends('admin.layout.app')

@section('content')
    @include('admin.partials.common.page-title', ['page_title' => 'Edit User'])
    <div>
        <div class="row-fluid">
            <div class="span12">
                @include('admin.authentication.user.form', ['model' => $user])
            </div>
        </div>
    </div>
@endsection
