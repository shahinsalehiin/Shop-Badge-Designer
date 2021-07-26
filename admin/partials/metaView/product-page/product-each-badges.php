<?php
/*
product each page setting

*/
global $post;
$post_id = $post -> ID;
$wpcsbd_advance_option = get_post_meta( $post_id, 'wpcsbd_advance_option', true );
?>
<div class="wpcsbd-each-badge-container wpcsbd-product-badge-each">
    <?php
        $badges_lists = array(
            'left top',
            'left center',
            'left bottom',
            'right top',
            'right center',
            'right bottom'
        );
    foreach ( $badges_lists as $badges_list ) {
        ?>
        <div class ="wpcsbd-badge-option-all wpcsbd-product-each-wrap">
            <label class="wpcsbd-badge-product-each-label">
            <?php
                esc_html_e( 'Badge ', 'wpcsbd' );
                echo esc_html($badges_list);
                ?>
            </label>
            <div class="wpcsbd-badge-field-all-section wpcsbd-product-each-field">
                <?php
                $badges_list_name = str_replace( ' ', '_', $badges_list );
                ?>
                <div class="wpcsbd-badge-field-inner-wrap">
                    <select 
                    name = "wpcsbd_advance_option[wpcsbd_badge_<?php echo esc_attr($badges_list_name); ?>_position]"
                    class = "wpcsbd-advance-position">
                        <option 
                            value="none" <?php if ( ! empty( $wpcsbd_advance_option[ 'wpcsbd_badge_' . $badges_list_name . '_position' ] ) ) selected( $wpcsbd_advance_option[ 'wpcsbd_badge_' . $badges_list_name . '_position' ], 'none' ); ?>>
                            <?php esc_html_e( 'None', 'wpcsbd' ); ?>
                        </option>
                        <?php
                        $position = $badges_list_name;
                        $args = array(
                            'post_type' => 'wpcsbd-badge',
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                        );
                        $query = new WP_Query( $args );
                        if ( $query -> have_posts() ) {
                            while ( $query -> have_posts() ) {

                                $query -> the_post();
                                $badge_post_id = get_the_ID();
                                $wpcsbd_all_option = get_post_meta( $badge_post_id, 'wpcsbd_all_option', true );
                                if ( isset( $wpcsbd_all_option[ 'wpcsbd_position_control' ] ) && $wpcsbd_all_option[ 'wpcsbd_position_control' ] == $badges_list_name ) {
                                    ?>
                                    <option 
                                        value="<?php echo esc_attr($badge_post_id); ?>" <?php if ( ! empty( $wpcsbd_advance_option[ 'wpcsbd_badge_' . $badges_list_name . '_position' ] ) ) selected( $wpcsbd_advance_option[ 'wpcsbd_badge_' . $badges_list_name . '_position' ], $badge_post_id ); ?>>
                                        <?php the_title(); ?>
                                    </option>
                                    <?php
                                }
                            }
                        }
                        wp_reset_postdata();
                        ?>
                    </select>
                </div>
            </div>
        </div>
    <?php }
    ?>
</div>