<?php $wpcsbd_basic_settings = get_option('wpcsbd_basic_settings'); ?>

<section class='wpcsbd-message'>
    <?php if (isset($_GET['message']) && $_GET['message'] == '1') { ?>
            <div class="notice notice-success is-dismissible">
                <p>
                    <strong>
                        <?php esc_html_e('Settings saved successfully.', 'wpcsbd'); ?></strong>
                </p>
                <button type="button" class="notice-dismiss">
                    <span class="screen-reader-text"><?php esc_html_e('Dismiss this notice.', 'wpcsbd'); ?></span>
                </button>
            </div>
        <?php } ?>
</section>

<div class="wpcsbd-basic-setting besic-setting-set">
    <form 
        method="post" 
        id="wpcsbd-save-form"
        action="<?php echo admin_url('admin-post.php'); ?>"
        class="wpcsbd-setting-form"
    >
        <input 
            type="hidden" 
            name="action" 
            value="wpcsbd_settings_save"
        />

        <div class="wpcsbd-setting-heading">
            <?php esc_html_e('Badges Settings', 'wpcsbd') ?>
        </div>
        <div class="wpcsbd-badge-option-all">
            <label> 
                <?php esc_html_e('Shop Page Badge Setting', 'wpcsbd'); ?>
            </label>
            <div class="wpcsbd-badge-field-all-section">
                <div class="wpcsbd-badge-field-inner-wrap">
                    <select 
                    name="wpcsbd_basic_settings[wpcsbd_shop_configure_option]" class="wpcsbd-badge-configure">
                        <option 
                        value="method_one"  
                        <?php if (isset($wpcsbd_basic_settings['wpcsbd_shop_configure_option']) && $wpcsbd_basic_settings['wpcsbd_shop_configure_option'] == 'method_one') echo 'selected=="selected"'; ?>>
                            <?php esc_html_e('Setting One', 'wpcsbd') ?>
                        </option>

                        <option 
                            value="method_two"  
                            <?php if (isset($wpcsbd_basic_settings['wpcsbd_shop_configure_option']) && $wpcsbd_basic_settings['wpcsbd_shop_configure_option'] == 'method_two') echo 'selected=="selected"'; ?>>
                            <?php esc_html_e('Setting Two', 'wpcsbd') ?>
                         </option>

                        <option 
                            value="method_three"  
                            <?php if (isset($wpcsbd_basic_settings['wpcsbd_shop_configure_option']) && $wpcsbd_basic_settings['wpcsbd_shop_configure_option'] == 'method_three') echo 'selected=="selected"'; ?>>
                            <?php esc_html_e('Setting Three', 'wpcsbd') ?>
                        </option>
                    </select>
                </div>
                
            </div>
        </div>

        <div class ="wpcsbd-badge-option-all">
            <label for="wpcsbd-show-badges-single-page" class="wpcsbd-show-badges">
                <?php esc_html_e('Enable Badges on Single Page', 'wpcsbd'); ?>
            </label>
            <div class="wpcsbd-badge-field-all-section">
                <label class="wpcsbd-switch">
                    <input 
                    type="checkbox" 
                    class="wpcsbd-display-badges-single wpcsbd-checkbox"
                    value="<?php
                    if (isset($wpcsbd_basic_settings['wpcsbd_enable_single_page_badge'])) {
                        echo esc_attr($wpcsbd_basic_settings['wpcsbd_enable_single_page_badge']);
                    } else {
                        echo '0';
                    }
                    ?>" 
                    name="wpcsbd_basic_settings[wpcsbd_enable_single_page_badge]"
                    <?php if (isset($wpcsbd_basic_settings['wpcsbd_enable_single_page_badge']) && $wpcsbd_basic_settings['wpcsbd_enable_single_page_badge'] == '1') { ?>checked="checked"<?php } ?>
                    
                    />

                    <div class="wpcsbd-slider round">
                    
                    </div>
                </label>

                <p class="description"> 
                    <?php 
                    esc_html_e('Enable badges to show on single product page.', 'wpcsbd')
                    ?>
                </p>
            </div>
        </div>
        
        <div class="wpcsbd-badge-option-all">
            <label>
                <?php esc_html_e('Single Product Page Configure', 'wpcsbd'); ?>
            </label>
            <div class="wpcsbd-badge-field-all-section">
                <div class="wpcsbd-badge-field-inner-wrap">
                    <select 
                    name="wpcsbd_basic_settings[wpcsbd_page_configure_option]" class="wpcsbd-badge-configure">
                        <option 
                        value="method_one"  <?php if (isset($wpcsbd_basic_settings['wpcsbd_page_configure_option']) && $wpcsbd_basic_settings['wpcsbd_page_configure_option'] == 'method_one') echo 'selected=="selected"'; ?>>
                            <?php esc_html_e('Setting One', 'wpcsbd') ?>
                        </option>

                        <option 
                            value="method_two"  
                        <?php 
                        if (isset($wpcsbd_basic_settings['wpcsbd_page_configure_option']) && $wpcsbd_basic_settings['wpcsbd_page_configure_option'] == 'method_two') echo 'selected=="selected"'; ?>>
                        <?php 
                            esc_html_e('Setting Two', 'wpcsbd')
                        ?>
                        </option>
                        
                        <option 
                        value="method_three"  
                        <?php if (isset($wpcsbd_basic_settings['wpcsbd_page_configure_option']) && $wpcsbd_basic_settings['wpcsbd_page_configure_option'] == 'method_three') echo 'selected=="selected"'; ?>>
                            <?php esc_html_e('Setting Three', 'wpcsbd') ?>
                        </option>
                    </select>
                </div>
                
            </div>
        </div>

        <div class="wpcsbd-buton-save save-setting-btn">
            <?php wp_nonce_field('wpcsbd_form_nonce', 'wpcsbd_form_nonce_field'); ?>
            <a 
            class="button button-custom-setting" 
            href="javascript:;" 
            onclick="document.getElementById('wpcsbd-save-form').submit();">
            <span>
                <?php esc_html_e('Save Setting', 'wpcsbd'); ?>
            </span>
            </a>
        </div>

    </form>
</div>