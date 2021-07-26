                <div class="wpcsbd-badge-option-all">
                        <label>
                            <?php esc_html_e( 'Badge Design Text', 'wpcsbd' ); ?>
                        </label>
                        <div class="wpcsbd-badge-field-all-section">
                            <input 
                            type="text" 
                            class="wpcsbd-badge-text"
                            value="<?php
                            if ( isset( $wpcsbd_all_option[ 'badge_text' ] ) ) {
                                echo esc_attr( $wpcsbd_all_option[ 'badge_text' ] );
                            } else {
                                echo esc_html_e( 'Sale', 'wpcsbd' );
                            }
                            ?>" name='wpcsbd_all_option[badge_text]'>
                        </div>
                    </div>
                    <div class="wpcsbd-badge-2nd-text-wrap-class">
                        <div class="wpcsbd-badge-option-all">
                            <label>
                                <?php esc_html_e( 'Badge Design Second Text', 'wpcsbd' ); ?>
                            </label>
                            <div class="wpcsbd-badge-field-all-section">
                                <input 
                                type="text" class="wpcsbd-second-badge-text"
                                value="<?php
                                if ( isset( $wpcsbd_all_option[ 'badge_second_text' ] ) ) {
                                    echo esc_attr( $wpcsbd_all_option[ 'badge_second_text' ] );
                                }
                                ?>" name='wpcsbd_all_option[badge_second_text]'>
                            </div>
                        </div>
                    </div>