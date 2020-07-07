@if(isset($model))
    {{ Form::model($model, ['url' => route('dashboard.donation.update', $model->id), 'method' => 'PUT','files','post' => true]) }}
@else
    {{ Form::open(['url' => route('dashboard.donation.store'), 'method' => 'post', 'files' => true]) }}
@endif

<div class="grid simple ">
    <div class="grid-title">
        <h4>User Info</h4>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
        </div>
    </div>
    <div class="grid-body ">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('Name', 'Name:', ['class' => 'form-label']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control','required','maxlength'=>'190']) !!}
                    {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('Email', 'Email:', ['class' => 'form-label']) !!}
                    {!! Form::text('email', null, ['class' => 'form-control','maxlength'=>'190']) !!}
                    {!! $errors->first('email', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('Address', 'Address:', ['class' => 'form-label']) !!}
                    {!! Form::text('address', null, ['class' => 'form-control','maxlength'=>'190']) !!}
                    {!! $errors->first('address', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('Phone Number', 'Phone Number:', ['class' => 'form-label']) !!}
                    {!! Form::text('phoneNumber', null, ['class' => 'form-control','maxlength'=>'190']) !!}
                    {!! $errors->first('phoneNumber', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

        </div>

    </div>
</div>


<div class="grid simple ">
    <div class="grid-title">
        <h4>Voucher Image</h4>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
        </div>
    </div>

    <div class="grid-body ">
        <div class="row">


            <div class="col-md-12 col-lg-12">

                @if(isset($model))
                    <img src="{{url(isset($model)?$model->getImage():imageNotFound())}}" height="250"
                         id="voucher_img">

                @else
                    <img src="{{isset($model)?$model->getImage():imageNotFound()}}" height="250"
                         id="voucher_img">
                @endif
            </div>

            <div class="form-group col-md-12 col-lg-12">
                {!! Form::label('slider', 'Image:') !!}
                <small>Size: 1600*622 px</small>
                <input type="file" id="voucher" name="voucher_image"
                       onclick="anyFileUploader('voucher')">
                <small id="slider_help_text" class="help-block"></small>
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0"
                     aria-valuemax="100"
                     aria-valuenow="0">
                    <div id="voucher_progress" class="progress-bar progress-bar-success"
                         style="width: 0%">
                    </div>
                </div>
                <input type="hidden" id="voucher_path" name="voucher" class="form-control"
                       value="{{isset($model)?$model->image:''}}"/>
                {!! $errors->first('image', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="submit" value="Save" class="btn btn-primary"/>
                    <a href="{{URL::previous()}}" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>




{{ Form::close() }}


@push('scripts')
    @include('admin.partials.common.file-upload');
    <script src="{{asset('assets/plugins/ckeditor_4.14.0_standard_easyimage/ckeditor/ckeditor.js')}}">
    </script>
    <script>

        CKEDITOR.replace( 'ckeditor', {
            // Load the timestamp plugin.
            extraPlugins: 'uploadfile'
        });
    </script>


@endpush
