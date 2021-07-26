<?php 
global $post;
global $product;
if ($product) {
        ob_start();
        $wpcsbd_basic_settings = get_option('wpcsbd_basic_settings');
        global $post;
        $post_id = $post -> ID;
        $wpcsbd_advance_option = get_post_meta( $post_id, 'wpcsbd_advance_option', true );
        $position_left_top = isset( $wpcsbd_advance_option[ 'wpcsbd_badge_left_top_position' ] ) ? esc_attr( $wpcsbd_advance_option[ 'wpcsbd_badge_left_top_position' ] ) : 'none';

        include(WPCSBD_PATH . 'admin/partials/product/position-inc/position-check.php');

        include(WPCSBD_PATH . 'admin/partials/product/position-inc/position-inc.php');

        if ($product->is_on_sale() && $product->is_in_stock()) {
            remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
            $sale_badge = isset($wpcsbd_basic_settings['wpcsbd_default_sale_badge']) ? esc_attr($wpcsbd_basic_settings['wpcsbd_default_sale_badge']) : 'disable';
            if (($sale_badge != 'disable') && ($sale_badge != 'default')) {
                $wpcsbd_post_id = $wpcsbd_basic_settings['wpcsbd_default_sale_badge'];
                $wpcsbd_all_option = get_post_meta($wpcsbd_post_id, 'wpcsbd_all_option', true);
                include(WPCSBD_PATH . 'public/partials/sales/sales-content.php');
            }
        }
        if (isset($wpcsbd_basic_settings['wpcsbd_stock_badge']) && $wpcsbd_basic_settings['wpcsbd_stock_badge'] != 'default') {
            if (!$product->is_in_stock()) {
                remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
                $wpcsbd_stock_id = $wpcsbd_basic_settings['wpcsbd_stock_badge'];
                $wpcsbd_all_option = get_post_meta($wpcsbd_stock_id, 'wpcsbd_all_option', true);
                include(WPCSBD_PATH . 'public/partials/badge-content.php');
            }
        }
        $data = ob_get_contents();
        if (is_admin()) {
            $html = $html;
        } else {
            if (is_cart() || is_checkout() || is_account_page() || is_wc_endpoint_url() || is_product()) {
                $html = $html;
            } else {
                $html = '<div class="wpcsbd-badges-wrapper-only">' . $data . $html . '</div>';
            }
        }
        ob_end_clean();
}
return $html;