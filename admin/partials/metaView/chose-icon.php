                    <div class="wpcsbd-badge-option-all">
                            <label>
                                <?php esc_html_e( 'Choose Icon', 'wpcsbd' ); ?>
                            </label>
                            <div class="wpcsbd-badge-field-all-section">
                                <div 
                                data-target="icon-picker" class="button icon-picker 
                                <?php
                                if ( ! empty( $wpcsbd_all_option[ 'badge_icon' ] ) ) {
                                    $value = $wpcsbd_all_option[ 'badge_icon' ];
                                    $v = explode( '|', $value );
                                    if ( isset( $v[ 1 ] ) ) {
                                        echo esc_attr($v[ 0 ]) . ' ' . esc_attr($v[ 1 ]);
                                    }
                                } else {
                                    echo esc_attr( 'dashicons dashicons-plus' );
                                }
                                ?>">
                                </div>
                                <input 
                                  class="icon-picker-input" type="text" 
                                  name="wpcsbd_all_option[badge_icon]"
                                  value="<?php
                                    if ( isset( $wpcsbd_all_option[ 'badge_icon' ] ) ) {
                                        echo esc_attr( $wpcsbd_all_option[ 'badge_icon' ] );
                                    } else {
                                        echo esc_attr( 'dashicons dashicons-plus' );
                                    }
                                    ?>"/>
                            </div>
                        </div>