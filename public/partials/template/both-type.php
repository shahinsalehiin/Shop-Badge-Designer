<?php
/*
* icon type 
* badge text
*/
include(WPCSBD_PATH . 'public/partials/template/icon-type.php');
if ( isset( $wpcsbd_all_option[ 'badge_text' ] ) ) {
    echo esc_attr( $wpcsbd_all_option[ 'badge_text' ] );
}

