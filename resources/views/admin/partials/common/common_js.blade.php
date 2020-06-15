<script>
    function toggleFeature(tog,sel){
//        var tog='is_feature';
//        var sel=$('[name=is_feature]').val();
        $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
        $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
    }
    var wrapper = $(".input_fields_wrap"); //Fields wrapper
    var wrapper2 = $(".feature_wrap"); //Fields wrapper
    var add_button = $(".add_more"); //Add button ID

    var x =i;
    //initlal text box count

    $(add_button).click(function (e) { //on add input button click
        var cloned_shift = $(this).parents(".input_fields_wrap");
        cloned_shift = cloned_shift.clone(true);
        var cloned_shift = $(".input_fields_wrap:last")
        cloned_shift = cloned_shift.clone(true);
        cloned_shift.insertAfter(".input_fields_wrap:last");
        cloned_shift.find("input[type='text']").val("");
        cloned_shift.find("input[type='hidden']").val("");
        cloned_shift.find("input[type='file']").val("");
        cloned_shift.find("input[type='file']").val("");
        cloned_shift.find("img").attr('src','');
        cloned_shift.find('.progress2').css('width','0%')
        x++;
        // cloned_shift.insertAfter(".input_fields_wrap:last");
    });
    $(wrapper).on("click", ".delete-col", function (e) { //user click on remove text
        e.preventDefault();
        if (x != 1) {
            $(this).parents('.input_fields_wrap').remove();
            x--;
        }
    })
    $('.add_more2').click(function (e) { //on add input button click
        var cloned_shift = $(this).parents(".feature_wrap");
        cloned_shift = cloned_shift.clone(true);
        var cloned_shift = $(".feature_wrap:last")
        cloned_shift = cloned_shift.clone(true);
        cloned_shift.insertAfter(".feature_wrap:last");
        cloned_shift.find("input[type='text']").val("");
        cloned_shift.find("input[type='hidden']").val("");
        cloned_shift.find("input[type='file']").val("");
        cloned_shift.find("input[type='file']").val("");
        cloned_shift.find("img").attr('src','');
        cloned_shift.find('.progress2').css('width','0%')
        cloned_shift.find('.featurevideo_img').attr('src','');
        y++;
        // cloned_shift.insertAfter(".input_fields_wrap:last");
    });
    $(wrapper2).on("click", ".delete-col2", function (e) { //user click on remove text
        e.preventDefault();
        if (y != 1) {
            $(this).parents('.feature_wrap').remove();
            y--;
        }
    })
    $('.add_more3').click(function (e) { //on add input button click
        var cloned_shift = $(this).parents(".colour_wrap");
        cloned_shift = cloned_shift.clone(true);
        var cloned_shift = $(".colour_wrap:last")
        cloned_shift = cloned_shift.clone(true);
        cloned_shift.insertAfter(".colour_wrap:last");
        cloned_shift.find("input[type='text']").val("");
        cloned_shift.find("input[type='hidden']").val("");
        cloned_shift.find("input[type='file']").val("");
        cloned_shift.find("input[type='file']").val("");
        cloned_shift.find("img").attr('src','https://via.placeholder.com/350x150');
        cloned_shift.find('.progress2').css('width','0%')
//        cloned_shift.find('.featurevideo_img').attr('src','');
        cloned_shift.find('.add_colour_images').remove()
        z++;
        // cloned_shift.insertAfter(".input_fields_wrap:last");
    });
    $('.colour_wrap').on("click", ".delete-col3", function (e) {
        console.log(z);//user click on remove text
        e.preventDefault();
        if (z != 1) {
            $(this).parents('.colour_wrap').remove();
            z--;
        }
    })
</script>