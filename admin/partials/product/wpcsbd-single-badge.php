<?php 
// global woccommerce and product
global $woocommerce;
global $product;
//  $product = new WC_Product( get_the_ID() );
$wpcsbd_basic_settings = get_option('wpcsbd_basic_settings');
if (isset($wpcsbd_basic_settings['wpcsbd_enable_single_page_badge']) && $wpcsbd_basic_settings['wpcsbd_enable_single_page_badge'] == '1') {

    // global post 
    global $post;
    $post_id = $post -> ID;
    $wpcsbd_advance_option = get_post_meta( $post_id, 'wpcsbd_advance_option', true );
    $position_left_top = isset( $wpcsbd_advance_option[ 'wpcsbd_badge_left_top_position' ] ) ? esc_attr( $wpcsbd_advance_option[ 'wpcsbd_badge_left_top_position' ] ) : 'none';


include(WPCSBD_PATH . 'admin/partials/product/position-inc/position-check.php');
include(WPCSBD_PATH . 'admin/partials/product/position-inc/position-inc.php');

    // if ($wpcsbd_basic_settings['wpcsbd_default_sale_badge'] != 'disable' && $wpcsbd_basic_settings['wpcsbd_default_sale_badge'] != 'default') {
    //     if ($product->is_on_sale() && $product->is_in_stock()) {
    //         $wpcsbd_post_id = $wpcsbd_basic_settings['wpcsbd_default_sale_badge'];
    //         $wpcsbd_all_option = get_post_meta($wpcsbd_post_id, 'wpcsbd_all_option', true);

    //         include(WPCSBD_PATH . 'public/partials/sales/sales-content.php');
    //     }
    // }
    
    if (isset($wpcsbd_basic_settings['wpcsbd_stock_badge']) && $wpcsbd_basic_settings['wpcsbd_stock_badge'] != 'default') {
        if (!$product->is_in_stock()) {
            remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
            $wpcsbd_stock_id = $wpcsbd_basic_settings['wpcsbd_stock_badge'];
            $wpcsbd_all_option = get_post_meta($wpcsbd_stock_id, 'wpcsbd_all_option', true);

            include(WPCSBD_PATH . 'public/partials/badge-content.php');
        }
    }
}