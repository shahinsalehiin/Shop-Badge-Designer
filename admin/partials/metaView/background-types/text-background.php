<div class="wpcsbd-text-only-background-wrap" id="wpcsbd-text-only-background-wrap"
<?php if ( $background_type == 'text-background' ) { ?>style="display:block;" <?php } else { ?>style="display:none;" <?php } ?>>
        <div class="wpcsbd-badge-option-all" id="wpcsbd-badge-option-all">
            <label class="badge-text-template-label">
                <?php esc_html_e( 'Badge Text Template', 'wpcsbd' ); ?>
            </label>
            <div class="wpcsbd-badge-field-all-section" id="template-section-all">
                <?php
                $wpcsbd_text_designs = array(
                    'template-1',
                    'template-2',
                    'template-3',
                    'template-4',
                    'template-5',
                    'template-6',
                    'template-7' 
                );
                $t = 1;
                foreach ( $wpcsbd_text_designs as $wpcsbd_text_design ) :
                    ?>
                    <div class="wpcsbd-hide-radio-btn" id="wpcsbd-hide-radio-btn-id">
                        <input 
                        type="radio" 
                        id="<?php echo esc_attr($t); ?>"
                        name="wpcsbd_all_option[text_design_templates]" class="wpcsbd-text-only-design-only"
                        value="<?php echo esc_attr($wpcsbd_text_design); ?>"
                        <?php 
                        if ( isset( $wpcsbd_all_option[ 'text_design_templates' ] ) && $wpcsbd_all_option[ 'text_design_templates' ] == $wpcsbd_text_design ) { ?>checked="checked"<?php } ?> <?php if ( ! isset( $wpcsbd_all_option[ 'text_design_templates' ] ) ) { ?>checked="checked"<?php } ?>
                        />

                        <label class="wpcsbd-image-only-classs-demo" for="<?php echo esc_attr($t); ?>">
                            <img src="<?php echo WPCSBD_IMG_DIR . 'text-design/' . $t . '.png' ?>">
                        </label>
                    </div>
                    <?php
                    $t ++;
                endforeach;
                ?>
            </div>
        </div>
    </div>