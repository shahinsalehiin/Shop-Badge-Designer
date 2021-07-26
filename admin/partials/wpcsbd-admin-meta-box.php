<?php
class Admin_MetaBox extends WPCSBD_Admin_Save {
    public function __construct(){
        //added badges_init metabox
        add_action('add_meta_boxes', array($this, 'wpcsbd_add_badges_init'));
        add_action('add_meta_boxes', array($this, 'wpcsbd_product_badge_settings'));
    }


    public function wpcsbd_add_badges_init() {
        add_meta_box(
            'wpcsbd_add_badges',
            esc_html__('Shop Badge Designer', 'wpcsbd'),
             array($this, 'wpcsbd_add_action'),
             'wpcsbd-badge',
             'normal',
              'low'
            );
        
    }

    public function wpcsbd_product_badge_settings(){
        add_meta_box(
            'wpcsbd_each_badges_settings',
            esc_html__('Shop Badge Designer Setting', 'wpcsbd'),
            array($this, 'wpcsbd_product_each_badge_action'),
            'product', 
            'normal', 
            'low'
        );
    } 

    public function wpcsbd_add_action(){
        wp_nonce_field(basename(__FILE__), 'wpcsbd_badge_nonce');
        global $post;
        $post_id = $post -> ID;
        $wpcsbd_all_option = get_post_meta( $post_id, 'wpcsbd_all_option', true );

        ?>
        <div class="wpcsbd-badge-main-section" id="wpcsbd-badge-main-section-id">
            <div class="wpcsbd-settings-wrapper badge-matabox-filed">
                <ul class="wpcsbd-settings-tab badge-tab-wpcsbd">
                    <li 
                        data-menu="layout-settings" 
                        class="wpcsbd-settings-tabs-click wpcsbd-settings-tab-active wpcsbd-badge-design-tab">
                        <?php esc_html_e( 'Badges Design', 'wpcsbd' ) ?>
                    </li>
                    <li 
                        data-menu="general-settings" 
                        class="wpcsbd-settings-tabs-click wpcsbd-badge-setting">
                        <?php esc_html_e( 'Badges Settings', 'wpcsbd' ) ?>
                    </li>
                </ul>
            </div>
        </div>
        <div 
        class="wpcsbd-badge-tab-setting-wrap wpcsbd-active-badge-setting" data-menu-ref="layout-settings"
        >
            <div class="wpcsbd-settings-wrapper badge-setting">
                <div class="wpcsbd-badge-option-all badge-wrap">
                    <label>
                        <?php
                        esc_html_e( 'Badge Design Type', 'wpcsbd' );
                        $badge_type = isset( $wpcsbd_all_option[ 'badge_type' ] ) ? esc_attr( $wpcsbd_all_option[ 'badge_type' ] ) : 'text';
                        ?>
                    </label>
                    <div class="wpcsbd-badge-field-all-section badge-type-radio">
                        <label>
                            <input 
                            type="radio" 
                            value="text" 
                            name="wpcsbd_all_option[badge_type]"
                            <?php
                            checked( $badge_type, 'text' );
                            ?> 
                            class="wpcsbd-designs-type"/>
                            <?php esc_html_e( "Badge Text Only", 'wpcsbd' ); ?>
                        </label></br>
                        <label>
                            <input 
                            type="radio" 
                            value="icon" 
                            name="wpcsbd_all_option[badge_type]"
                            <?php
                            checked( $badge_type, 'icon' );
                            ?>  
                            class="wpcsbd-designs-type"
                            />
                            <?php esc_html_e( 'Badge Icon Only', 'wpcsbd' ); ?>
                        </label></br>
                        <label>
                            <input 
                            type="radio" 
                            value="both" 
                            name="wpcsbd_all_option[badge_type]"
                            <?php
                            checked( $badge_type, 'both' );
                            ?>  
                            class="wpcsbd-designs-type"/>
                            <?php esc_html_e( 'Badge Both', 'wpcsbd' ); ?>
                        </label>
                    </div>
                 </div> 

                <div class="wpcsbd-text-only-settings-wrap-class"
                <?php 
                if ( $badge_type == 'icon' ) { ?> 
                style="display: none;" <?php } else { ?> style="display: block;" <?php } ?>>
                    
                <?php 
                    include(WPCSBD_PATH . 'admin/partials/metaView/badge-text.php');
                ?>
                </div>

                <div 
                class="wpcsbd-icon-only-settings-wrap-class"
                <?php if ( $badge_type == 'text' ) { ?> style="display: none;" <?php } else { ?> style="display: block;" <?php } ?>>  
                    <?php 
                        include(WPCSBD_PATH . 'admin/partials/metaView/chose-icon.php');
                    ?>
                    </div> 

                     <!-- Badge Position -->
                        <div class="wpcsbd-badge-option-all badge-design-position">
                            <label class="badgep badge-label">
                            <?php 
                            esc_html_e( 'Badge Design Position', 'wpcsbd' );
                            ?>
                            </label>
                            <div class="wpcsbd-badge-field-all-section badge-in">
                                <div class="wpcsbd-badge-field-inner-wrap">
                                    <select 
                                    name="wpcsbd_all_option[wpcsbd_position_control]" class="wpcsbd-badge-position badgep-design">
                                        <?php 
                                        include(WPCSBD_PATH . 'admin/partials/metaView/position-option.php');
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Badge Position End -->

                        <!-- Badge background type start -->
                        <div class="wpcsbd-badge-option-all">
                            <?php 
                                include(WPCSBD_PATH . 'admin/partials/metaView/background-type.php');
                             ?>
                        </div>
                    <!-- Badge background type end -->


                </div>
            </div>
        </div>
    

        <!-- Genaral Tabs Start -->
        <div 
            class="wpcsbd-badge-tab-setting-wrap"
            data-menu-ref="general-settings">
              <div class="general-main-section">
                <div class ="wpcsbd-badge-option-all">
                    <label for="wpcsbd-enable-custom-design" class="wpcsbd-enable-custom-design">
                        <?php esc_html_e( 'Enable Custom Design', 'wpcsbd' ); ?>
                    </label>
                    <?php 
                        include(WPCSBD_PATH . 'admin/partials/metaView/genaralMeta/enabale-custom-design.php');
                    ?>
                </div>

                <div 
                    class="wpcsbd-custom-design-container custom-design-section" <?php if ( isset( $wpcsbd_all_option[ 'wpcsbd_custom_design_open' ] ) && $wpcsbd_all_option[ 'wpcsbd_custom_design_open' ] == '1' ) { ?> style="display:block;"<?php } else { ?> style="display:none;" <?php } ?>>
                        
                    <?php 
                        include(WPCSBD_PATH . 'admin/partials/metaView/genaralMeta/custom-title-color.php');
                    ?>
                

                    <?php 
                        include(WPCSBD_PATH . 'admin/partials/metaView/genaralMeta/custom-bg-color.php');
                    ?>

                    <?php 
                        include(WPCSBD_PATH . 'admin/partials/metaView/genaralMeta/badge-corner-bg-color.php');
                    ?>

                    <?php 
                        include(WPCSBD_PATH . 'admin/partials/metaView/genaralMeta/badge-custom-size.php');
                    ?>


                </div>

            </div>
            
        </div>
    
   <?php
    }
    
    public function wpcsbd_product_each_badge_action($post){
        wp_nonce_field(basename(__FILE__), 'wpcsbd_badge_nonce');
        include(WPCSBD_PATH . 'admin/partials/metaView/product-page/product-each-badges.php');
    }

}
new Admin_MetaBox();