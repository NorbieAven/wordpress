<?php

//set up


//includes
include(get_template_directory().'/include/font/enqueue.php');


//actions & filter hooks
add_action( 'wp_enqueue_scripts', 'yg_enqueue' );

//shortcodes

?>