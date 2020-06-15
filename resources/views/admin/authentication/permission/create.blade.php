@extends('admin.layout.app')

@section('content')
    @include('admin.partials.common.page-title', ['page_title' => 'Create New Permission'])
    <div>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Fields with * are required.</h4>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                        </div>
                    </div>
                    <div class="grid-body ">
                      @include('admin.authentication.permission.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection