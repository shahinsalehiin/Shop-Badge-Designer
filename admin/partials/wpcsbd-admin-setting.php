<?php
  class Wpcsbd_Admin_Setting extends WPCSBD_Admin_Save {
    public function __construct(){
        add_action( 'admin_menu', array( $this, 'wpcsbd_main_register_menu' ) );
        add_action( 'init', array( $this, 'wpcsbd_main_custom_post' ) );
        add_action('admin_post_wpcsbd_settings_save', array($this, 'wpcsbd_form_settings'));
    }
    public function wpcsbd_main_custom_post(){
        $labels = array(
            'name' => __( 'Badge Designer', 'post type general name', 'wpcsbd' ),
            'singular_name' => __( 'Badge Designer', 'post type singular name', 'wpcsbd' ),
            'menu_name' => __( 'Shop Badges', 'admin menu', 'wpcsbd' ),
            'name_admin_bar' => __( 'Badge Designer', 'add new on admin bar', 'wpcsbd' ),
            'add_new' => __( 'Add Badge', 'Badge', 'wpcsbd' ),
            'add_new_item' => __( 'Add New Badge', 'wpcsbd' ),
            'new_item' => __( 'New Badge', 'wpcsbd' ),
            'edit_item' => __( 'Edit Badge', 'wpcsbd' ),
            'view_item' => __( 'View Badge', 'wpcsbd' ),
            'all_items' => __( 'All Badge', 'wpcsbd' ),
            'search_items' => __( 'Search Badge', 'wpcsbd' ),
            'parent_item_colon' => __( 'Parent Badge Designer:', 'wpcsbd' ),
            'not_found' => __( 'Badge not found.', 'wpcsbd' ),
            'not_found_in_trash' => __( 'No Badge found in Trash.', 'wpcsbd' )
        );
        
        $args = array(
            'labels' => $labels,
            'description' => __( 'Description.', 'wpcsbd' ),
            'public' => false,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_icon' => 'dashicons-image-filter',
            'query_var' => true,
            'rewrite' => array( 'slug' => 'wpcsbd' ),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 9,
            'supports' => array( 'title' )
        );
        register_post_type( 'wpcsbd-badge', $args );
    }

    function wpcsbd_main_register_menu(){

        add_submenu_page( 
            'edit.php?post_type=wpcsbd-badge',
        __( 'Settings', 'wpcsbd' ),
         __( 'Badge Settings', 'wpcsbd' ),
         'manage_options', 
         'wpcsbd-badges-settings',
         array( $this, 'wpcsbd_badge_settings' ) );

        /*add_submenu_page(
            'edit.php?post_type=wpcsbd-badge',
        __( 'Pro Plugin Fetures', 'wpcsbd' ),
         __( 'Pro Version Plugin', 'wpcsbd' ),
         'manage_options', 
         'woo_badge_design_pro', 
         array( $this, 'woo_badge_design_pro' ) );*/

    }

    public function wpcsbd_badge_settings(){
      // echo "setting";
       include(WPCSBD_PATH . 'admin/partials/setting/basic-setting.php');
    }

    function wpcsbd_form_settings() {
        if (isset($_POST['wpcsbd_form_nonce_field']) && wp_verify_nonce($_POST['wpcsbd_form_nonce_field'], 'wpcsbd_form_nonce')) {

            if (isset($_POST['wpcsbd_basic_settings'])) {
                $wpcsbd_common = (array) $_POST['wpcsbd_basic_settings'];
                $wpcsbd_common_option = array_map('sanitize_text_field', $wpcsbd_common);
                update_option('wpcsbd_basic_settings', $wpcsbd_common_option);
            }
        }
        wp_redirect(admin_url('admin.php?page=wpcsbd-badges-settings&message=1'));
        exit;
    }

    public function woo_badge_design_pro(){
        echo "pro";
    }

  }
  new Wpcsbd_Admin_Setting;