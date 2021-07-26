<?php 
$is_autosave = wp_is_post_autosave( $post_id );
$is_revision = wp_is_post_revision( $post_id );

$is_valid_nonce = ( isset( $_POST[ 'wpcsbd_badge_nonce' ] ) && wp_verify_nonce( $_POST[ 'wpcsbd_badge_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
    return;
}

if ( isset( $_POST[ 'wpcsbd_advance_option' ] ) ) {
    $wpcsbd_array = ( array ) $_POST[ 'wpcsbd_advance_option' ];
    $val = $this -> wpcsbd_sanitize_array( $wpcsbd_array );
    update_post_meta( $post_id, 'wpcsbd_advance_option', $val );
}
