                            <label class="wpcsbd-bg-label">
                            <?php
                                esc_html_e( 'Background Type', 'wpcsbd' );
                                $background_type = isset( $wpcsbd_all_option[ 'background_type' ] ) ? esc_attr( $wpcsbd_all_option[ 'background_type' ] ) : 'text-background';
                                ?>
                            </label>
                            <div class="wpcsbd-badge-field-all-section">
                                <label>
                                    <input 
                                    type="radio" 
                                    value="text-background" 
                                    name="wpcsbd_all_option[background_type]"
                                    <?php
                                        checked( $background_type, 'text-background' );
                                        ?> class="wpcsbd-background-type-text-image"/>
                                        <?php 
                                        esc_html_e( "Text Background", 'wpcsbd' );
                                        ?>
                                </label>
                                <label>
                                    <input 
                                    type="radio" 
                                    value="image-background" 
                                    name="wpcsbd_all_option[background_type]"
                                    <?php
                                        checked( $background_type, 'image-background' );
                                        ?>  class="wpcsbd-background-type-text-image"/><?php esc_html_e( 'Image Background', 'wpcsbd' ); ?>
                                </label>
                            </div>
                            </div>
                            <?php 
                                include(WPCSBD_PATH . 'admin/partials/metaView/background-types/image-background.php');

                                include(WPCSBD_PATH . 'admin/partials/metaView/background-types/text-background.php');
                             ?>