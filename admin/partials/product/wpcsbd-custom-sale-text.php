<?php 
$wpcsbd_basic_settings = get_option('wpcsbd_basic_settings');

// global post and product
global $post;
global $product;

// get product id
$product = new WC_Product(get_the_ID());

if (is_product()) {
    if ((isset($wpcsbd_basic_settings['wpcsbd_default_sale_badge'])) && ($wpcsbd_basic_settings['wpcsbd_default_sale_badge'] == 'disable')) {
        $text = '';
        return $text;
    } 
    else if ( (isset($wpcsbd_basic_settings['wpcsbd_default_sale_badge'])) && ($wpcsbd_basic_settings['wpcsbd_default_sale_badge'] == 'default')) {
        return $text;
    } 
    else {
        ob_start();
        if (isset($wpcsbd_basic_settings['wpcsbd_enable_single_page_badge']) && $wpcsbd_basic_settings['wpcsbd_enable_single_page_badge'] == '1') {
            // global post
            global $post;
            $post_id = $post -> ID;

            $wpcsbd_advance_option = get_post_meta( $post_id, 'wpcsbd_advance_option', true );

            // get position left_top
            $position_left_top = isset( $wpcsbd_advance_option[ 'wpcsbd_badge_left_top_position' ] ) ? esc_attr( $wpcsbd_advance_option[ 'wpcsbd_badge_left_top_position' ] ) : 'none';


            // include position check
        include(WPCSBD_PATH . 'admin/partials/product/position-inc/position-check.php');

        // include position inc
        include(WPCSBD_PATH . 'admin/partials/product/position-inc/position-inc.php');

            if ($wpcsbd_basic_settings['wpcsbd_default_sale_badge'] != 'disable' && $wpcsbd_basic_settings['wpcsbd_default_sale_badge'] != 'default') {
                if ($product->is_on_sale() && $product->is_in_stock()) {
                    $wpcsbd_post_id = $wpcsbd_basic_settings['wpcsbd_default_sale_badge'];
                    $wpcsbd_all_option = get_post_meta($wpcsbd_post_id, 'wpcsbd_all_option', true);
                    include(WPCSBD_PATH . 'public/partials/sales/sales-content.php');
                }
            }
            
            if (isset($wpcsbd_basic_settings['wpcsbd_stock_badge']) && $wpcsbd_basic_settings['wpcsbd_stock_badge'] != 'default') {
                if (!$product->is_in_stock()) {
                    $wpcsbd_stock_id = $wpcsbd_basic_settings['wpcsbd_stock_badge'];
                    $wpcsbd_all_option = get_post_meta($wpcsbd_stock_id, 'wpcsbd_all_option', true);
                    include(WPCSBD_PATH . 'public/partials/badge-content.php');
                }
            }
        }
        $data = ob_get_contents();
        $text = '<div class="wpcsbd-badges-wrapper-only">' . $data . '</div>';
        ob_end_clean();

        return $text;
    }
} else {
    if ((isset($wpcsbd_basic_settings['wpcsbd_default_sale_badge'])) && ($wpcsbd_basic_settings['wpcsbd_default_sale_badge'] == 'disable')) {
        $text = '';
        return $text;
    } else if ( (isset($wpcsbd_basic_settings['wpcsbd_default_sale_badge'])) && ($wpcsbd_basic_settings['wpcsbd_default_sale_badge'] == 'default')) {
        return $text;
    } else {
        ob_start();
        global $post;
        $post_id = $post -> ID;
        $wpcsbd_advance_option = get_post_meta( $post_id, 'wpcsbd_advance_option', true );
        $position_left_top = isset( $wpcsbd_advance_option[ 'wpcsbd_badge_left_top_position' ] ) ? esc_attr( $wpcsbd_advance_option[ 'wpcsbd_badge_left_top_position' ] ) : 'none';


        include(WPCSBD_PATH . 'admin/partials/product/position-inc/position-check.php');
        // include position inc
        include(WPCSBD_PATH . 'admin/partials/product/position-inc/position-inc.php');

        if ($product->is_on_sale() && $product->is_in_stock()) {
            $sale_badge = isset($wpcsbd_basic_settings['wpcsbd_default_sale_badge']) ? esc_attr($wpcsbd_basic_settings['wpcsbd_default_sale_badge']) : 'disable';
            if (($sale_badge != 'disable') && ($sale_badge != 'default')) {
                $wpcsbd_post_id = $wpcsbd_basic_settings['wpcsbd_default_sale_badge'];
                $wpcsbd_all_option = get_post_meta($wpcsbd_post_id, 'wpcsbd_all_option', true);
                include(WPCSBD_PATH . 'public/partials/sales/sales-content.php');
            }
        }
        if (isset($wpcsbd_basic_settings['wpcsbd_stock_badge']) && $wpcsbd_basic_settings['wpcsbd_stock_badge'] != 'default') {
            if (!$product->is_in_stock()) {
                $wpcsbd_stock_id = $wpcsbd_basic_settings['wpcsbd_stock_badge'];
                $wpcsbd_all_option = get_post_meta($wpcsbd_stock_id, 'wpcsbd_all_option', true);
                include(WPCSBD_PATH . 'public/partials/badge-content.php');
            }
        }
        $data = ob_get_contents();
        if (is_admin()) {
            $html = $text;
        } else {
            if (is_cart() || is_checkout() || is_account_page() || is_wc_endpoint_url()) {
                $html = $text;
            } else {
                $html = '<div class="wpcsbd-badges-wrapper-only">' . $data . '</div>';
            }
        }
        ob_end_clean();
    }
    return $html;
}