<?php
/*
* custom design file
* custom css design
*/
if ( isset( $wpcsbd_all_option[ 'wpcsbd_custom_design_open' ] ) && $wpcsbd_all_option[ 'wpcsbd_custom_design_open' ] == '1' ) {
    
    // text color
    $title_color = $wpcsbd_all_option[ 'wpcsbd_text_color' ];

    // bg color
    $background_color = isset( $wpcsbd_all_option[ 'wpcsbd_background_color' ] ) ? esc_attr( $wpcsbd_all_option[ 'wpcsbd_background_color' ] ) : '#fff';

    // corner color
    $corner_bg_color = isset( $wpcsbd_all_option[ 'wpcsbd_corner_background_color' ] ) ? esc_attr( $wpcsbd_all_option[ 'wpcsbd_corner_background_color' ] ) : '#fff';

    // font size
    $font_size = isset( $wpcsbd_all_option[ 'wpcsbd_font_size' ] ) ? esc_attr( $wpcsbd_all_option[ 'wpcsbd_font_size' ] ) : '15';

    // image size
    $image_size = isset( $wpcsbd_all_option[ 'wpcsbd_image_size' ] ) ? esc_attr( $wpcsbd_all_option[ 'wpcsbd_image_size' ] ) : '90';
    ?>

    <style type="text/css">

        .wpcsbd-<?php echo esc_html($data_id); ?>.wpcsbd-icon-only i{
            font-size: <?php echo esc_html($font_size); ?>px;
        }

        <?php
        // background type
        if ( isset( $wpcsbd_all_option[ 'background_type' ] ) && $wpcsbd_all_option[ 'background_type' ] == 'text-background' ) {

            // text template
            $template = isset( $wpcsbd_all_option[ 'text_design_templates' ] ) ? esc_attr( $wpcsbd_all_option[ 'text_design_templates' ] ) : 'template-1';
             ?>

            .wpcsbd-<?php echo esc_html($data_id); ?>.wpcsbd-text-only-<?php echo esc_html($template); ?>
            {
                font-size: <?php echo esc_html($font_size); ?>px;
            }


            <?php

            // check template 1
            if ( $template == 'template-1' ) {
                ?>
                .wpcsbd-<?php echo esc_html($data_id); ?>.wpcsbd-text-only-template-1 {
                    color: <?php echo esc_html($title_color); ?>;
                    background: <?php echo esc_html($background_color); ?>;
                }
                <?php
            }

            if ( $template == 'template-2' ) {
                ?>
                .wpcsbd-<?php echo esc_html($data_id); ?>.wpcsbd-text-only-template-2 {
                    color: <?php echo esc_html($title_color); ?>;
                    background: <?php echo esc_html($background_color); ?>
                }
                <?php
            }

            if ( $template == 'template-3' ) {
                ?>
                .wpcsbd-<?php echo esc_html($data_id); ?>.wpcsbd-text-only-template-3 {
                    color: <?php echo esc_html($title_color); ?>;
                    background: <?php echo esc_html($background_color); ?>
                }
                <?php
            }

            if ( $template == 'template-4' ) {
                ?>
                .wpcsbd-<?php echo esc_html($data_id); ?>.wpcsbd-text-only-template-4 {
                    color: <?php echo esc_html($title_color); ?>;
                    background: <?php echo esc_html($background_color); ?>
                }
                <?php
            }

            if ( $template == 'template-5' ) {
                ?>
                .wpcsbd-<?php echo esc_html($data_id); ?>.wpcsbd-text-only-template-5 {
                    color: <?php echo esc_html($title_color); ?>;
                    background: <?php echo esc_html($background_color); ?>
                }
                <?php
            }

            if ( $template == 'template-6' ) {
                ?>
                .wpcsbd-<?php echo esc_html($data_id); ?>.wpcsbd-text-only-template-6 {
                    color: <?php echo esc_html($title_color); ?>;
                    background: <?php echo esc_html($background_color); ?>
                }
                <?php
            }

            if ( $template == 'template-7' ) {
                ?>
                .wpcsbd-<?php echo esc_html($data_id); ?>.wpcsbd-text-only-template-7 {
                    color: <?php echo esc_html($title_color); ?>;
                    background: <?php echo esc_html($background_color); ?>
                }
                <?php
            }


            /* .wpcsbd-text-only-template-2, .wpcsbd-text-only-template-3, .wpcsbd-text-only-template-4, .wpcsbd-text-only-template-5, .wpcsbd-text-only-template-6, .wpcsbd-text-only-template-7, .wpcsbd-text-only-template-9, .wpcsbd-text-only-template-10 {
                background: <?php echo esc_html($background_color); ?>;
                color: <?php echo esc_html($title_color); ?>;
            } */
            
              
        } else {
            $template = isset( $wpcsbd_all_option[ 'existing_image' ] ) ? esc_attr( $wpcsbd_all_option[ 'existing_image' ] ) : '1';
            ?>

            .wpcsbd-<?php echo esc_html($data_id); ?>.wpcsbd-image-bg-wrap.wpcsbd-image-<?php echo esc_html($template); ?> .wpcsbd-inner-text-container{
                color:<?php echo esc_html($title_color); ?>;
                font-size: <?php echo esc_html($font_size); ?>px;
                width: <?php echo esc_html($image_size); ?>px;
                height: <?php echo esc_html($image_size); ?>px;
                line-height:<?php echo esc_html($image_size); ?>px;
            }

            .wpcsbd-<?php echo esc_html($data_id); ?>.wpcsbd-image-bg-wrap.wpcsbd-image-<?php echo esc_html($template); ?> .wpcsbd-image-ribbon{
                width: <?php echo esc_html($image_size); ?>px;
                height: <?php echo esc_html($image_size); ?>px;
            }
            
            <?php
        }
        ?>
    </style>
    <?php
}


