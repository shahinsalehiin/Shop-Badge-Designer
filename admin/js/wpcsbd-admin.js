jQuery(document).ready(function(jQuery) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * jQuery function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * jQuery(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * jQuery( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */



    /*
     * Show Hide Badge Type
	 * Teamplate check
     */
function wpcsbd_disable_second_text_func() {
    var bg_type = jQuery('.wpcsbd-background-type-text-image:checked').val();
    if (bg_type === 'text-background') {
		//this template not alow badge second text
        var template = jQuery('.wpcsbd-text-only-design-only:checked').val();
        if (template == 'template-1' || template == 'template-11' || template == 'template-12' || template == 'template-15' || template == 'template-16' || template == 'template-19' || template == 'template-20' || template == 'template-21' || template == 'template-22' || template == 'template-23' || template == 'template-27' || template == 'template-28') {
            jQuery('.wpcsbd-badge-2nd-text-wrap-class').hide();
        } else {
            jQuery('.wpcsbd-badge-2nd-text-wrap-class').show();
        }
    } else {
        var template = jQuery('.wpcsbd-image-only-class:checked').val();
        if (template == '17' || template == '18' || template == '19' || template == '20' || template == '30' || template == '31')
        {
            jQuery('.wpcsbd-badge-2nd-text-wrap-class').hide();
        } else {
            jQuery('.wpcsbd-badge-2nd-text-wrap-class').show();
        }
    }
}
   
/*
* badge type check 
* badge type text class show/hide
 badge type icon class show/hide
*/
jQuery('.wpcsbd-designs-type').click(function() {
    var badge_type = jQuery(this).val();

    if (badge_type === 'text') {
        jQuery('.wpcsbd-text-only-settings-wrap-class').show();
        jQuery('.wpcsbd-icon-only-settings-wrap-class').hide();
        wpcsbd_disable_second_text_func();
    } 
	else if (badge_type === 'icon') {
        jQuery('.wpcsbd-text-only-settings-wrap-class').hide();
        jQuery('.wpcsbd-icon-only-settings-wrap-class').show();
        jQuery('.wpcsbd-badge-2nd-text-wrap-class').hide();
    } 
	else {
        jQuery('.wpcsbd-text-only-settings-wrap-class').show();
        jQuery('.wpcsbd-icon-only-settings-wrap-class').show();
        jQuery('.wpcsbd-badge-2nd-text-wrap-class').hide();
    }

});


/*
* badge background check 
* image-only-check
*/

jQuery('body').on("change", ".wpcsbd-background-type-text-image", function() {
    var type = jQuery('.wpcsbd-designs-type:checked').val();
    var background_type = jQuery(this).val();
    if (background_type === 'image-background') {
        jQuery('.wpcsbd-badge-image-settings-wrap').show();
        jQuery('.wpcsbd-text-only-background-wrap').hide();
        var bg_class = 'wpcsbd-image-bg-wrap ';
        if (jQuery('.wpcsbd-badges').hasClass('wpcsbd-text-only-bg-wrap')) {
            jQuery('.wpcsbd-badges').removeClass('wpcsbd-text-only-bg-wrap');
            jQuery('.wpcsbd-badges').addClass(bg_class);
        }
        var template = jQuery('.wpcsbd-image-only-class:checked').val();
        for (var i = 1; i <= 30; i++) {
            if (jQuery('.wpcsbd-badges').hasClass('wpcsbd-text-only-template-' + i + '')) {
                jQuery('.wpcsbd-badges').removeClass('wpcsbd-text-only-template-' + i + '');
                jQuery('.wpcsbd-badges').addClass('wpcsbd-image-' + template + '');
            }
        }
        var check_value = jQuery('.wpcsbd-image-only-class:checked').val();
		
        var image_src = jQuery('.wpcsbd-image-only-class:checked').next('.wpcsbd-image-only-classs-demo').html();
        jQuery('#wpcsbd-badge').html('');
        var text = jQuery('.wpcsbd-badge-text').val();
        jQuery('#wpcsbd-badge').prepend('<div class="wpcsbd-image-ribbon">' + image_src + '</div><div class="wpcsbd-inner-text-container">' + text + '</div>');

		//call the function
        wpcsbd_img_only_type_check(type);
        wpcsbd_disable_second_text_func();

    } else {
        jQuery('.wpcsbd-badge-image-settings-wrap').hide();
        jQuery('.wpcsbd-text-only-background-wrap').show();
        var bg_class = 'wpcsbd-text-only-bg-wrap ';
        jQuery('.wpcsbd-image-ribbon').remove();
        jQuery('.wpcsbd-inner-text-container').remove();
        if (jQuery('.wpcsbd-badges').hasClass('wpcsbd-image-bg-wrap')) {
            jQuery('.wpcsbd-badges').removeClass('wpcsbd-image-bg-wrap');
            jQuery('.wpcsbd-badges').addClass(bg_class);
        }
        var template = jQuery('.wpcsbd-text-only-design-only:checked').val();
        for (var i = 1; i <= 31; i++) {
            if (jQuery('.wpcsbd-badges').hasClass('wpcsbd-image-' + i + '')) {
                jQuery('.wpcsbd-badges').removeClass('wpcsbd-image-' + i + '');
                jQuery('.wpcsbd-badges').addClass('wpcsbd-text-only-' + template + '');
            }
        }

		//call the function
        wpcsbd_txt_only_type_check(type);
        wpcsbd_disable_second_text_func();
    }

}
);

	/*
     * Badges Settings Tab
	 * Click Badge Setting Tab
     */
    jQuery('.wpcsbd-settings-tabs-click').click(function() {
		
        jQuery('.wpcsbd-settings-tabs-click').removeClass('wpcsbd-settings-tab-active');

        jQuery(this).addClass('wpcsbd-settings-tab-active');

        var active_setting_key = jQuery('.wpcsbd-settings-tabs-click.wpcsbd-settings-tab-active').data('menu');

        jQuery('.wpcsbd-badge-tab-setting-wrap').removeClass('wpcsbd-active-badge-setting');

        jQuery('.wpcsbd-badge-tab-setting-wrap[data-menu-ref="' + active_setting_key + '"]').addClass('wpcsbd-active-badge-setting');
    }); 

    /*
     * Badges Type Check
     */

	jQuery('.wpcsbd-designs-type').click(function() {
        var badge_type = jQuery(this).val();
        if (badge_type === 'text') {
            jQuery('.wpcsbd-text-only-settings-wrap-class').show();
            jQuery('.wpcsbd-icon-only-settings-wrap-class').hide();
            wpcsbd_disable_second_text_func();
        } else if (badge_type === 'icon') {
            jQuery('.wpcsbd-text-only-settings-wrap-class').hide();
            jQuery('.wpcsbd-icon-only-settings-wrap-class').show();
            jQuery('.wpcsbd-badge-2nd-text-wrap-class').hide();
        } else {
            jQuery('.wpcsbd-text-only-settings-wrap-class').show();
            jQuery('.wpcsbd-icon-only-settings-wrap-class').show();
            jQuery('.wpcsbd-badge-2nd-text-wrap-class').hide();
        }

    });

    /*
     * Background Type Check
     */

    jQuery('body').on("change", ".wpcsbd-background-type-text-image", function() {
        var type = jQuery('.wpcsbd-designs-type:checked').val();
        var background_type = jQuery(this).val();
        if (background_type === 'image-background') {

            jQuery('.wpcsbd-badge-image-settings-wrap').show();
            jQuery('.wpcsbd-text-only-background-wrap').hide();
            var bg_class = 'wpcsbd-image-bg-wrap ';
            if (jQuery('.wpcsbd-badges').hasClass('wpcsbd-text-only-bg-wrap')) {
                jQuery('.wpcsbd-badges').removeClass('wpcsbd-text-only-bg-wrap');
                jQuery('.wpcsbd-badges').addClass(bg_class);
            }

            var template = jQuery('.wpcsbd-image-only-class:checked').val();
            for (var i = 1; i <= 30; i++) {
                if (jQuery('.wpcsbd-badges').hasClass('wpcsbd-text-only-template-' + i + '')) {
                    jQuery('.wpcsbd-badges').removeClass('wpcsbd-text-only-template-' + i + '');
                    jQuery('.wpcsbd-badges').addClass('wpcsbd-image-' + template + '');
                }
            }
            var check_value = jQuery('.wpcsbd-image-only-class:checked').val();
            var image_src = jQuery('.wpcsbd-image-only-class:checked').next('.wpcsbd-image-only-classs-demo').html();
            jQuery('#wpcsbd-badge').html('');
            var text = jQuery('.wpcsbd-badge-text').val();
            jQuery('#wpcsbd-badge').prepend('<div class="wpcsbd-image-ribbon">' + image_src + '</div><div class="wpcsbd-inner-text-container">' + text + '</div>');

            /*
             * Function Call
            */
            wpcsbd_img_only_type_check(type);
            wpcsbd_disable_second_text_func();
        } 
        
        else {
            jQuery('.wpcsbd-badge-image-settings-wrap').hide();
            jQuery('.wpcsbd-text-only-background-wrap').show();
            var bg_class = 'wpcsbd-text-only-bg-wrap ';
            jQuery('.wpcsbd-image-ribbon').remove();
            jQuery('.wpcsbd-inner-text-container').remove();
            if (jQuery('.wpcsbd-badges').hasClass('wpcsbd-image-bg-wrap')) {
                jQuery('.wpcsbd-badges').removeClass('wpcsbd-image-bg-wrap');
                jQuery('.wpcsbd-badges').addClass(bg_class);
            }
            var template = jQuery('.wpcsbd-text-only-design-only:checked').val();
            for (var i = 1; i <= 31; i++) {
                if (jQuery('.wpcsbd-badges').hasClass('wpcsbd-image-' + i + '')) {
                    jQuery('.wpcsbd-badges').removeClass('wpcsbd-image-' + i + '');
                    jQuery('.wpcsbd-badges').addClass('wpcsbd-text-only-' + template + '');
                }
            }
            wpcsbd_txt_only_type_check(type);
            wpcsbd_disable_second_text_func();
        }

      }
    ); 


    /*
     * Template Preview
     */
    jQuery('.wpcsbd-badge-template').on('change', function() {
        var template_value = jQuery(this).val();
        var array_break = template_value.split('-');
        var current_id = array_break[1];
        jQuery('.wpcsbd-badge-common').hide();
        jQuery('#wpcsbd-badge-demo-' + current_id).show();
    });
    if (jQuery(".wpcsbd-badge-template option:selected").length > 0) {
        var grid_view = jQuery(".wpcsbd-badge-template option:selected").val();
        var array_break = grid_view.split('-');
        var current_id1 = array_break[1];
        jQuery('.wpcsbd-badge-common').hide();
        jQuery('#wpcsbd-badge-demo-' + current_id1).show();
    }


     /*
     * badge Type Function
     */

	function wpcsbd_txt_only_type_check(type) {
        var template = jQuery('.wpcsbd-text-only-design-only:checked').val();
        if (template === 'template-24') {
            var wpcsbd_class = '.wpcsbd-text-only-inner-wrap div';
        } else {
            var wpcsbd_class = 'div';
        }
        if (type === 'text')
        {
            jQuery('.wpcsbd-text-only-bg-wrap').find(wpcsbd_class).addClass('wpcsbd-text-only');
            jQuery('.wpcsbd-text-only-bg-wrap').find(wpcsbd_class).removeClass('wpcsbd-icon-only');
            var text = jQuery(".wpcsbd-badge-text").val();
            var second_text = jQuery('.wpcsbd-second-badge-text').val();
            jQuery(".wpcsbd-text-only i").remove();
            var template = jQuery('.wpcsbd-text-only-design-only:checked').val();
            if (template == 'template-1' || template == 'template-11' || template == 'template-12' || template == 'template-15' || template == 'template-16' || template == 'template-19' || template == 'template-20' || template == 'template-21' || template == 'template-22' || template == 'template-23' || template == 'template-27' || template == 'template-28')
            {
                jQuery('.wpcsbd-text-only').html(text);
            } else {
                jQuery('.wpcsbd-text-only').html(text + '<div class="wpcsbd-badge-2nd-text">' + second_text + '</div>');
            }
        } else if (type === 'icon') {
            jQuery('.wpcsbd-text-only-bg-wrap').find('.wpcsbd-text-only').addClass('wpcsbd-icon-only');
            var font = jQuery('.icon-picker-input').val().split('|');
            var icon = font[ 0 ] + ' ' + font[ 1 ];
            jQuery(".wpcsbd-text-only").html('<i class="' + icon + '" aria-hidden="true"></i>');
        } else {
            jQuery('.wpcsbd-text-only-bg-wrap').find('.wpcsbd-text-only').addClass('wpcsbd-icon-only');
            var text = jQuery(".wpcsbd-badge-text").val();
            var font = jQuery('.icon-picker-input').val().split('|');
            var icon = font[ 0 ] + ' ' + font[ 1 ];
            jQuery(".wpcsbd-text-only").html('<i class="' + icon + '" aria-hidden="true"></i>' + text);
        }
    }


    function wpcsbd_img_only_type_check(type) {
        if (type === 'text')
        {
            jQuery('.wpcsbd-icon-only').attr('class', 'wpcsbd-text-only');
            var text = jQuery(".wpcsbd-badge-text").val();
            var second_text = jQuery('.wpcsbd-second-badge-text').val();
            jQuery('.wpcsbd-inner-text-container').remove();
            var image_template = jQuery('.wpcsbd-image-only-class:checked').val();
            if (image_template == '17' || image_template == '18' || image_template == '19' || image_template == '20' || image_template == '30' || image_template == '31') {
                jQuery('<div class="wpcsbd-inner-text-container"><div class="wpcsbd-badge-1st-text">' + text + '</div></div>').insertAfter('.wpcsbd-image-ribbon');
            } else {
                jQuery('<div class="wpcsbd-inner-text-container"><div class="wpcsbd-badge-1st-text">' + text + '</div><div class="wpcsbd-badge-2nd-text">' + second_text + '</div></div>').insertAfter('.wpcsbd-image-ribbon');
            }
        } else if (type === 'icon') {
            jQuery('.wpcsbd-text-only').attr('class', 'wpcsbd-text-only wpcsbd-icon-only');
            var font = jQuery('.icon-picker-input').val().split('|');
            var icon = font[ 0 ] + ' ' + font[ 1 ];
            jQuery('.wpcsbd-inner-text-container').remove();
            jQuery('<div class="wpcsbd-inner-text-container"><i class="' + icon + '" aria-hidden="true"></i></div>').insertAfter('.wpcsbd-image-ribbon');
        } else {
            if (jQuery('#wpcsbd-badge').hasClass('wpcsbd-text-only')) {
                jQuery('#wpcsbd-badge').addClass('wpcsbd-icon-only');
            }
            if (jQuery('#wpcsbd-badge').hasClass('wpcsbd-icon-only')) {
                jQuery('#wpcsbd-badge').addClass('wpcsbd-text-only');
            }
            var text = jQuery(".wpcsbd-badge-text").val();
            var font = jQuery('.icon-picker-input').val().split('|');
            jQuery('.wpcsbd-inner-text-container').remove();
            var icon = font[ 0 ] + ' ' + font[ 1 ];
            jQuery('<div class="wpcsbd-inner-text-container"><i class="' + icon + '" aria-hidden="true"></i>' + text + '</div>').insertAfter('.wpcsbd-image-ribbon');
        }
    }



    jQuery('body').on("click", ".wpcsbd-designs-type", function() {
        var type = jQuery(this).val();
        var bg_type = jQuery('.wpcsbd-background-type-text-image:checked').val();
        if (bg_type === 'text-background') {
            wpcsbd_txt_only_type_check(type);
        } else {
            wpcsbd_img_only_type_check(type);
        }
    });
	
    jQuery(document).on("click", ".icon-picker-list > li > a", function() {
        var bg_type = jQuery('.wpcsbd-background-type-text-image:checked').val();
        var type = jQuery('.wpcsbd-designs-type:checked').val();
        if (bg_type === 'text-background') {
            wpcsbd_txt_only_type_check(type);
        } else {
            wpcsbd_img_only_type_check(type);
        }
    });

    // badge iconpiker
	jQuery('.icon-picker-input').iconPicker();

    //check badge single checkbox
    jQuery('.wpcsbd-display-badges-single').click(function() {
        if (jQuery(this).is(':checked'))
        {
            jQuery(this).val('1');
        } else
        {
            jQuery(this).val('0');
        }
    });

     //check badge custom checkbox

    jQuery('.wpcsbd-display-custom').click(function() {
        var text_template = jQuery('.wpcsbd-text-only-design-only:checked').val();
        if (jQuery(this).is(':checked'))
        {
            jQuery(this).val('1');
            jQuery('.wpcsbd-custom-design-container').show();
        } else
        {
            jQuery('.wpcsbd-custom-design-container').hide();
            jQuery(this).val('0');
        }
    });

    //custom background color
    jQuery('.wpcsbd-bg-color').wpColorPicker();

    //custom corner color
    jQuery('.wpcsbd-coner-color').wpColorPicker();

    //custom title color
    jQuery('.wpcsbd-text-only-color').wpColorPicker();


    

    /*
     * Change pre existing image badges in preview
     */
    jQuery('body').on("click", ".wpcsbd-image-only-class", function() {
        var image_src = jQuery(this).closest('.wpcsbd-hide-radio-btn').find('.wpcsbd-image-only-classs-demo img').attr("src");
        var type = jQuery('.wpcsbd-designs-type:checked').val();
        jQuery('.wpcsbd-image-ribbon').find('img').attr("src", image_src);
        wpcsbd_img_only_type_check(type);
    });

    /*
     * Change the position of badge text in preview
     */

    jQuery('.wpcsbd-badge-position').on("change", function() {
        var position = jQuery(this).val();
        var position_class = 'wpcsbd-position-' + position;
        if (jQuery('.wpcsbd-badges').hasClass('wpcsbd-position-left_center')) {
            jQuery('.wpcsbd-badges').removeClass('wpcsbd-position-left_center');
            jQuery('.wpcsbd-badges').addClass(position_class);
        }
        if (jQuery('.wpcsbd-badges').hasClass('wpcsbd-position-left_top')) {
            jQuery('.wpcsbd-badges').removeClass('wpcsbd-position-left_top');
            jQuery('.wpcsbd-badges').addClass(position_class);
        }
        if (jQuery('.wpcsbd-badges').hasClass('wpcsbd-position-left_bottom')) {
            jQuery('.wpcsbd-badges').removeClass('wpcsbd-position-left_bottom');
            jQuery('.wpcsbd-badges').addClass(position_class);
        }
        if (jQuery('.wpcsbd-badges').hasClass('wpcsbd-position-right_center')) {
            jQuery('.wpcsbd-badges').removeClass('wpcsbd-position-right_center');
            jQuery('.wpcsbd-badges').addClass(position_class);
        }
        if (jQuery('.wpcsbd-badges').hasClass('wpcsbd-position-right_top')) {
            jQuery('.wpcsbd-badges').removeClass('wpcsbd-position-right_top');
            jQuery('.wpcsbd-badges').addClass(position_class);
        }
        if (jQuery('.wpcsbd-badges').hasClass('wpcsbd-position-right_bottom')) {
            jQuery('.wpcsbd-badges').removeClass('wpcsbd-position-right_bottom');
            jQuery('.wpcsbd-badges').addClass(position_class);
        }
    });

    

    

    /*
     * Show text in preview pane
     */
    jQuery(".wpcsbd-badge-text").keyup(function() {
        var bg_type = jQuery('.wpcsbd-background-type-text-image:checked').val();
        var type = jQuery('.wpcsbd-designs-type:checked').val();
        if (bg_type === 'text-background') {
            wpcsbd_txt_only_type_check(type);
        } else {
            wpcsbd_img_only_type_check(type);
        }
    });
    jQuery(".wpcsbd-second-badge-text").keyup(function() {
        var bg_type = jQuery('.wpcsbd-background-type-text-image:checked').val();
        var type = jQuery('.wpcsbd-designs-type:checked').val();
        if (bg_type === 'text-background') {
            wpcsbd_txt_only_type_check(type);
        } else {
            wpcsbd_img_only_type_check(type);
        }

    });

    /*
     * Change pre existing image badges in preview
     */
    jQuery('body').on("click", ".wpcsbd-image-only-class", function() {
        var image_src = jQuery(this).closest('.wpcsbd-hide-radio-btn').find('.wpcsbd-image-only-classs-demo img').attr("src");
        var type = jQuery('.wpcsbd-designs-type:checked').val();
        jQuery('.wpcsbd-image-ribbon').find('img').attr("src", image_src);
        wpcsbd_img_only_type_check(type);
    });


    jQuery('body').on("change", ".wpcsbd-text-only-design-only", function() {
        var template = jQuery(this).val();
        var type = jQuery('.wpcsbd-designs-type:checked').val();
        for (var i = 1; i <= 30; i++) {
            if (jQuery('.wpcsbd-badges').hasClass('wpcsbd-text-only-template-' + i + '')) {
                jQuery('.wpcsbd-badges').removeClass('wpcsbd-text-only-template-' + i + '');
                jQuery('.wpcsbd-badges').addClass('wpcsbd-text-only-' + template + '');
            } else {
                jQuery('.wpcsbd-badges').addClass('wpcsbd-text-only-' + template + '');
            }
            if (template === 'template-24') {

                jQuery('.wpcsbd-badges').html('<div class="wpcsbd-text-only-main-wrap"><div class="wpcsbd-text-only-inner-wrap"><div class="wpcsbd-text-only" id="wpcsbd-badge"><div class="wpcsbd-badge-2nd-text"></div></div></div></div>');
            } else {
                jQuery('.wpcsbd-badges').html('<div class="wpcsbd-text-only " id="wpcsbd-badge"><div class="wpcsbd-badge-2nd-text"></div></div>');
            }
            wpcsbd_txt_only_type_check(type);
            wpcsbd_disable_second_text_func();
        }

        if (template == 'template-1' || template == 'template-10' || template == 'template-13' || template == 'template-14' || template == 'template-20' || template == 'template-21' || template == 'template-22' || template == 'template-27' || template == 'template-29') {
            jQuery('select option[value="left_center"]').attr("disabled", true);
            jQuery('select option[value="right_center"]').attr("disabled", true);
        } else {
            jQuery('select option[value="left_center"]').attr("disabled", false);
            jQuery('select option[value="right_center"]').attr("disabled", false);
        }
    });
    jQuery('body').on("change", ".wpcsbd-image-only-class", function() {
        var template = jQuery(this).val();
        for (var i = 1; i <= 31; i++) {
            if (jQuery('.wpcsbd-badges').hasClass('wpcsbd-image-' + i + '')) {
                jQuery('.wpcsbd-badges').removeClass('wpcsbd-image-' + i + '');
                jQuery('.wpcsbd-badges').addClass('wpcsbd-image-' + template + '');
            }
        }
        wpcsbd_disable_second_text_func();
    });
    


}
);
