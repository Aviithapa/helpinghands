@if(isset($model))
    {{ Form::model($model, ['url' => route('dashboard.events.update', $model->id), 'method' => 'PUT','files' => true]) }}
@else
    {{ Form::open(['url' => route('dashboard.events.store'), 'method' => 'post', 'files' => true]) }}
@endif

            <div class="grid simple ">
                <div class="grid-title">
                    <h4>Events Info</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                    </div>
                </div>
                <div class="grid-body ">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('title', 'Title:', ['class' => 'form-label']) !!}
                                {!! Form::text('title', null, ['class' => 'form-control','required','maxlength'=>'190']) !!}
                                {!! $errors->first('title', '<div class="text-danger">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('slug', 'Slug:', ['class' => 'form-label']) !!}
                                {!! Form::text('slug', null, ['class' => 'form-control','required','maxlength'=>'190']) !!}
                                {!! $errors->first('slug', '<div class="text-danger">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('excerpt', 'Excerpt:', ['class' => 'form-label']) !!}
                                {!! Form::textarea('excerpt', null, ['class' => 'form-control','maxlength'=>'190']) !!}
                                {!! $errors->first('excerpt', '<div class="text-danger">:message</div>') !!}
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('Bank Account', 'Bank Account:', ['class' => 'form-label']) !!}
                                {!! Form::text('bank_Account', null, ['class' => 'form-control','maxlength'=>'190']) !!}
                                {!! $errors->first('bank_Account', '<div class="text-danger">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('bank_branch', 'Bank Branch:', ['class' => 'form-label']) !!}
                                {!! Form::text('bank_branch', null, ['class' => 'form-control','maxlength'=>'190']) !!}
                                {!! $errors->first('bank_branch', '<div class="text-danger">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="form-group">
                                {!! Form::label('content', 'Content:', ['class' => 'form-label']) !!}
                                {!! Form::textarea('content',null, ['class' => 'form-control ckeditor','id'=>'ckeditor']) !!}
                                {!! $errors->first('content', '<div class="text-danger">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('type', 'Type:', ['class' => 'form-label']) !!}
                                {!! Form::select('type',array('events' => 'Events') ,null, ['class' => 'form-control','maxlength'=>'190']) !!}
                                {!! $errors->first('type', '<div class="text-danger">:message</div>') !!}
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('start_date', 'Starting Date:', ['class' => 'form-label']) !!}
                                {!! Form::date('start_date', null, ['class' => 'form-control','required']) !!}
                                {!! $errors->first('start_date', '<div class="text-danger">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('end_date', 'Expire Date:', ['class' => 'form-label']) !!}
                                {!! Form::date('end_date', null, ['class' => 'form-control','required']) !!}
                                {!! $errors->first('end_date', '<div class="text-danger">:message</div>') !!}
                            </div>
                        </div>
                            @if($role==='administrator')
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('status', 'Status:', ['class' => 'form-label']) !!}
                                    {!! Form::select('status', getActiveInactiveStatus(), null, ['class' => 'form-control']) !!}
                                    {!! $errors->first('status', '<div class="text-danger">:message</div>') !!}
                                </div>
                            </div>
                            @endif





                    </div>

                </div>
            </div>


            <div class="grid simple ">
                <div class="grid-title">
                    <h4>Event Image</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                    </div>
                </div>

                <div class="grid-body ">
                    <div class="row">


                        <div class="col-md-12 col-lg-12">

                            @if(isset($model))
                                <img src="{{url(isset($model)?$model->getImage():imageNotFound())}}" height="250"
                                     id="events_pic_img">

                            @else
                                <img src="{{isset($model)?$model->getImage():imageNotFound()}}" height="250"
                                     id="events_pic_img">
                            @endif
                        </div>

                        <div class="form-group col-md-12 col-lg-12">
                            {!! Form::label('slider', 'Image:') !!}
                            <small>Size: 1600*622 px</small>
                            <input type="file" id="events_pic" name="events_pic_image"
                                   onclick="anyFileUploader('events_pic')">
                            <small id="slider_help_text" class="help-block"></small>
                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0"
                                 aria-valuemax="100"
                                 aria-valuenow="0">
                                <div id="events_pic_progress" class="progress-bar progress-bar-success"
                                     style="width: 0%">
                                </div>
                            </div>
                            <input type="hidden" id="events_pic_path" name="events_pic" class="form-control"
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
