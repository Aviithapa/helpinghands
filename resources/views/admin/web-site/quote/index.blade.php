
@extends('admin.layout.app')

@section('content')
    @include('admin.partials.common.page-title', ['page_title' => 'Request A Quote'])
    <div>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
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
                                <th>Subject</th>
                                <th>Email</th>
                                <th>Message</th>
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
            ajax: '{{ route('dashboard.GetTouch.index')}}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'subject', name: 'subject'},
                {data: 'email', name: 'email'},
                {data: 'message', name: 'message'},
            ]
        });
    </script>
@endpush