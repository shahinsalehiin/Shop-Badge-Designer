<div class="wpcsbd-badge-option-all" id="wpcsbd-cus-bg-color">
        <label class="wpcsbd-cus-bg-color-label">
        <?php 
            esc_html_e( 'Badge Background Color', 'wpcsbd' );
        ?>
        </label>
        <div class="wpcsbd-badge-field-all-section wpcsbd-cus-bgcolor-in" id="wpcsbd-cus-bg-color-input">
            <input 
                type="text" 
                class="wpcsbd-color-picker wpcsbd-bg-color"
                data-alpha="true" 
                name="wpcsbd_all_option[wpcsbd_background_color]"
                value="<?php
                if ( isset( $wpcsbd_all_option[ 'wpcsbd_background_color' ] ) ) {
                    echo esc_attr( $wpcsbd_all_option[ 'wpcsbd_background_color' ] );
                } else {
                    echo "#ffffff";
                }
                ?>"
            />
            <p class="description"> 
                <?php esc_html_e( 'This is only for Text Background', 'wpcsbd' ) ?>
            </p>

        </div>
    </div>