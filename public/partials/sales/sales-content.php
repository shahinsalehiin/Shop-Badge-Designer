<?php
// position check 
$position = isset( $wpcsbd_all_option[ 'wpcsbd_position_control' ] ) ? esc_attr( $wpcsbd_all_option[ 'wpcsbd_position_control' ] ) : 'left_top';

// $enable_tooltip_check = isset( $wpcsbd_all_option[ 'wpcsbd_enable_tooltip' ] ) ? esc_attr( $wpcsbd_all_option[ 'wpcsbd_enable_tooltip' ] ) : '0';

// if ( $enable_tooltip_check == '1' ) {
//     if ( isset( $wpcsbd_all_option[ 'badge_tooltip_text' ] ) ) {
//         $tooltip_text = $wpcsbd_all_option[ 'badge_tooltip_text' ];
//     }
// }


// random id genarate
$data_id = rand( 111111111, 999999999 );

if ( isset( $wpcsbd_all_option[ 'background_type' ] ) && $wpcsbd_all_option[ 'background_type' ] == 'image-background' ) {
    //check image type
    $image_type = isset( $wpcsbd_all_option[ 'image_type' ] ) ? esc_attr( $wpcsbd_all_option[ 'image_type' ] ) : 'pre_existing_image';

    //check condition image type
    if ( $image_type == 'pre_existing_image' ) {

        $template = isset( $wpcsbd_all_option[ 'existing_image' ] ) ? esc_attr( $wpcsbd_all_option[ 'existing_image' ] ) : '1';

        $wpcsbd_text_template = 'wpcsbd-image-' . $template;
    } else {
        $wpcsbd_text_template = 'wpcsbd-custom-image';
    }

    //random class
    $random_class = 'wpcsbd-' . $data_id;

    //background class add
    $background_class = $random_class . ' wpcsbd-image-bg-wrap ' . $wpcsbd_text_template;
} else {

    //text design template
    $template = isset( $wpcsbd_all_option[ 'text_design_templates' ] ) ? esc_attr( $wpcsbd_all_option[ 'text_design_templates' ] ) : 'template-1';
    
    //text template genarate
    $wpcsbd_text_template = 'wpcsbd-text-only-' . $template;

    //random class
    $random_class = 'wpcsbd-' . $data_id;
    //background class add
    $background_class = $random_class . ' wpcsbd-text-only-bg-wrap ' . $wpcsbd_text_template;
}

//condition badge type
if ( isset( $wpcsbd_all_option[ 'badge_type' ] ) && $wpcsbd_all_option[ 'badge_type' ] == 'text' ) {

    $span_class = 'wpcsbd-text-only ';

} else {

    $span_class = 'wpcsbd-text-only wpcsbd-icon-only ';
}

// global product
global $product;

// product gallery image
$attachment_ids = $product -> get_gallery_image_ids();

// gallry image check class
if ( ! $attachment_ids ) {
    $attachment_class = '';
} else {
    $attachment_class = 'wpcsbd-attachment-gallery';
}

//badge type
$badge_type = isset( $wpcsbd_all_option[ 'badge_type' ] ) ? esc_attr( $wpcsbd_all_option[ 'badge_type' ] ) : 'text';

//desable badge
$disable_badge = isset( $wpcsbd_all_option[ 'wpcsbd_disable_badge' ] ) ? esc_attr( $wpcsbd_all_option[ 'wpcsbd_disable_badge' ] ) : '0';

//disable badge condition check
if ( $disable_badge == 0 ) {
    ?>

    <div class="<?php echo esc_attr($background_class); ?> wpcsbd-badges <?php
         
         if ( is_product() ) {
             echo esc_attr($attachment_class);
         }
         echo ' wpcsbd-position-' . $position;

         if ( $enable_tooltip_check == '1' ) {
             echo ' wpcsbd-tooltip-active';
         }

         ?>" data-id="wpcsbd_<?php echo esc_attr($data_id);
         ?>"

         <?php 
         if ( $enable_tooltip_check == '1' ) { ?>
             title = "<?php echo esc_attr( $tooltip_text ); 
        ?>"
         <?php
         } 
         ?>
         
         >
             <?php
            //background type
             if ( isset( $wpcsbd_all_option[ 'background_type' ] ) && $wpcsbd_all_option[ 'background_type' ] == 'image-background' ) {
                 //include sales image background
                include(WPCSBD_PATH . 'public/partials/sales/sales-image-background.php');

             } else {

                 //check badge text
                 $text_value = isset( $wpcsbd_all_option[ 'badge_text' ] ) ? esc_attr( $wpcsbd_all_option[ 'badge_text' ] ) : '';
                 //include sales text backgrond
                 include(WPCSBD_PATH . 'public/partials/sales/sales-text-background.php');
             }
             ?>
    </div>
    <?php
}
//timer

//timer
include(WPCSBD_PATH . 'public/partials/custom-design.php');
