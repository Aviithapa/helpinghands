@if(isset($model))
    {{ Form::model($model, ['url' => route($commonRoute.'.update', $model->id), 'method' => 'PUT','files' => true]) }}
@else
    {{ Form::open(['url' => route($commonRoute.'.store'), 'method' => 'post', 'files' => true]) }}
@endif

<div class="grid simple ">
    <div class="grid-title">
        <h4> Info</h4>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
        </div>
    </div>
    <div class="grid-body ">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('title', 'Name:', ['class' => 'form-label']) !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('title', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('slug', 'Slug:', ['class' => 'form-label']) !!}
                    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('slug', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('content', 'Content:', ['class' => 'form-label']) !!}
                    {!! Form::textarea('content',null, ['class' => 'form-control text-editor','id'=>'text-editor']) !!}
                    {!! $errors->first('content', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('excerpt', 'Excerpt:', ['class' => 'form-label']) !!}
                    {!! Form::text('excerpt', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('excerpt', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('type', 'type:', ['class' => 'form-label']) !!}
                    {!! Form::select('type',array('pages' => 'pages') ,null, ['class' => 'form-control']) !!}
                    {!! $errors->first('type', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('meta_link', 'Meta Title:', ['class' => 'form-label']) !!}
                    {!! Form::text('meta_link', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('meta_link', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('meta_description', 'Meta Description:', ['class' => 'form-label']) !!}
                    {!! Form::text('meta_description',null, ['class' => 'form-control']) !!}
                    {!! $errors->first('meta_description', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="grid simple ">
        <div class="grid-title">
            <h4>Image</h4>
            <div class="tools">
                <a href="javascript:;" class="collapse"></a>
            </div>
        </div>

        <div class="grid-body ">
            <div class="row">


                <div class="col-md-12 col-lg-12">

                    @if(isset($model))
                        <img src="{{url(isset($model)?$model->getPostImage():imageNotFound())}}" height="250"
                             id="post_pic_img">

                    @else
                        <img src="{{isset($model)?$model->getPostImage():imageNotFound()}}" height="250"
                             id="post_pic_img">
                    @endif
                </div>

                <div class="form-group col-md-12 col-lg-12">
                    {!! Form::label('slider', 'Image:') !!}
                    <small>Size: 1600*622 px</small>
                    <input type="file" id="post_pic" name="post_pic_image"
                           onclick="anyFileUploader('post_pic')">
                    <small id="slider_help_text" class="help-block"></small>
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0"
                         aria-valuemax="100"
                         aria-valuenow="0">
                        <div id="post_pic_progress" class="progress-bar progress-bar-success"
                             style="width: 0%">
                        </div>
                    </div>
                    <input type="hidden" id="post_pic_path" name="post_pic" class="form-control"
                           value="{{isset($model)?$model->image:''}}"/>
                    {!! $errors->first('image', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>


        </div>
    </div>
    <div class="grid simple ">
        <div class="grid-title">
            <h4>Icon Image</h4>
            <div class="tools">
                <a href="javascript:;" class="collapse"></a>
            </div>
        </div>

        <div class="grid-body ">
            <div class="row">


                <div class="col-md-12 col-lg-12">
                    @if(isset($model))
                        <img src="{{url(isset($model)?$model->getLogoImage():imageNotFound())}}" height="250"
                             id="logo_image_img">

                    @else
                        <img src="{{isset($model)?$model->getLogoImage():imageNotFound()}}" height="250"
                             id="logo_image_img">
                    @endif
                </div>

                <div class="form-group col-md-12 col-lg-12">
                    {!! Form::label('slider', 'Logo Image:') !!}
                    <small>Size: 60*60 px</small>
                    <input type="file" id="logo_image" name="logo_image_image"
                           onclick="anyFileUploader('logo_image')">
                    <small id="slider_help_text" class="help-block"></small>
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0"
                         aria-valuemax="100"
                         aria-valuenow="0">
                        <div id="logo_image_progress" class="progress-bar progress-bar-success"
                             style="width: 0%">
                        </div>
                    </div>
                    <input type="hidden" id="logo_image_path" name="logo_image" class="form-control"
                           value="{{isset($model)?$model->logo_image:''}}"/>
                    {!! $errors->first('logo_image', '<div class="text-danger">:message</div>') !!}
                </div>
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
