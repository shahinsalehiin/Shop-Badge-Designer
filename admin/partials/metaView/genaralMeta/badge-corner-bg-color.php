<div class="wpcsbd-badge-option-all" id="wpcsbd-corner-bg-color">
        <label class="wpcsbd-corner-bg-color-label">
            <?php esc_html_e( 'Badge Coner Background', 'wpcsbd' ); ?>
        </label>
        <div class="wpcsbd-badge-field-all-section" id="wpcsbd-corner-bg-color-input">
            <input 
                type="text" 
                class="wpcsbd-color-picker wpcsbd-coner-color wpcsbd-corner-bg-color-in"
                data-alpha="true" 
                name="wpcsbd_all_option[wpcsbd_corner_background_color]"
                value="<?php
                if ( isset( $wpcsbd_all_option[ 'wpcsbd_corner_background_color' ] ) ) {
                    echo esc_attr( $wpcsbd_all_option[ 'wpcsbd_corner_background_color' ] );
                } else {
                    echo "#ffffff";
                }
                ?>"
            />
            <p class="description wpcsbd-corner-bg-color-desc">
            <?php esc_html_e( 'This is only  for Corner Background', 'wpcsbd' ) ?>
            </p>

        </div>
    </div>