
<a data-toggle="modal" href="#modal-delete-{{ $data->id }}" class="btn btn-danger btn-xs btn-mini" title="Delete">
    <i class="fa fa-times"></i> Remove
</a>
<div class="modal fade modal-mini modal-primary" id="modal-delete-{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {{ Form::open(['method' => 'DELETE', 'route' => ["$name.destroy", $data->id]]) }}
            @if(isset($hard_delete))
                <input type="hidden" value="1" name="hard_delete">
            @endif
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <br>
                <i class="fa fa-trash fa-3x"></i>
                <h4 id="myModalLabel" class="semi-bold">Delete!!!</h4>
            </div>
            <div class="modal-body text-center">
                <p>
                    Are you sure want to delete this data?
                </p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger" >
                    <i class="fa fa-check"></i> Yes
                </button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times"></i> No
                </button>
            </div>
            {{ Form::close() }}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->