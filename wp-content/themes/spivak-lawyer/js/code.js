$(document).ready(function () {
    const footer_area = $(".footer-area"),
          fictitious_area =   $(".visible-footer"),
          footer_bottom_area = $(".footer-bottom");

    if(!$("body").hasClass("this_is_404") && !$("body").hasClass("this_contacts")){
        footer_area.css("height", fictitious_area.height());
    }
    else if($("body").hasClass("this_contacts")){
        footer_area.css("height", footer_bottom_area.height());
    }
    else if($("body").hasClass("this_is_404") || $("body").hasClass("search_page")){
        footer_area.css("height", "auto");
    }
    else{
        footer_area.css("height", fictitious_area.height());
    }


    $(".attorneys_box_info li").addClass("fa fa-caret-right");

    $(".comment-reply-link").on(" click", function (e) {
        e.preventDefault();
        if($(".comment-reply-link").hasClass("active")){
            $(".comment-reply-link").removeClass("active");
        }
        $(this).addClass("active");
        $("#replyUserField").val($(this).attr("data-comment-id"));
    });
    var once_click = true;
    $(".container.block-for-back .wpcf7").on("wpcf7mailsent", function () {
        var id_btn_post = $(".data-info-file").attr('data-btn-id');
        console.log(id_btn_post);
        if (once_click) {
            once_click = false;
            email_submit = $('.container.block-for-back span.your-email input').val();
            console.log(email_submit);
            var info = {
                action: 'send_file_action',
                data_id: id_btn_post,
                data_email: email_submit
            };
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                data: info,
                type: "POST",
                success: function (e) {
                }
            })
        }
    });
});