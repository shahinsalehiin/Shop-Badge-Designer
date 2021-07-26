                                     <option 
                                            value="left_top"  
                                            <?php 
                                            if ( isset( $wpcsbd_all_option[ 'wpcsbd_position_control' ] ) && $wpcsbd_all_option[ 'wpcsbd_position_control' ] == 'left_top' ) echo 'selected=="selected"';
                                            ?>>
                                            <?php 
                                            esc_html_e( 'Left Top', 'wpcsbd' )
                                            ?>
                                        </option>

                                        <option 
                                            value="left_center"  
                                            <?php 
                                            if ( isset( $wpcsbd_all_option[ 'wpcsbd_position_control' ] ) && $wpcsbd_all_option[ 'wpcsbd_position_control' ] == 'left_center' ) echo 'selected=="selected"';
                                            ?>>
                                            <?php 
                                            esc_html_e( 'Left Center', 'wpcsbd' )
                                            ?>
                                        </option>

                                        <option 
                                            value="left_bottom"  
                                            <?php 
                                            if ( isset( $wpcsbd_all_option[ 'wpcsbd_position_control' ] ) && $wpcsbd_all_option[ 'wpcsbd_position_control' ] == 'left_bottom' ) echo 'selected=="selected"';
                                            ?>>
                                            <?php 
                                            esc_html_e( 'Left Bottom', 'wpcsbd' ) ?>
                                        </option>

                                        <option 
                                            value="right_top"  
                                            <?php 
                                            if ( isset( $wpcsbd_all_option[ 'wpcsbd_position_control' ] ) && $wpcsbd_all_option[ 'wpcsbd_position_control' ] == 'right_top' ) echo 'selected=="selected"';
                                            ?>>
                                            <?php 
                                            esc_html_e( 'Right Top', 'wpcsbd' )
                                            ?>
                                        </option>

                                        <option 
                                            value="right_center"  
                                            <?php 
                                            if ( isset( $wpcsbd_all_option[ 'wpcsbd_position_control' ] ) && $wpcsbd_all_option[ 'wpcsbd_position_control' ] == 'right_center' ) echo 'selected=="selected"';
                                            ?>>
                                            <?php 
                                            esc_html_e( 'Right Center', 'wpcsbd' )
                                            ?>
                                        </option>

                                        <option 
                                            value="right_bottom"  
                                            <?php 
                                            if ( isset( $wpcsbd_all_option[ 'wpcsbd_position_control' ] ) && $wpcsbd_all_option[ 'wpcsbd_position_control' ] == 'right_bottom' ) echo 'selected=="selected"';
                                            ?>
                                            >
                                            <?php esc_html_e( 'Right Bottom', 'wpcsbd' )
                                            ?>
                                        </option>