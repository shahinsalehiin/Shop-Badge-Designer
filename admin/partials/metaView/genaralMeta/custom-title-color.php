                <div class="wpcsbd-badge-option-all cus-title-badge-color">
                            <label class="label-title-color">
                            <?php 
                                esc_html_e( 'Badge Title Color', 'wpcsbd' );
                            ?>
                            </label>
                            <div class="wpcsbd-badge-field-all-section badge-title-section-wrap">
                                <input 
                                type="text" 
                                class="wpcsbd-color-picker wpcsbd-text-only-color wpcsbd-title-custom-color"
                                data-alpha="true" 
                                name="wpcsbd_all_option[wpcsbd_text_color]"
                                value="<?php
                                if ( isset( $wpcsbd_all_option[ 'wpcsbd_text_color' ] ) ) {
                                    echo esc_attr( $wpcsbd_all_option[ 'wpcsbd_text_color' ] );
                                } else {
                                    echo "#ffffff";
                                }
                                ?>"
                                />
                                <p class="description wpcsbd-badge-title-color-desc">
                                    <?php esc_html_e( 'This is only for Text color', 'wpcsbd' ) ?>
                                </p>
                            </div>
                        </div>