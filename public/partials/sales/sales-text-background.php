<?php
// check text templates
// template file check

if ( isset( $wpcsbd_all_option[ 'text_design_templates' ] ) && $wpcsbd_all_option[ 'text_design_templates' ] == 'template-24' ) {
    ?>

    <div class="wpcsbd-text-only-main-wrap">
        <div class="wpcsbd-text-only-inner-wrap">
            <?php
        }
        ?>
        <div class="<?php
        echo esc_attr($span_class);
        ?>" id="wpcsbd-badge">

            <?php

            if ( isset( $wpcsbd_basic_settings[ 'wpcsbd_enable_auto_calculate_badge' ] ) && $wpcsbd_basic_settings[ 'wpcsbd_enable_auto_calculate_badge' ] == '1' )
            {

                // global woocommerce and product
                global $woocommerce;
                global $product;

if ( $product -> is_on_sale() ) {

    if ( isset( $wpcsbd_basic_settings[ 'wpcsbd_enable_minus_sign' ] ) && $wpcsbd_basic_settings[ 'wpcsbd_enable_minus_sign' ] ) {
        echo '-';
    }

    if ( isset( $wpcsbd_basic_settings[ 'auto_cal_type' ] ) && $wpcsbd_basic_settings[ 'auto_cal_type' ] == 'percentage-cal' ) {

        if ( $product -> is_type( 'simple' ) || $product -> is_type( 'external' ) || $product -> is_type( 'grouped' ) ) {

            // regular price
            $regular_price = get_post_meta( $product -> get_id(), '_regular_price', true );

             // sale price
            $sale_price = get_post_meta( $product -> get_id(), '_sale_price', true );

        } else {

            $prices = $product -> get_variation_prices( 'min', true );
            /* $regular_price = $product -> get_variation_price( 'max', true );
              $sale_price = current( $prices[ 'price' ] ); */

            // regular price
            $regular_price = $product -> get_variation_regular_price();

            // sale price
            $sale_price = $product -> get_variation_sale_price();
        }

        if ( ! empty( $sale_price ) ) {

            // amount save
            $amount_saved = $regular_price - $sale_price;

            // currency_symbol
            $currency_symbol = get_woocommerce_currency_symbol();

            // percentage
            $percentage = round( ( ( $regular_price - $sale_price ) / $regular_price ) * 100 );

            // number formate
            echo number_format( $percentage, 0, '', '' ) . '%';
        }

    } 
    else {

        if ( $product -> is_type( 'simple' ) || $product -> is_type( 'external' ) || $product -> is_type( 'grouped' ) ) {

            // regular price
            $regular_price = get_post_meta( $product -> get_id(), '_regular_price', true );

            // sale price
            $sale_price = get_post_meta( $product -> get_id(), '_sale_price', true );

        } else {

            $prices = $product -> get_variation_prices( 'min', true );
            /* $regular_price = $product -> get_variation_price( 'max', true );
              $sale_price = current( $prices[ 'price' ] ); */

            //regular price
            $regular_price = $product -> get_variation_regular_price();

            // sale price
            $sale_price = $product -> get_variation_sale_price();
        }
        if ( ! empty( $sale_price ) ) {

            // amount save
            $amount_saved = $regular_price - $sale_price;

            // currency symbol
            $currency_symbol = get_woocommerce_currency_symbol();

            // percentage
            $percentage = round( ( ( $regular_price - $sale_price ) / $regular_price ) * 100 );

            // amount save decimail
            echo wc_price( $amount_saved, array( 'decimals' => 0 ) );
        }
    }
    if ( isset( $wpcsbd_basic_settings[ 'wpcsbd_enable_extra_text' ] ) && $wpcsbd_basic_settings[ 'wpcsbd_enable_extra_text' ] == '1' ) {

        // extra text
        if ( isset( $wpcsbd_basic_settings[ 'wpcsbd_extra_text' ] ) ) {
            echo '&nbsp';
            echo esc_html($wpcsbd_basic_settings[ 'wpcsbd_extra_text' ]);
        }
    }
}
            } else {
                // badge type text
                if ( $badge_type == 'text' ) {

                    //include text type
                    include(WPCSBD_PATH . 'public/partials/template/text-type.php');

                } 
                // badge type icon
                else if ( $badge_type == 'icon' ) {

                    //include icon type
                    include(WPCSBD_PATH . 'public/partials/template/icon-type.php');

                } 
                //badge type both
                else {

                     //include both type
                    include(WPCSBD_PATH . 'public/partials/template/both-type.php');
                }
            }
            ?>
        </div>
        <?php

        if ( isset( $wpcsbd_all_option[ 'text_design_templates' ] ) && $wpcsbd_all_option[ 'text_design_templates' ] == 'template-24' ) {
            ?>
            
        </div>
    </div>
    <?php
}