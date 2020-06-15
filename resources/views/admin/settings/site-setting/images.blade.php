@extends('admin.layout.app')

@section('content')
    @include('admin.partials.common.page-title', ['page_title' => 'Create New Permission'])
    <div>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Update Image fields</h4>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                        </div>
                    </div>
                    <div class="grid-body ">
                       <!--Form-->
                        {!! Form::open(['route' => 'dashboard.site-settings.update', 'method' => 'POST', 'files' => true]) !!}


                        <div class="form-group col-lg-12 col-md-12">
                            {!! Form::label('copy_right', 'Copy Right:') !!}
                            {!! Form::text('copy_right', getSiteSetting('copy_right') != null? getSiteSetting('copy_right'): null, ['class' => 'form-control']) !!}
                            {!! $errors->first('copy_right', '<div class="text-danger">:message</div>') !!}
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-lg-12">
                                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}


                    <!--Form End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection