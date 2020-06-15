<link href="{{asset('assets/plugins/jquery-file-upload/css/jquery.fileupload-ui.min.css')}}" rel="stylesheet" type="text/css"/>
<script src="{{asset('assets/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-file-upload/js/jquery.iframe-transport.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-file-upload/js/jquery.fileupload.js')}}" type="text/javascript"></script>

<script>
    function uploader(id) {
        $('#'+ id +'_progress').css('width','0%');
        $('#'+id).fileupload({
            url: '{{ url('dashboard/ajax/file-upload') }}' + '/' + id,
            done: function(e, data) {
                $('#'+id+'_help_text').text('Image Upload Successfully');
                $('#'+id+'_path').val(data.result.image_name);
                $('#'+id+'_img').attr('src', data.result.full_url);
                $('#'+ id +'_progress').parent().removeClass('progress-striped');
            },
            error: function(e,data){
                $('#'+id+'_help_text').text(eval('e.responseJSON.'+id+'_image')[0]);
                $('#'+ id +'_progress').css('width','0%');
                console.log(e.responseText);
            },
            progress: function(e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#'+ id +'_progress').css('width', progress + '%');
            }
        });
    }

    function anyFileUploader(id) {
        $('#'+ id +'_progress').css('width','0%');
        $('#'+id).fileupload({
            url: '{{ url('dashboard/ajax/any-file-upload') }}' + '/' + id,
            done: function(e, data) {
                $('#'+id+'_help_text').text('File Upload Successfully');
                    $('#'+id+'_path').val(data.result.image_name);
                $('#'+id+'_img').attr('src', data.result.full_url);
                $('#'+ id +'_progress').parent().removeClass('progress-striped');
            },
            error: function(e,data){
                $('#'+id+'_help_text').text(eval('e.responseJSON.'+id+'_image')[0]);
                $('#'+ id +'_progress').css('width','0%');
                console.log(e.responseText);
            },
            progress: function(e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#'+ id +'_progress').css('width', progress + '%');
            }
        });
    }
    $('.schoolimages').click(function () {
        var parent_class=$(this).attr('data-class');
        console.log(parent_class);
        var id = $(this).attr('class');
        console.log($(this).attr('class'));
        var parents = $(this).parents('.'+parent_class)
        parents.find('.' + id + '_progress').css('width', '0%');
        $('.' + id).fileupload({
            url: '{{ url('dashboard/ajax/any-file-upload') }}' + '/' + id,
            acceptFiles: "video/*",
            maxFileSize: 40000000,
            done: function (e, data) {
                console.log(data);
                console.log(data.result.full_url);
                parents.find('.' + id + '_help_text').text('File Upload Successfully');
                parents.find('.' + id + '_path').val(data.result.image_name);
                parents.find('.' + id + '_img').attr('src', data.result.full_url);
                parents.find('.' + id + '_progress').parent().removeClass('progress-striped');
            },
            error: function (e, data) {
                parents.find('.' + id + '_help_text').text(eval('e.responseJSON.' + id + '_image')[0]);
                parents.find('.' + id + '_progress').css('width', '0%');
                console.log(e.responseText);
            },
            progress: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                parents.find('.' + id + '_progress').css('width', progress + '%');
            }
        });

    });
</script>
