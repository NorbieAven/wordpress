<?php

fuction yg_enqueue(){
wp_register_style('yg_style', get_template_directory(). '/rehabilitation-yoga/upload/css/mobile.css');
wp_enqueue_style('yg_style');
}
wp_register_script('yg_fuction',get_template_directory_uri().'/rehabilitation-yoga/js/function.js');
wp_register_script('yg_mobile',get_template_directory_uri().'/rehabilitation-yoga/js/mobile.js');
wp_enqueue_script("yg_function");
wp_enqueue_script("yg_mobile");

?>
