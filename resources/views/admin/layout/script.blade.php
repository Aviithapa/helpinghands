<script src="{{asset('assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
<!-- BEGIN JS DEPENDECENCIES-->
<script src="{{asset('assets/plugins/jquery/jquery-1.11.3.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrapv3/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('nestable/jquery.nestable.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-block-ui/jqueryblockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap-select2/select2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}" type="text/javascript"></script>


<!-- END CORE JS DEPENDECENCIES-->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="{{asset('webarch/js/webarch.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/chat.js')}}" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('assets/plugins/bootstrap-select2/select2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-datatable/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('assets/plugins/datatables-responsive/js/datatables.responsive.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/datatables-responsive/js/lodash.min.js')}}"></script>
<!-- END PAGE LEVEL JS INIT -->
<script src="{{asset('assets/js/datatables.js')}}" type="text/javascript"></script>
<!--Notification-->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/backbone.js/0.9.10/backbone-min.js"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.3/underscore-min.js"></script>
<script src="{{asset('assets/plugins/jquery-notifications/js/messenger.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-notifications/js/messenger-theme-future.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-notifications/js/demo/location-sel.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-notifications/js/demo/theme-sel.js')}}" type="text/javascript"></script>
<!-- END -->
<!-- BEGIN PAGE LEVEL JS -->
<script type="text/javascript" src="{{asset('assets/plugins/jquery-notifications/js/demo/demo.js')}}"></script>

<!--SprintF JS-->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/sprintf/1.1.1/sprintf.js"></script>
{{--fa icon picker--}}
<script type="text/javascript" src="{{asset('assets/plugins/font-awesome/bootstrap-iconpicker.bundle.min.js')}}"></script>

<script>
    /**
     * Adds csrf token to ajax call
     */
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /**
     * Calls text editor instance
     */

    $('.text-editor').each(function () {
        var id = this.id;
        $('#'+id).wysihtml5({
            "stylesheets": false,
            "color": false,
            "html": true
        });
    });
    $(".text-editor2").each(function(){$(this).wysihtml5();});
//    $('.text-editor2').wysihtml5({
//        "stylesheets": false,
//        "color": false,
//    });
    /**
     * Calls data table instance
     */
    $('#basic-data-table').DataTable();

    /**
     * Creates slug using name
     */
    $("#name").keyup(function(){
        var slug_element = $("#slug");
        if(slug_element) {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^\w ]+/g,'');
            Text = Text.replace(/ +/g,'-');
            Text = Text.replace('/\s/g','-');
            slug_element.val(Text);
        }

    });
    $("#title").keyup(function(){
        var slug_element = $("#slug");
        if(slug_element) {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^\w ]+/g,'');
            Text = Text.replace(/ +/g,'-');
            Text = Text.replace('/\s/g','-');
            slug_element.val(Text);
        }

    });

    /**
     * To fine ancestor by class name
     */
    function findAncestor(el, cls) {
        while ((el = el.parentElement) && !el.classList.contains(cls)) ;
        return el;
    }

    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });

    $('.timepicker').timepicker({
        format: 'HH:mm'
    });

    $('.select2').select2();
    $('#radioBtn a').on('click', function(){
        var sel = $(this).data('title');
        var tog = $(this).data('toggle');
        console.log(tog);
        $('#'+tog).prop('value', sel);

        $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
        $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
    })

//    CKEDITOR.replace( 'ckeditor', {
////        filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
////        filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
//    } );
</script>