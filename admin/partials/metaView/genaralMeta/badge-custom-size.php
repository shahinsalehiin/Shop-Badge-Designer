<div class="wpcsbd-badge-option-all wpcsbd-badge-cus-font-size-main">
        <label class="wpcsbd-badge-cus-font-size-label">
            <?php esc_html_e( 'Font Size', 'wpcsbd' ); ?>
        </label>
        <div class="wpcsbd-badge-field-all-section wpcsbd-badge-cus-font-size-input">
            <input 
                type="number" 
                class="wpcsbd-font-size wpcsbd-badge-cus-font-size-inpn"
                min="1" 
                name="wpcsbd_all_option[wpcsbd_font_size]"
                value="<?php
                if ( isset( $wpcsbd_all_option[ 'wpcsbd_font_size' ] ) ) {
                    echo esc_attr( $wpcsbd_all_option[ 'wpcsbd_font_size' ] );
                }
                ?>"
            />
            <div class="wpcsbd-unit-quote wpcsbd-badge-cus-font-size-px">
                <?php esc_html_e( 'px', 'wpcsbd' ); ?>
            </div>
        </div>
    </div>
    <div class="wpcsbd-badge-option-all wpcsbd-badge-cus-image-size-main">
        <label class="wpcsbd-badge-cus-image-size-label">
            <?php esc_html_e( 'Image Size', 'wpcsbd' ); ?>
        </label>
        <div class="wpcsbd-badge-field-all-section wpcsbd-badge-cus-image-size-inp">
            <input 
                type="number" 
                class="wpcsbd-image-size wpcsbd-badge-cus-image-size-inpun"
                min="1" 
                name="wpcsbd_all_option[wpcsbd_image_size]"
                value="<?php
                if ( isset( $wpcsbd_all_option[ 'wpcsbd_image_size' ] ) ) {
                    echo esc_attr( $wpcsbd_all_option[ 'wpcsbd_image_size' ] );
                }
            ?>"
            />
            <div class="wpcsbd-unit-quote wpcsbd-badge-cus-image-size-px">
                <?php esc_html_e( 'px', 'wpcsbd' ); ?>
            </div>
        </div>
    </div>
    <p class="description wpcsbd-badge-cus-image-size-desc">
    <?php esc_html_e( 'Note : Save to see the changes of custom design', 'wpcsbd' ) ?>
    </p>