
@extends('admin.layout.app')

@section('content')
    @include('admin.partials.common.page-title', ['page_title' => 'Dashboard'])

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="tiles white">
                    <div class="tiles-body">
                        <div class="tiles-title"> <strong>New Events Requests</strong></div>
                        <br>
                        <table class="table table-hover table-condensed" id="basic-data-table">
                            <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($event_created as $key => $event_created)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                        {{$event_created->title}}
                                    </td>
                                    <td>
                                        {{$event_created->content}}
                                    </td>
                                    <td>
                                        {{$event_created->status}}
                                    </td>
                                    <td>
                                        {{ Form::model($event_created, ['url' => route('dashboard.events.approve', $event_created->id), 'method' => 'PUT','files' => true]) }}
                                        <input type="hidden" value="active" name="status" id="status">
                                        <button type="submit" class="btn btn-success btn-xs btn-mini">
                                            <i class="fa fa-check"></i>Approve
                                        </button>
                                        {{ Form::close() }}
                                        <br>
                                        @include('admin.partials.common.delete-modal', ['data' => $event_created, 'name' => 'dashboard.events', 'hard_delete' => true])
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
