<?php 
class WPCSBD_Admin_Column extends WPCSBD_Admin_Save {
    public function __construct(){
        add_filter('post_row_actions', array($this, 'wpcsbd_remove_row_actions'), 10, 1);
        
        add_filter('manage_wpcsbd-badge_posts_columns', array($this, 'wpcsbd_columns_head'));

        add_action('manage_wpcsbd-badge_posts_custom_column', array($this, 'wpcsbd_columns_content'), 10, 2);
    }
    
    function wpcsbd_remove_row_actions($actions) {
        if (get_post_type() == 'wpcsbd-badge') { // choose the post type where you want to hide the button
            unset($actions['view']); // this hides the VIEW button on your edit post screen
            unset($actions['inline hide-if-no-js']);
        }
        return $actions;
    }

    
    /**
     * Some thing 
     *
     * @since 1.0.0
     * @param  array $columns
     * @return array $columns
     */
    function wpcsbd_columns_head( $columns ) {
        unset($columns['date']);
        
        $columns['badge_type']        = __('Badge Type', 'wpcsbd');
        $columns['badge_text_letter'] = __('Badges', 'wpcsbd');
        $columns['badge_date']        = __('Date', 'wpcsbd');
        return $columns;
    }

    function wpcsbd_columns_content($column, $post_id) {
        $id = $post_id;
        $wpcsbd_all_option = get_post_meta($post_id, 'wpcsbd_all_option', true);
        if ($column == 'badge_type') {
            if (isset($wpcsbd_all_option['background_type']) && $wpcsbd_all_option['background_type'] == 'text-background') {
                $value = $wpcsbd_all_option['text_design_templates'];
                //print_r( $wpcsbd_all_option);
                $template = explode('-', $value);
                ?>
                <img class="wpcsbd-live-image" src="<?php echo WPCSBD_IMG_DIR . 'text-design/' . $template[1] . '.png' ?>">
                <?php
            } else {
                ?>
                <img class="wpcsbd-live-image" src="<?php echo WPCSBD_IMG_DIR . 'badges/' . $wpcsbd_all_option['existing_image'] . '.png' ?>">
                <?php
            }
        }
        if ($column == 'badge_text_letter') {

            if (isset($wpcsbd_all_option['badge_type']) && $wpcsbd_all_option['badge_type'] == 'text') {
                echo esc_html($wpcsbd_all_option['badge_text']);
            }
        }
        if ($column == 'badge_date') {
            echo get_the_date('l, F j, Y', $post_id) . "<br>" . get_post_status($post_id);
        }
    }
}
new WPCSBD_Admin_Column();
?>
