@extends('admin.layout.app')

@section('content')
    @include('admin.partials.common.page-title', ['page_title' => 'Create New Partner'])
    <div>
        <div class="row-fluid">
            <div class="span12">
                @include('admin.web-site.partner.form')
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush