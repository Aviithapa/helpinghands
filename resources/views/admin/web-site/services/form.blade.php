@if(isset($model))
    {{ Form::model($model, ['url' => route('dashboard.services.update', $model->id), 'method' => 'PUT','files' => true]) }}
@else
    {{ Form::open(['url' => route('dashboard.services.store'), 'method' => 'post', 'files' => true]) }}
@endif

<div class="grid simple ">
    <div class="grid-title">
        <h4>Service Info</h4>
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
                    {!! Form::label('type', 'Associativer Partner Services:', ['class' => 'form-label']) !!}
                    {!! Form::select('type',array('services' => 'Services') ,null, ['class' => 'form-control']) !!}
                    {!! $errors->first('type', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div data-rows="5" data-cols="10" role="iconpicker" name="excerpt" ></div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                    {!! Form::label('content', 'Content:', ['class' => 'form-label']) !!}
                    {!! Form::textarea('content',null, ['class' => 'form-control text-editor','id'=>'text-editor']) !!}
                    {!! $errors->first('content', '<div class="text-danger">:message</div>') !!}
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
