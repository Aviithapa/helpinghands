    <style>
        html, body, #google-map  {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        #google-map {
            width:100%;
            height:480px;
        }

        .pac-container {
            z-index: 1051 !important;
        }
    </style>

<div class="col-md-12 col-lg-12">
    <button type="button" data-toggle="modal" href="#google-map-modal" class="btn btn-small btn-primary" title="User Google Map to add Latitude and Longitude">
        <span class="fa fa-map-marker"></span> Google Map
    </button>
</div>


<div class="modal fade modal-mini modal-primary" id="google-map-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <input id="pac-input" class="form-control" type="text" placeholder="Enter a location">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body text-center">
                <div id="google-map"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-check"></i> Done
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@push('scripts')
    @include('admin.partials.additional.map.js');
@endpush