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
    else{
        footer_area.css("height", fictitious_area.height());
    }


    $(".attorneys_box_info li").addClass("fa fa-caret-right");
});