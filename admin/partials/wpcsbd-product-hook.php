<?php 
class Wpcsbd_Product_Hook extends WPCSBD_Admin_Save {

    public function __construct(){
        // get setting option
        $wpcsbd_basic_settings = get_option('wpcsbd_basic_settings');

        // configure 
        if (isset($wpcsbd_basic_settings['wpcsbd_page_configure_option']) && $wpcsbd_basic_settings['wpcsbd_page_configure_option'] == 'method_one') {
            add_action('woocommerce_product_thumbnails', array($this, 'wpcsbd_display_single_page_badges'), 20);
            add_filter('woocommerce_sale_flash', array($this, 'wpcsbd_remove_sale_text'), 2, 2);
        } 

        // configure
        else if (isset($wpcsbd_basic_settings['wpcsbd_page_configure_option']) && $wpcsbd_basic_settings['wpcsbd_page_configure_option'] == 'method_two') {
            add_action('woocommerce_before_single_product_summary', array($this, 'wpcsbd_display_single_page_badges'), 20);
            add_filter('woocommerce_sale_flash', array($this, 'wpcsbd_remove_sale_text'), 2, 2);
        } 

        else {
            add_filter('woocommerce_sale_flash', array($this, 'wpcsbd_custom_sale_text'), 10, 3);
        }

        if (isset($wpcsbd_basic_settings['wpcsbd_shop_configure_option']) && $wpcsbd_basic_settings['wpcsbd_shop_configure_option'] == 'method_one') {
            add_filter('post_thumbnail_html', array($this, 'wpcsbd_badge_on_product'), 999, 1);
            add_filter('woocommerce_product_get_image', array($this, 'wpcsbd_badge_on_product'), 999, 1);
            add_filter('woocommerce_sale_flash', array($this, 'wpcsbd_remove_sale_text'), 2, 2);
        } 

        else if (isset($wpcsbd_basic_settings['wpcsbd_shop_configure_option']) && $wpcsbd_basic_settings['wpcsbd_shop_configure_option'] == 'method_two') {
            add_action('woocommerce_before_shop_loop_item_title', array($this, 'wpcsbd_badge_wrapper_start'), 5, 2);
            add_action('woocommerce_before_shop_loop_item_title', array($this, 'wpcsbd_display_product_badges_action'));
            add_action('woocommerce_before_shop_loop_item_title', array($this, 'wpcsbd_badge_wrapper_close'), 12, 2);
            add_filter('woocommerce_sale_flash', array($this, 'wpcsbd_remove_sale_text'), 2, 2);
        } 
        else {
            add_filter('woocommerce_sale_flash', array($this, 'wpcsbd_custom_sale_text'), 10, 3);
        }
        add_filter('woocommerce_locate_template', array($this, 'wpcsbd_locate_template'), 20, 3);
    }

    public function wpcsbd_display_single_page_badges() {

        include(WPCSBD_PATH . 'admin/partials/product/wpcsbd-single-badge.php');
    }

    public function wpcsbd_custom_sale_text($text, $flash) {
        include(WPCSBD_PATH . 'admin/partials/product/wpcsbd-custom-sale-text.php');
    }
    function wpcsbd_badge_on_product($html) {
        include(WPCSBD_PATH . 'admin/partials/product/wpcsbd-badge-product.php');
    }

    // Add the opening div to the img
    function wpcsbd_badge_wrapper_start() {

        echo '<div class="wpcsbd-badges-wrapper-only">';
    }

    // Close the div that we just added
    function wpcsbd_badge_wrapper_close() {
        echo '</div>';
    }

    // display product badge
    function wpcsbd_display_product_badges_action() {
        include(WPCSBD_PATH . 'admin/partials/product/wpcsbd-product-badge-action.php');
    }

    // remove sale text
    function wpcsbd_remove_sale_text($text, $flash) {
        $wpcsbd_basic_settings = get_option('wpcsbd_basic_settings');
       // if ($wpcsbd_basic_settings['wpcsbd_default_sale_badge'] == 'disable') {
            $text = '';
            return $text;
        //} else if ($wpcsbd_basic_settings['wpcsbd_default_sale_badge'] == 'default') {
            //return $text;
       // }
    }

    // locate template
    function wpcsbd_locate_template($template, $template_name, $template_path) {
        if ($template_name == 'loop/sale-flash.php') {
            $template = WPCSBD_PATH . '/woocommerce/templates/loop/sale-flash.php';
        }
        if ($template_name == 'single-product/sale-flash.php') {
            $template = WPCSBD_PATH . '/woocommerce/templates/single-product/sale-flash.php';
        }
        return $template;
    }
}
new Wpcsbd_Product_Hook();