                <?php
                    $post_id = $post -> ID;
                    $wpcsbd_all_option = get_post_meta( $post_id, 'wpcsbd_all_option', true );
                    $position = isset( $wpcsbd_all_option[ 'wpcsbd_position_control' ] ) ? esc_attr( $wpcsbd_all_option[ 'wpcsbd_position_control' ] ) : 'left_top';
                    $enable_tooltip_check = isset( $wpcsbd_all_option[ 'wpcsbd_enable_tooltip' ] ) ? esc_attr( $wpcsbd_all_option[ 'wpcsbd_enable_tooltip' ] ) : '0';

                    if ( $enable_tooltip_check == '1' ) {
                        if ( isset( $wpcsbd_all_option[ 'badge_tooltip_text' ] ) ) {
                            $tooltip_text = $wpcsbd_all_option[ 'badge_tooltip_text' ];
                        }
                    }
                    
                    $data_id = rand( 111111111, 999999999 );

                    if ( isset( $wpcsbd_all_option[ 'background_type' ] ) && $wpcsbd_all_option[ 'background_type' ] == 'image-background' ) {
                        $image_type = isset( $wpcsbd_all_option[ 'image_type' ] ) ? esc_attr( $wpcsbd_all_option[ 'image_type' ] ) : 'pre_existing_image';

                        if ( $image_type == 'pre_existing_image' ) {
                            $template = isset( $wpcsbd_all_option[ 'existing_image' ] ) ? esc_attr( $wpcsbd_all_option[ 'existing_image' ] ) : '1';
                            $wpcsbd_text_template = 'wpcsbd-image-' . $template;
                        } else {
                            $wpcsbd_text_template = 'wpcsbd-custom-image';
                        }
                        $background_class = 'wpcsbd-image-bg-wrap ' . $wpcsbd_text_template;
                    } else {
                        $template = isset( $wpcsbd_all_option[ 'text_design_templates' ] ) ? esc_attr( $wpcsbd_all_option[ 'text_design_templates' ] ) : 'template-1';
                        $wpcsbd_text_template = 'wpcsbd-text-only-' . $template;
                        $wpcsbd_text_template = 'wpcsbd-text-only-' . $template;
                        $background_class = 'wpcsbd-text-only-bg-wrap ' . $wpcsbd_text_template;
                    }
                    $badge_type = isset( $wpcsbd_all_option[ 'badge_type' ] ) ? esc_attr( $wpcsbd_all_option[ 'badge_type' ] ) : 'text';

                    if ( $badge_type == 'text' ) {
                        $span_class = 'wpcsbd-text-only ';
                    } else if ( $badge_type == 'icon' ) {
                        $span_class = 'wpcsbd-icon-only ';
                    } else {
                        $span_class = 'wpcsbd-text-only wpcsbd-icon-only ';
                    }

                    $disable_badge = isset( $wpcsbd_all_option[ 'wpcsbd_disable_badge' ] ) ? esc_attr( $wpcsbd_all_option[ 'wpcsbd_disable_badge' ] ) : '0';
                    if ( $disable_badge != '1' ) {
                        ?>
                        <div class="<?php echo esc_attr($background_class); ?> wpcsbd-badges <?php
                            echo ' wpcsbd-position-' . $position;
                            if ( $enable_tooltip_check == '1' ) {
                                echo ' wpcsbd-tooltip-active';
                            }
                            ?>" data-id="wpcsbd_<?php echo esc_attr($data_id);
                            ?>"  <?php if ( $enable_tooltip_check == '1' ) { ?>
                                title = "<?php echo esc_attr( $tooltip_text ); ?>"
                            <?php } ?>>
                                <?php
                                if ( isset( $wpcsbd_all_option[ 'background_type' ] ) && $wpcsbd_all_option[ 'background_type' ] == 'image-background' ) {

                                    include(WPCSBD_PATH . 'public/partials/template/image-background.php');

                                } else {
                                    $text_value = isset( $wpcsbd_all_option[ 'badge_text' ] ) ? esc_attr( $wpcsbd_all_option[ 'badge_text' ] ) : 'Sale';

                                    include(WPCSBD_PATH . 'public/partials/template/text-background.php');
                                }
                                ?>
                        </div>
                    <?php } ?>

                    <img src="<?php echo WPCSBD_PREVIEW_IMG ?>/hoodie.jpg">
                    
                    <?php 
                    include(WPCSBD_PATH . 'public/partials/css/badge-custom-css.php');
                    ?>