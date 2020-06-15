@if(isset($model))
    {{ Form::model($model, ['url' => route('dashboard.sliders.update', $model->id), 'method' => 'PUT','files' => true]) }}
@else
    {{ Form::open(['url' => route('dashboard.sliders.store'), 'method' => 'post', 'files' => true]) }}
@endif

<div class="grid simple ">
    <div class="grid-title">
        <h4>Gallery Info</h4>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
        </div>
    </div>
    <div class="grid-body ">

        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('name', 'Name:', ['class' => 'form-label']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
                </div>

            </div>

            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('title', 'Title:', ['class' => 'form-label']) !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('title', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('link', 'Link:', ['class' => 'form-label']) !!}
                    {!! Form::text('link', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('link', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('status', 'Status:', ['class' => 'form-label']) !!}
                    {!! Form::select('status',getStatusList() ,null, ['class' => 'form-control']) !!}
                    {!! $errors->first('status', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
        </div>

    </div>
</div>

<div class="grid simple ">
    <div class="grid-title">
        <h4>Gallery Image</h4>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
        </div>
    </div>
    <div class="grid-body ">
        <div class="row">

            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                    {!! Form::label('type', 'Type:', ['class' => 'form-label']) !!}
                    {!! Form::select('type',getSliderType() ,null, ['class' => 'form-control']) !!}
                    {!! $errors->first('type', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

            <div class="col-md-12 col-lg-12">
                @if(isset($model))
                    @if($model->type == 'image')
                        <img src="{{isset($model)?$model->getImage():imageNotFound()}}" height = "250" id="slider_img">
                    @else
                        <video width="320" height="240" controls>
                            <source src="{{$model->getImage()}}" type="video/mp4">
                        </video>
                    @endif
                @else
                    <img src="{{isset($model)?$model->getImage():imageNotFound()}}" height = "250" id="slider_img">
                @endif
            </div>

            <div class="form-group col-md-12 col-lg-12">
                {!! Form::label('slider', 'Image:') !!}
                <small>Size: 1600*622 px</small>
                <input type="file" id="slider" name="slider_image" onclick="anyFileUploader('slider')">
                <small id="slider_help_text" class="help-block"></small>
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                    <div id="slider_progress" class="progress-bar progress-bar-success" style="width: 0%">
                    </div>
                </div>
                <input  type="hidden" id="slider_path" name="image" class="form-control" value="{{isset($model)?$model->image:''}}"/>
                {!! $errors->first('image', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
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


{{ Form::close() }}


@push('scripts')
    @include('admin.partials.common.file-upload');
@endpush
