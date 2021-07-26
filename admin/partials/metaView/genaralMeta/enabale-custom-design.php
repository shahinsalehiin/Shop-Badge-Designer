                <div class="wpcsbd-badge-field-all-section">
                    <label class="wpcsbd-switch label-enable-checkbox">
                        <input 
                        type="checkbox" 
                        class="wpcsbd-display-custom wpcsbd-checkbox enable-checkbox-section"
                        value="<?php
                        if ( isset( $wpcsbd_all_option[ 'wpcsbd_custom_design_open' ] ) ) {
                            echo esc_attr( $wpcsbd_all_option[ 'wpcsbd_custom_design_open' ] );
                        } else {
                            echo '0';
                        }
                        ?>" 
                        name="wpcsbd_all_option[wpcsbd_custom_design_open]"
                        <?php if ( isset( $wpcsbd_all_option[ 'wpcsbd_custom_design_open' ] ) && $wpcsbd_all_option[ 'wpcsbd_custom_design_open' ] == '1' ) { ?>checked="checked"<?php } ?>/>

                        <div class="wpcsbd-slider round rod-shape-section"></div>
                    </label>
                    <p class="description enable-section-desc"> 
                        <?php 
                            esc_html_e( 'Enable custom design to change color/font/padding.', 'wpcsbd' )
                        ?>
                    </p>
                </div>