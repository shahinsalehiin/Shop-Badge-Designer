<?php

 
if ( isset( $wpcsbd_all_option[ 'wpcsbd_custom_design_open' ] ) && $wpcsbd_all_option[ 'wpcsbd_custom_design_open' ] == '1' ) {
    //title color
    $title_color = $wpcsbd_all_option[ 'wpcsbd_text_color' ];

    //bg color
    $background_color = isset( $wpcsbd_all_option[ 'wpcsbd_background_color' ] ) ? esc_attr( $wpcsbd_all_option[ 'wpcsbd_background_color' ] ) : '#fff';

    //corner color
    $corner_bg_color = isset( $wpcsbd_all_option[ 'wpcsbd_corner_background_color' ] ) ? esc_attr( $wpcsbd_all_option[ 'wpcsbd_corner_background_color' ] ) : '#fff';

    //font size
    $font_size = isset( $wpcsbd_all_option[ 'wpcsbd_font_size' ] ) ? esc_attr( $wpcsbd_all_option[ 'wpcsbd_font_size' ] ) : '15';

    //image size
    $image_size = isset( $wpcsbd_all_option[ 'wpcsbd_image_size' ] ) ? esc_attr( $wpcsbd_all_option[ 'wpcsbd_image_size' ] ) : '90';

    ?>
    <style type="text/css">
        /*
          Teamplate : 2
         */
        .wpcsbd-text-only-template-2.wpcsbd-position-left_center:after, .wpcsbd-text-only-template-2.wpcsbd-position-left_top:after, .wpcsbd-text-only-template-2.wpcsbd-position-left_bottom:after {
            border-color: transparent transparent <?php echo esc_html($corner_bg_color); ?> transparent;
        }

        .wpcsbd-text-only-template-2.wpcsbd-position-right_center:after, .wpcsbd-text-only-template-2.wpcsbd-position-right_top:after, .wpcsbd-text-only-template-2.wpcsbd-position-right_bottom:after {

            border-color: transparent transparent transparent <?php echo esc_html($corner_bg_color); ?>;
        }

        /*
        template : 5
        */

        .wpcsbd-text-only-template-5.wpcsbd-position-left_top:before, .wpcsbd-text-only-template-5.wpcsbd-position-right_top:before {
            border-color:<?php echo esc_html($corner_bg_color); ?> transparent transparent transparent ;
        }
        .wpcsbd-text-only-template-5.wpcsbd-position-left_center:before, .wpcsbd-text-only-template-5.wpcsbd-position-left_center:before {
            border-color: <?php echo esc_html($corner_bg_color); ?> transparent transparent transparent;
        }

        .wpcsbd-text-only-template-5.wpcsbd-position-right_bottom:before, .wpcsbd-text-only-template-5.wpcsbd-position-left_bottom:before {
            border-color: transparent transparent <?php echo esc_html($corner_bg_color); ?> transparent;
        }
        .wpcsbd-text-only-template-5.wpcsbd-position-right_center:before, .wpcsbd-text-only-template-5.wpcsbd-position-right_center:before {
          border-color: <?php echo esc_html($corner_bg_color); ?> transparent transparent transparent;
        }

         /*
        template : 4
        */

        .wpcsbd-text-only-template-4.wpcsbd-position-left_top:after, .wpcsbd-text-only-template-4.wpcsbd-position-left_center:after, .wpcsbd-text-only-template-4.wpcsbd-position-left_bottom:after {
            border-color: <?php echo esc_html($corner_bg_color); ?> transparent transparent transparent;
        }
        .wpcsbd-text-only-template-4.wpcsbd-position-left_top:before, .wpcsbd-text-only-template-4.wpcsbd-position-left_center:before, .wpcsbd-text-only-template-4.wpcsbd-position-left_bottom:before {
            border-color: transparent transparent transparent <?php echo esc_html($corner_bg_color); ?>;
        }

        .wpcsbd-text-only-template-4.wpcsbd-position-right_top:after, .wpcsbd-text-only-template-4.wpcsbd-position-right_center:after, .wpcsbd-text-only-template-4.wpcsbd-position-right_bottom:after {
            border-color: transparent <?php echo esc_html($corner_bg_color); ?> transparent transparent;
        }

        .wpcsbd-text-only-template-4.wpcsbd-position-right_top:before, .wpcsbd-text-only-template-4.wpcsbd-position-right_center:before, .wpcsbd-text-only-template-4.wpcsbd-position-right_bottom:before {
            border-color: transparent transparent <?php echo esc_html($corner_bg_color); ?> transparent;
        }

        .wpcsbd-text-only-template-6:after {
            border-color: <?php echo esc_html($corner_bg_color); ?> transparent transparent transparent;
        }



        /*
          Teamplate : 1
         */

        .wpcsbd-text-only-template-1.wpcsbd-position-left_top:after {

            border-color:  <?php echo esc_html($background_color); ?> transparent transparent transparent;
        }
        .wpcsbd-text-only-template-1.wpcsbd-position-right_top:after {
            border-color: transparent <?php echo esc_html($background_color); ?> transparent transparent;
        }
        .wpcsbd-text-only-template-1.wpcsbd-position-right_bottom:after {
            border-color: transparent transparent <?php echo esc_html($background_color); ?> transparent;
        }
        .wpcsbd-text-only-template-1 {
            color: <?php echo esc_html($title_color); ?>;
        }
        
        .wpcsbd-text-only-template-1 ,.wpcsbd-text-only-template-2,
        .wpcsbd-text-only-template-3,.wpcsbd-text-only-template-4,.wpcsbd-text-only-template-5,
        .wpcsbd-text-only-template-6,.wpcsbd-text-only-template-7,
        .wpcsbd-text-only-template-9,.wpcsbd-text-only-template-10
        {
            background: <?php echo esc_html($background_color); ?>;
            color: <?php echo esc_html($title_color); ?>;
        }
        
        .wpcsbd-text-only-template-1.wpcsbd-position-left_bottom:after {
            border-color: transparent transparent transparent <?php echo esc_html($background_color); ?>;
        }
       
        
        
        .wpcsbd-image-bg-wrap.wpcsbd-image-1 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-2 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-3 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-4 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-5 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-6 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-7 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-8 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-9 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-10 .wpcsbd-inner-text-container
        {
            color: <?php echo esc_html($title_color); ?>;
        }

        .wpcsbd-text-only-template-2,
        .wpcsbd-text-only-template-1 {
            font-size: <?php echo esc_html($font_size); ?>px;
        }

        .wpcsbd-text-only-template-3,.wpcsbd-text-only-template-4,.wpcsbd-text-only-template-5,.wpcsbd-text-only-template-6{
            font-size: <?php echo esc_html($font_size); ?>px;
        }

        .wpcsbd-text-only-template-7,.wpcsbd-text-only-template-1,.wpcsbd-text-only-template-9,.wpcsbd-text-only-template-10{
            font-size: <?php echo esc_html($font_size); ?>px;
        }
       
        .wpcsbd-image-bg-wrap.wpcsbd-image-1 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-2 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-3 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-4 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-5 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-6 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-7 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-8 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-9 .wpcsbd-inner-text-container{
            font-size: <?php echo esc_html($font_size); ?>px;
        }
        .wpcsbd-icon-only i{
            font-size: <?php echo esc_html($font_size); ?>px;
        }
        .wpcsbd-image-bg-wrap.wpcsbd-image-1 .wpcsbd-image-ribbon, .wpcsbd-image-bg-wrap.wpcsbd-image-2 .wpcsbd-image-ribbon, .wpcsbd-image-bg-wrap.wpcsbd-image-3 .wpcsbd-image-ribbon, .wpcsbd-image-bg-wrap.wpcsbd-image-4 .wpcsbd-image-ribbon, .wpcsbd-image-bg-wrap.wpcsbd-image-5 .wpcsbd-image-ribbon, .wpcsbd-image-bg-wrap.wpcsbd-image-6 .wpcsbd-image-ribbon, .wpcsbd-image-bg-wrap.wpcsbd-image-7 .wpcsbd-image-ribbon, .wpcsbd-image-bg-wrap.wpcsbd-image-8 .wpcsbd-image-ribbon, .wpcsbd-image-bg-wrap.wpcsbd-image-9 .wpcsbd-image-ribbon, .wpcsbd-image-bg-wrap.wpcsbd-image-10 .wpcsbd-image-ribbon
        {
            width: <?php echo esc_html($image_size); ?>px;
            height: <?php echo esc_html($image_size); ?>px;
        }

        .wpcsbd-image-bg-wrap.wpcsbd-image-1 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-2 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-3 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-4 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-5 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-6 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-7 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-8 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-9 .wpcsbd-inner-text-container, .wpcsbd-image-bg-wrap.wpcsbd-image-10 .wpcsbd-inner-text-container
        {
            width: <?php echo esc_html($image_size); ?>px;
            height: <?php echo esc_html($image_size); ?>px;
            line-height:<?php echo esc_html($image_size); ?>px;
        }
    </style>
    <?php
}

