@if(isset($model))
    {{ Form::model($model, ['url' => route('dashboard.donor.update', $model->id), 'method' => 'PUT','files','post' => true]) }}
@else
    {{ Form::open(['url' => route('dashboard.donor.store'), 'method' => 'post', 'files' => true]) }}
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
                    {!! Form::text('name', null, ['class' => 'form-control','required','maxlength'=>'190','readonly']) !!}
                    {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('Email', 'Email:', ['class' => 'form-label']) !!}
                    {!! Form::text('email', null, ['class' => 'form-control','maxlength'=>'190','readonly']) !!}
                    {!! $errors->first('email', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('Address', 'Address:', ['class' => 'form-label']) !!}
                    {!! Form::text('address', null, ['class' => 'form-control','maxlength'=>'190','readonly']) !!}
                    {!! $errors->first('address', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('Phone Number', 'Phone Number:', ['class' => 'form-label']) !!}
                    {!! Form::text('phoneNumber', null, ['class' => 'form-control','maxlength'=>'190','readonly']) !!}
                    {!! $errors->first('phoneNumber', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    {!! Form::label('Donation Amount', 'Donation Amount:', ['class' => 'form-label']) !!}
                    {!! Form::number('donation_amount', null, ['class' => 'form-control','maxlength'=>'190','onkeypress="return event.charCode >= 48" min="1"']) !!}
                    {!! $errors->first('donation_amount', '<div class="text-danger">:message</div>') !!}
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
    <script src="{{asset('assets/plugins/ckeditor_4.14.0_standard_easyimage/ckeditor/ckeditor.js')}}">
    </script>
    <script>

        CKEDITOR.replace( 'ckeditor', {
            // Load the timestamp plugin.
            extraPlugins: 'uploadfile'
        });
    </script>


@endpush
