<?php

if(in_category(3)){
    include(get_template_directory().'/single-news.php');
}
else if(get_post_type() === "services"){
    include(get_template_directory().'/single-services.php');
}
?>