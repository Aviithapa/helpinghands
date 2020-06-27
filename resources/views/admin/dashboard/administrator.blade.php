
@extends('admin.layout.app')

@section('content')
    @include('admin.partials.common.page-title', ['page_title' => 'Dashboard'])
    <div>
        <div class="row 2col">
            <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                <div class="tiles blue added-margin">
                    <div class="tiles-body">
                        <div class="controller">
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                        <div class="tiles-title"> TODAY’S SERVER LOAD </div>
                        <div class="heading"> <span class="animate-number" data-value="26.8" data-animation-duration="1200">0</span>% </div>
                        <div class="progress transparent progress-small no-radius">
                            <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="26.8%"></div>
                        </div>
                        <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 4% higher <span class="blend">than last month</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                <div class="tiles green added-margin">
                    <div class="tiles-body">
                        <div class="controller">
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                        <div class="tiles-title"> TODAY’S VISITS </div>
                        <div class="heading"> <span class="animate-number" data-value="2545665" data-animation-duration="1000">0</span> </div>
                        <div class="progress transparent progress-small no-radius">
                            <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="79%"></div>
                        </div>
                        <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 2% higher <span class="blend">than last month</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 spacing-bottom">
                <div class="tiles red added-margin">
                    <div class="tiles-body">
                        <div class="controller">
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                        <div class="tiles-title"> TODAY’S SALES </div>
                        <div class="heading"> $ <span class="animate-number" data-value="14500" data-animation-duration="1200">0</span> </div>
                        <div class="progress transparent progress-white progress-small no-radius">
                            <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="45%"></div>
                        </div>
                        <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 5% higher <span class="blend">than last month</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="tiles purple added-margin">
                    <div class="tiles-body">
                        <div class="controller">
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                        <div class="tiles-title"> TODAY’S FEEDBACKS </div>
                        <div class="row-fluid">
                            <div class="heading"> <span class="animate-number" data-value="1600" data-animation-duration="700">0</span> </div>
                            <div class="progress transparent progress-white progress-small no-radius">
                                <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="12%"></div>
                            </div>
                        </div>
                        <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 3% higher <span class="blend">than last month</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
