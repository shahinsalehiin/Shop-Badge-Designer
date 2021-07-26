<?php
// position control
$position = isset( $wpcsbd_all_option[ 'wpcsbd_position_control' ] ) ? esc_attr( $wpcsbd_all_option[ 'wpcsbd_position_control' ] ) : 'left_top';

// $enable_tooltip_check = isset( $wpcsbd_all_option[ 'wpcsbd_enable_tooltip' ] ) ? esc_attr( $wpcsbd_all_option[ 'wpcsbd_enable_tooltip' ] ) : '0';

// if ( $enable_tooltip_check == '1' ) {
//     if ( isset( $wpcsbd_all_option[ 'badge_tooltip_text' ] ) ) {
//         $tooltip_text = $wpcsbd_all_option[ 'badge_tooltip_text' ];
//     }
// }

// random data
$data_id = rand( 111111111, 999999999 );

if ( isset( $wpcsbd_all_option[ 'background_type' ] ) && $wpcsbd_all_option[ 'background_type' ] == 'image-background' ) {

    // image type check
    $image_type = isset( $wpcsbd_all_option[ 'image_type' ] ) ? esc_attr( $wpcsbd_all_option[ 'image_type' ] ) : 'pre_existing_image';

    if ( $image_type == 'pre_existing_image' ) {

        $template = isset( $wpcsbd_all_option[ 'existing_image' ] ) ? esc_attr( $wpcsbd_all_option[ 'existing_image' ] ) : '1';

        $wpcsbd_text_template = 'wpcsbd-image-' . $template;
    } 

    else {
        $wpcsbd_text_template = 'wpcsbd-custom-image';
    }

    // random class
    $random_class = 'wpcsbd-' . $data_id;

    // background class
    $background_class = $random_class . ' wpcsbd-image-bg-wrap ' . $wpcsbd_text_template;

} else {

    // template text
    $template = isset( $wpcsbd_all_option[ 'text_design_templates' ] ) ? esc_attr( $wpcsbd_all_option[ 'text_design_templates' ] ) : 'template-1';

    // template text only
    $wpcsbd_text_template = 'wpcsbd-text-only-' . $template;

    // random class add
    $random_class = 'wpcsbd-' . $data_id;

    // background class
    $background_class = $random_class . ' wpcsbd-text-only-bg-wrap ' . $wpcsbd_text_template;

}

if ( isset( $wpcsbd_all_option[ 'badge_type' ] ) && $wpcsbd_all_option[ 'badge_type' ] == 'text' ) {
    
    //badge text only
    $span_class = 'wpcsbd-text-only ';

} else {
    // span class
    $span_class = 'wpcsbd-text-only wpcsbd-icon-only ';
}

//global product
global $product;

// image gallery
$attachment_ids = $product -> get_gallery_image_ids();

if ( ! $attachment_ids ) {
    $attachment_class = '';
} else {
    $attachment_class = 'wpcsbd-attachment-gallery';
}

$badge_type = isset( $wpcsbd_all_option[ 'badge_type' ] ) ? esc_attr( $wpcsbd_all_option[ 'badge_type' ] ) : 'text';

$disable_badge = isset( $wpcsbd_all_option[ 'wpcsbd_disable_badge' ] ) ? esc_attr( $wpcsbd_all_option[ 'wpcsbd_disable_badge' ] ) : '0';

if ( $disable_badge == 0 ) {
    ?>
    <div class="<?php echo esc_attr($background_class); ?> wpcsbd-badges <?php
        
        if ( is_product() ) {
             echo esc_attr($attachment_class);
         }

         echo ' wpcsbd-position-' . esc_attr($position);
        //  if ( $enable_tooltip_check == '1' ) {
        //      echo ' wpcsbd-tooltip-active';
        //  }

         ?>" data-id="wpcsbd_<?php echo esc_attr($data_id);
         ?>"
         
         >
             <?php

             if ( isset( $wpcsbd_all_option[ 'background_type' ] ) && $wpcsbd_all_option[ 'background_type' ] == 'image-background' ) {
                 // inclide image background
                 include(WPCSBD_PATH . 'public/partials/template/image-background.php');
             } else {

                 $text_value = isset( $wpcsbd_all_option[ 'badge_text' ] ) ? esc_attr( $wpcsbd_all_option[ 'badge_text' ] ) : '';

                 // inclide text background
                 include(WPCSBD_PATH . 'public/partials/template/text-background.php');
             }
             ?>
    </div>
    <?php
}
//include(WPCSBD_PATH . 'includes/frontend/timer.php');
include(WPCSBD_PATH . 'public/partials/custom-design.php');
