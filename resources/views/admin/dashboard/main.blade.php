
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
                            <th>Account Number</th>
                            <th>Branch</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h3>{{$event->bank_Account}}</h3>
                                </td>
                                <td>
                                   <h3> {{$event->bank_branch}}</h3>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
