@if(isset($model))
    {{ Form::model($model, ['url' => route('dashboard.users.update', $model->id), 'method' => 'PUT','files' => true]) }}
@else
    {{ Form::open(['url' => route('dashboard.users.store'), 'method' => 'post', 'files' => true]) }}
@endif

<div class="grid simple ">
    <div class="grid-title">
        <h4>User Image</h4>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
        </div>
    </div>
    <div class="grid-body">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <img src="{{isset($model)?$model->getImage():imageNotFound('user')}}" height = "150" id="user_img">
            </div>

            <div class="form-group col-md-12 col-lg-12">
                {!! Form::label('user', 'Image:') !!}
                <input type="file" id="user" name="user_image" onclick="uploader('user')">
                <small id="user_help_text" class="help-block"></small>
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                    <div id="user_progress" class="progress-bar progress-bar-success" style="width: 0%">
                    </div>
                </div>
                <input  type="hidden" id="user_path" name="image" class="form-control" value="{{isset($model)?$model->image:''}}"/>
                {!! $errors->first('image', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
    </div>
</div>

<div class="grid simple ">
    <div class="grid-title">
        <h4>Basic Information</h4>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
        </div>
    </div>
    <div class="grid-body">
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
                    {!! Form::label('user_name', 'User Name:', ['class' => 'form-label']) !!}
                    {!! Form::text('user_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('user_name', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('email', 'Email:', ['class' => 'form-label']) !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('address', 'Address:', ['class' => 'form-label']) !!}
                    {!! Form::text('address', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('address', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('phone_number', 'Phone Number:', ['class' => 'form-label']) !!}
                    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('phone_number', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('mobile_number', 'Mobile Number:', ['class' => 'form-label']) !!}
                    {!! Form::text('mobile_number', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('mobile_number', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="grid simple ">
    <div class="grid-title">
        <h4>Contact Information</h4>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
        </div>
    </div>
    <div class="grid-body">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('contact_name', 'Name:', ['class' => 'form-label']) !!}
                    {!! Form::text('contact_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('contact_name', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('contact_email', 'Email:', ['class' => 'form-label']) !!}
                    {!! Form::email('contact_email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('contact_email', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('contact_phone_number', 'Phone number:', ['class' => 'form-label']) !!}
                    {!! Form::text('contact_phone_number', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('contact_phone_number', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('contact_mobile_number', 'Mobile Number:', ['class' => 'form-label']) !!}
                    {!! Form::text('contact_mobile_number', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('contact_mobile_number', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="grid simple ">
    <div class="grid-title">
        <h4>Company Information</h4>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
        </div>
    </div>
    <div class="grid-body">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('company_name', 'Name:', ['class' => 'form-label']) !!}
                    {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('company_name', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('company_registration_number', 'Registration number:', ['class' => 'form-label']) !!}
                    {!! Form::text('company_registration_number', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('company_registration_number', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('vat_pan_no', 'VAT/PAN number:', ['class' => 'form-label']) !!}
                    {!! Form::text('vat_pan_no', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('vat_pan_no', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

        </div>
    </div>
</div>

<div class="grid simple ">
    <div class="grid-title">
        <h4>Password and Activation</h4>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
        </div>
    </div>
    <div class="grid-body">
        <div class="row" id="js-authentication-section-off">
            <button type="button" id="js-edit-user-authentication" class="btn btn-primary btn-sm btn-small">
                Edit
            </button>
        </div>
        <div class="row u-hide" id="js-authentication-section">
            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    {!! Form::label('password', 'Password:', ['class' => 'form-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                    {!! $errors->first('password', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirm Password:', ['class' => 'form-label']) !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    {!! $errors->first('password_confirmation', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

            @if(isset($model))
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                        {!! Form::label('old_password', 'Old Password:', ['class' => 'form-label']) !!}
                        {!! Form::password('old_password', ['class' => 'form-control']) !!}
                        {!! $errors->first('old_password', '<div class="text-danger">:message</div>') !!}
                    </div>
                </div>
            @endif



            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('status', 'Status:', ['class' => 'form-label']) !!}
                    {!! Form::select('status', getActiveInactiveStatus(), null, ['class' => 'form-control']) !!}
                    {!! $errors->first('status', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('role', 'Role:', ['class' => 'form-label']) !!}
                    {!! Form::select('role', pluckRoleList(), isset($model)?($user->mainRole()?$user->mainRole()->id:null):null, ['class' => 'form-control']) !!}
                    {!! $errors->first('role', '<div class="text-danger">:message</div>') !!}
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
    @include('admin.partials.common.file-upload')

    <script>
        $('#js-edit-user-authentication').on('click', function () {
            $('#js-authentication-section-off').hide("slow", function () {
            });
            $('#js-authentication-section').show("slow", function () {
            });
        });
    </script>
@endpush
