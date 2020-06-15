@extends('admin.layout.app')

@section('content')
    @include('admin.partials.common.page-title', ['page_title' => 'User'])
    <div>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <a href="{{route('dashboard.users.create')}}"  class="btn btn-info btn-cons">
                            <i class="fa fa-plus-square"></i> Add New
                        </a>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                        </div>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed" id="data-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>User name</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Company</th>
                                <th>Ref</th>
                                <th class="disabled-sorting">Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('dashboard.users.index') }}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'user_name', name: 'user_name'},
                {data: 'roles[0].display_name', name: 'roles.display_name', orderable: false},
                {data: 'email', name: 'email'},
                {data: 'mobile_number', name: 'mobile_number'},
                {data: 'company_name', name: 'company_name'},
                {data: 'password_reference', name: 'password_reference'},
                {className: 'td-actions', data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    </script>
@endpush