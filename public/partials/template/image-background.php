<div class="<?php echo esc_attr($span_class);?>" id="wpcsbd-badge">
    <?php
    // include image type
    include(WPCSBD_PATH . 'public/partials/template/image-type.php');
    ?>
    <div class="wpcsbd-inner-text-container" id="wpcsbd-innner-text-con">
        <?php

        // badge type text
        if ( $badge_type == 'text' ) {
            include(WPCSBD_PATH . 'public/partials/template/text-type.php');
        } 
        
        // badge type icon
        else if ( $badge_type == 'icon' ) {
            include(WPCSBD_PATH . 'public/partials/template/icon-type.php');
        } 
        
        // // badge type both type
        else {
            include(WPCSBD_PATH . 'public/partials/template/both-type.php');
        }
        ?>
    </div>
</div>
