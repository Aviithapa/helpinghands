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
                       <!--Form-->
                        {!! Form::open(['route' => 'dashboard.site-settings.update', 'method' => 'POST', 'files' => true]) !!}


                        <div class="form-group col-lg-12 col-md-12">
                            {!! Form::label('site_title', 'Site Title:') !!}
                            {!! Form::text('site_title', getSiteSetting('site_title') != null? getSiteSetting('site_title'): null, ['class' => 'form-control']) !!}
                            {!! $errors->first('site_title', '<div class="text-danger">:message</div>') !!}
                        </div>

                        <div class="form-group col-lg-12 col-md-12">
                            {!! Form::label('meta_keyword', 'Meta Keyword:') !!}
                            {!! Form::text('meta_keyword', getSiteSetting('meta_keyword') != null? getSiteSetting('meta_keyword'): null, ['class' => 'form-control']) !!}
                            {!! $errors->first('meta_keyword', '<div class="text-danger">:message</div>') !!}
                        </div>

                        <div class="form-group col-lg-12 col-md-12">
                            {!! Form::label('meta_description', 'Meta Description:') !!}
                            {!! Form::textarea('meta_description', getSiteSetting('meta_description') != null? getSiteSetting('meta_description'): null, ['class' => 'form-control']) !!}
                            {!! $errors->first('meta_description', '<div class="text-danger">:message</div>') !!}
                        </div>

                        <div class="form-group col-lg-12 col-md-12">
                            {!! Form::label('contact_details', 'Contact Details:') !!}
                            {!! Form::textArea('contact_details', getSiteSetting('contact_details') != null? getSiteSetting('contact_details'): null, ['class' => 'form-control text-editor']) !!}
                            {!! $errors->first('contact_details', '<div class="text-danger">:message</div>') !!}
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            {!! Form::label('social_fb', 'Facebook Link:') !!}
                            {!! Form::text('social_fb', getSiteSetting('social_fb') != null? getSiteSetting('social_fb'): null, ['class' => 'form-control']) !!}
                            {!! $errors->first('social_fb', '<div class="text-danger">:message</div>') !!}
                        </div>


                        <div class="form-group col-lg-6 col-md-6">
                            {!! Form::label('social_twitter', 'Twitter Link:') !!}
                            {!! Form::text('social_twitter', getSiteSetting('social_twitter') != null? getSiteSetting('social_twitter'): null, ['class' => 'form-control']) !!}
                            {!! $errors->first('social_twitter', '<div class="text-danger">:message</div>') !!}
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            {!! Form::label('social_youtube', 'Youtube Link:') !!}
                            {!! Form::text('social_youtube', getSiteSetting('social_youtube') != null? getSiteSetting('social_youtube'): null, ['class' => 'form-control']) !!}
                            {!! $errors->first('social_youtube', '<div class="text-danger">:message</div>') !!}
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            {!! Form::label('social_google', 'Google Link:') !!}
                            {!! Form::text('social_google', getSiteSetting('social_google') != null? getSiteSetting('social_google'): null, ['class' => 'form-control']) !!}
                            {!! $errors->first('social_google', '<div class="text-danger">:message</div>') !!}
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            {!! Form::label('social_instagram', 'Instagram Link:') !!}
                            {!! Form::text('social_instagram', getSiteSetting('social_instagram') != null? getSiteSetting('social_instagram'): null, ['class' => 'form-control']) !!}
                            {!! $errors->first('social_instagram', '<div class="text-danger">:message</div>') !!}
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            {!! Form::label('social_mail', 'Mail:') !!}
                            {!! Form::text('social_mail', getSiteSetting('social_mail') != null? getSiteSetting('social_mail'): null, ['class' => 'form-control']) !!}
                            {!! $errors->first('social_mail', '<div class="text-danger">:message</div>') !!}
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            {!! Form::label('social_phone', 'Phone:') !!}
                            {!! Form::text('social_phone', getSiteSetting('social_phone') != null? getSiteSetting('social_phone'): null, ['class' => 'form-control']) !!}
                            {!! $errors->first('social_phone', '<div class="text-danger">:message</div>') !!}
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            {!! Form::label('opening_time', 'Opening time:') !!}
                            {!! Form::text('opening_time', getSiteSetting('opening_time') != null? getSiteSetting('opening_time'): null, ['class' => 'form-control']) !!}
                            {!! $errors->first('opening_time', '<div class="text-danger">:message</div>') !!}
                        </div>

                        <div class="form-group col-lg-12 col-md-12">
                            {!! Form::label('footer', 'Footer:') !!}
                            {!! Form::text('footer', getSiteSetting('footer') != null? getSiteSetting('footer'): null, ['class' => 'form-control']) !!}
                            {!! $errors->first('footer', '<div class="text-danger">:message</div>') !!}
                        </div>


                        <div class="form-group col-lg-12 col-md-12">
                            {!! Form::label('footer_info', 'Footer Info:') !!}
                            {!! Form::textArea('footer_info', getSiteSetting('footer_info') != null? getSiteSetting('footer_info'): null, ['class' => 'form-control text-editor']) !!}
                            {!! $errors->first('footer_info', '<div class="text-danger">:message</div>') !!}
                        </div>

                        <div class="form-group col-lg-12 col-md-12">
                            {!! Form::label('copy_right', 'Copy Right:') !!}
                            {!! Form::text('copy_right', getSiteSetting('copy_right') != null? getSiteSetting('copy_right'): null, ['class' => 'form-control']) !!}
                            {!! $errors->first('copy_right', '<div class="text-danger">:message</div>') !!}
                        </div>
                        <div class="form-group col-lg-12 col-md-12">
                            {!! Form::label('location', 'Location:') !!}
                            {!! Form::text('location', getSiteSetting('location') != null? getSiteSetting('location'): null, ['class' => 'form-control']) !!}
                            {!! $errors->first('location', '<div class="text-danger">:message</div>') !!}
                        </div>
                        <div class="form-group col-lg-12 col-md-12">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::text('email', getSiteSetting('email') != null? getSiteSetting('email'): null, ['class' => 'form-control']) !!}
                            {!! $errors->first('email', '<div class="text-danger">:message</div>') !!}
                        </div>
  <div class="col-md-12 col-lg-12">
                    @if(getSiteSetting('logo_image')!==null)
                        <img src="{{getSiteSetting('logo_image')?getSiteSetting('logo_image'):imageNotFound()}}" height="250"
                             id="logo_image_img">

                    @else
                        <img src="{getSiteSetting('logo_image')?getSiteSetting('logo_image'):imageNotFound()}}" height="250"
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
                           value="{{getSiteSetting('logo_image')?getSiteSetting('logo_image'):''}}"/>
                    {!! $errors->first('logo_image', '<div class="text-danger">:message</div>') !!}
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
@push('scripts')
 @include('admin.partials.common.file-upload');
 @endpush

@section('scripts')

@endsection