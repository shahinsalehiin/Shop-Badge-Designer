<?php 
class Admin_Preview_Metabox extends WPCSBD_Admin_Save {
    public function __construct() {
        add_action('add_meta_boxes', array($this, 'wpcsbd_badge_preview'));
    }

    public function wpcsbd_badge_preview(){
        add_meta_box(
            'wpcsbd_preview_badges',
             __('Badge Preview', 'wpcsbd'),
             array($this, 'wpcsbd_preview_action'),
             'wpcsbd-badge',
             'side', 
             'default'
            );
    }

    public function wpcsbd_preview_action($post){
        wp_nonce_field(basename(__FILE__), 'wpcsbd_badge_nonce');
        ?>
        <div class="wpcsbd-badge-preview-wrapper wpcsbd-prev-wrap-class">
            <div class="wpcsbd-text-only-preview-wrap wpcsbd-te-prev-wrap-class">
                <div class="wpcsbd-badges-wrapper-only wpcsbd-smaller-wrap wpcsbd-prv-main">
                    <?php
                    include(WPCSBD_PATH . 'admin/partials/preview/preview-data.php');
                    ?>
                </div>
            </div>
        </div>

        <?php
    }
}

new Admin_Preview_Metabox();