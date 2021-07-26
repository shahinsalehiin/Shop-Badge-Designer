<div 
class="wpcsbd-badge-image-settings-wrap section-main-setting" id="image-setting-wrap-id"
<?php 
if ( $background_type == 'image-background' ) { ?> 
    style="display: block;" <?php } 
    else { ?> 
    style="display: none;" <?php } ?>>
        <div class="wpcsbd-image-only-class-wrap image0w-wrepa">
            <div class="wpcsbd-badge-option-all wpcsbd-option-wrape">
                <label class="badge-image-template">
                    <?php esc_html_e( 'Badge Image Template', 'wpcsbd' ); ?>
                </label>
                <div class="wpcsbd-badge-field-all-section" id="wpcsbd-badge-field-all-section">
                    <?php
                    $wpcsbd_store_images_bg = array(
                        1,
                        2,
                        3,
                        4,
                        6,
                        30,
                        31 
                    );
                    foreach ( $wpcsbd_store_images_bg as $wpcsbd_store_image_bg ) :
                        ?>
                        <div class="wpcsbd-hide-radio-btn" id="hide-radio-wpcsbd">
                            <input 
                            type="radio" 
                            id="<?php echo esc_attr($wpcsbd_store_image_bg); ?>" name="wpcsbd_all_option[existing_image]" class="wpcsbd-image-only-class"
                            value="<?php echo esc_attr($wpcsbd_store_image_bg); ?>"
                            <?php 
                            if ( isset( $wpcsbd_all_option[ 'existing_image' ] ) && $wpcsbd_all_option[ 'existing_image' ] == $wpcsbd_store_image_bg ) { ?>checked="checked"<?php } ?> <?php if ( ! isset( $wpcsbd_all_option[ 'existing_image' ] ) ) { ?>checked="checked"<?php } ?> />
                            <label 
                                class="wpcsbd-image-only-classs-demo"
                                for="<?php echo esc_attr($wpcsbd_store_image_bg); ?>">
                                <img 
                                class="wpcsbd-image-class"
                                src="<?php echo WPCSBD_IMG_DIR . '/badges/' . $wpcsbd_store_image_bg . '.png' ?>">
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
