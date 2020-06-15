@extends('admin.layout.app')

@section('content')
    @include('admin.partials.common.page-title', ['page_title' => 'Create New Team Member'])
    <div>
        <div class="row-fluid">
            <div class="span12">
                @include('admin.web-site.team.form')
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush