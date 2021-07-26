<?php
// template check
$image_template = isset( $wpcsbd_all_option[ 'existing_image' ] ) ? esc_attr( $wpcsbd_all_option[ 'existing_image' ] ) : '1';

if ( isset( $wpcsbd_all_option[ 'background_type' ] ) && $wpcsbd_all_option[ 'background_type' ] == 'image-background' ) {

    // template array check
    $template = array( '17', '18', '19', '20', '30', '31' );

    if ( in_array( $image_template, $template ) ) {
        if ( ! empty( $wpcsbd_all_option[ 'badge_text' ] ) ) {
            ?>
            <div class="wpcsbd-badge-1st-text">
                <?php
                echo esc_attr( $wpcsbd_all_option[ 'badge_text' ] );
                ?>
            </div>
            <?php
        }
    } else {

        if ( ! empty( $wpcsbd_all_option[ 'badge_text' ] ) ) {
            ?>
            <div class="wpcsbd-badge-1st-text">
                <?php
                echo esc_attr( $wpcsbd_all_option[ 'badge_text' ] );
                ?>
            </div>
            <?php
        }
        if ( ! empty( $wpcsbd_all_option[ 'badge_second_text' ] ) ) {
            ?>
            <div class="wpcsbd-badge-2nd-text">
                <?php
                echo esc_attr( $wpcsbd_all_option[ 'badge_second_text' ] );
                ?>
            </div>
            <?php
        }
    }
} else {

    $text_template = isset( $wpcsbd_all_option[ 'text_design_templates' ] ) ? esc_attr( $wpcsbd_all_option[ 'text_design_templates' ] ) : 'template-1';

    // template check array
    $template = array(
        'template-1', 'template-11', 'template-12', 'template-15', 'template-16', 'template-19', 'template-20', 'template-21', 'template-22', 'template-23', 'template-27', 'template-28'
    );

    if ( in_array( $text_template, $template ) ) {
        if ( isset( $wpcsbd_all_option[ 'badge_text' ] ) ) {
            echo esc_attr( $wpcsbd_all_option[ 'badge_text' ] );
        }
    } else {
        echo esc_html($text_value);
        if ( isset( $wpcsbd_all_option[ 'badge_second_text' ] ) ) {
            ?>
            <div class="wpcsbd-badge-2nd-text">
                <?php
                echo esc_attr( $wpcsbd_all_option[ 'badge_second_text' ] );
                ?>
            </div>
            <?php
        }
    }
}