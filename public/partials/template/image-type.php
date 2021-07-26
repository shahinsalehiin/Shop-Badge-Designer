<?php
// check image type
$image_type = isset( $wpcsbd_all_option[ 'image_type' ] ) ? esc_attr( $wpcsbd_all_option[ 'image_type' ] ) : 'pre_existing_image';

// check image type
$existing_images = isset( $wpcsbd_all_option[ 'existing_image' ] ) ? esc_attr( $wpcsbd_all_option[ 'existing_image' ] ) : '1';

if ( $image_type == 'pre_existing_image' ) {
    $image = WPCSBD_IMG_DIR . 'badges/' . $existing_images . '.png';
} else {
    $image =  $wpcsbd_all_option[ 'wpcsbd_custom_image' ] ;
}
?>
<div class="wpcsbd-image-ribbon">
    <img src="<?php echo esc_url($image); ?>" alt="">
</div>

