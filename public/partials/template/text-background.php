<?php
if ( isset( $wpcsbd_all_option[ 'text_design_templates' ] ) && $wpcsbd_all_option[ 'text_design_templates' ] == 'template-24' ) {
    ?>
    <div class="wpcsbd-text-only-main-wrap">
        <div class="wpcsbd-text-only-inner-wrap">
            <?php
        }
        ?>
        <div class="<?php
        echo esc_attr($span_class);
        ?>" id="wpcsbd-badge">
            <?php
            // check text design
            if ( $badge_type == 'text' ) {
                //include text type
                include(WPCSBD_PATH . 'public/partials/template/text-type.php');
            } 
            else if ( $badge_type == 'icon' ) {
                //include icon type
                include(WPCSBD_PATH . 'public/partials/template/icon-type.php');
            } 
            else {
                //include both type
                include(WPCSBD_PATH . 'public/partials/template/both-type.php');
            }
            ?>
        </div>
        <?php
        if ( isset( $wpcsbd_all_option[ 'text_design_templates' ] ) && $wpcsbd_all_option[ 'text_design_templates' ] == 'template-24' ) {
            ?>
        </div>
    </div>
    <?php
}