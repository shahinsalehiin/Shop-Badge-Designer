<?php 
if ( $position_left_top != 'none' ) {
    $wpcsbd_post_id = $wpcsbd_advance_option[ 'wpcsbd_badge_left_top_position' ];
    $wpcsbd_all_option = get_post_meta( $wpcsbd_post_id, 'wpcsbd_all_option', true );
    include(WPCSBD_PATH . 'public/partials/badge-content.php');
}
if ( $position_left_center != 'none' ) {
    $wpcsbd_post_id = $wpcsbd_advance_option[ 'wpcsbd_badge_left_center_position' ];
    $wpcsbd_all_option = get_post_meta( $wpcsbd_post_id, 'wpcsbd_all_option', true );
    include(WPCSBD_PATH . 'public/partials/badge-content.php');
}
if ( $position_left_bottom != 'none' ) {
    $wpcsbd_post_id = $wpcsbd_advance_option[ 'wpcsbd_badge_left_bottom_position' ];
    $wpcsbd_all_option = get_post_meta( $wpcsbd_post_id, 'wpcsbd_all_option', true );
    include(WPCSBD_PATH . 'public/partials/badge-content.php');
}
if ( $position_right_top != 'none' ) {
    $wpcsbd_post_id = $wpcsbd_advance_option[ 'wpcsbd_badge_right_top_position' ];
    $wpcsbd_all_option = get_post_meta( $wpcsbd_post_id, 'wpcsbd_all_option', true );
    include(WPCSBD_PATH . 'public/partials/badge-content.php');
}
if ( $position_right_center != 'none' ) {
    $wpcsbd_post_id = $wpcsbd_advance_option[ 'wpcsbd_badge_right_center_position' ];
    $wpcsbd_all_option = get_post_meta( $wpcsbd_post_id, 'wpcsbd_all_option', true );
    include(WPCSBD_PATH . 'public/partials/badge-content.php');
}
if ( $position_right_bottom != 'none' ) {
    $wpcsbd_post_id = $wpcsbd_advance_option[ 'wpcsbd_badge_right_bottom_position' ];
    $wpcsbd_all_option = get_post_meta( $wpcsbd_post_id, 'wpcsbd_all_option', true );
    include(WPCSBD_PATH . 'public/partials/badge-content.php');
}