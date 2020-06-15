@push('styles')
    <style>
        label {
            display: inline;
        }
    </style>
@endpush
@if(isset($model))
    @php $permission_array = $model->permissions;
    if(isset($permission_array))
    {
        $permission_array = $permission_array->pluck('id')->toArray();
    }
    @endphp

    {{ Form::model($model, ['url' => route('dashboard.roles.update', $model->id), 'method' => 'PUT','files' => true]) }}
@else
    {{ Form::open(['url' => route('dashboard.roles.store'), 'method' => 'post', 'files' => true]) }}
@endif

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
            {!! Form::label('display_name', 'Display Name:', ['class' => 'form-label']) !!}
            {!! Form::text('display_name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('display_name', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-md-12 col-lg-12">
        <div class="form-group">
            {!! Form::label('description', 'Description:', ['class' => 'form-label']) !!}
            {!! Form::textarea('description', null, ['class' => 'form-control text-editor', 'id' => 'description']) !!}
            {!! $errors->first('description', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="ocl-md-12 col-lg-12">

        @foreach(getPermissionList() as $key => $permission) @if(is_array($permission))
            <div class="form-group" id="div-{{$key}}">
                {!! Form::label($key, ucfirst($key) .': ') !!}
                <input type="checkbox" name="checkbox-{{ $key }}" onclick="setPermissions('{{ $key }}',this)">
                <br>
                @foreach($permission as $key_one => $value)
                    {!! Form::label('permissions['.$value.']', ucfirst( str_replace('.', ' ', $value)) .':') !!}
                    {!! Form::checkbox('permissions['.$key_one.']', $key_one , isset($model) && in_array($key_one, $permission_array) ? true : false ) !!}
                    {!! $errors->first('permissions['.$value.']', '<div class="text-danger">:message</div>') !!}
                @endforeach
            </div>
        @else
            <div class="form-group">
                {!! Form::label('permissions['.$permission.']', ucfirst( str_replace('.', ' ', $permission)) .':') !!}
                {!! Form::checkbox('permissions['.$permission.']', true, isset($model) && isset($model->permissions[$value]) && $model->permissions[$value] ? true : false ) !!} {!! $errors->first('permissions['.$permission.']', '<div class="text-danger">:message</div>') !!}
            </div>
        @endif
        @endforeach
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
    <script type="text/javascript">
        function setPermissions(key, main) {
            value = $(main).prop('checked');
            $("#div-" + key + " input").each(function(e, item) {
                // console.log(item);
                $(item).prop('checked', value);
            });
        }
    </script>
@endpush
