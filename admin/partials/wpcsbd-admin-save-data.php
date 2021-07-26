<?php 
class WPCSBD_Admin_Save {
    function __construct(){
        add_action( 'save_post', array( $this, 'wpcsbd_settings_save' ) );
        add_action( 'save_post', array( $this, 'wpcsbd_advance_save' ) );
        add_action('gettext', array($this, 'wpcsbd_change_publish_button'),10, 2);
    }

    function wpcsbd_settings_save( $post_id ){
        include(WPCSBD_PATH . 'admin/partials/saveData/setting-save.php');
        return;
    }

    function wpcsbd_advance_save( $post_id ){
        include(WPCSBD_PATH . 'admin/partials/saveData/adv-setting-save.php');
        return;
    }

    public function wpcsbd_change_publish_button($translation, $text){
        if ('wpcsbd-badge' == get_post_type())
        if ($text == 'Publish' || $text == 'Update')
            return 'Save Badge';
        return $translation;
    }
    
    function wpcsbd_sanitize_array( $array = array(), $sanitize_rule = array() ){
        if ( ! is_array( $array ) || count( $array ) == 0 ) {
            return array();
        }

        foreach ( $array as $k => $v ) {
            if ( ! is_array( $v ) ) {

                $default_sanitize_rule = (is_numeric( $k )) ? 'html' : 'text';
                $sanitize_type = isset( $sanitize_rule[ $k ] ) ? $sanitize_rule[ $k ] : $default_sanitize_rule;
                $array[ $k ] = $this -> wpcsbd_sanitize_value( $v, $sanitize_type );
            }
            if ( is_array( $v ) ) {
                $array[ $k ] = $this -> wpcsbd_sanitize_array( $v, $sanitize_rule );
            }
        }

        return $array;
    }

    /**
     * Sanitizes Value
     *
     * @param type $value
     * @param type $sanitize_type
     * @return string
     *
     * @since 1.0.0
     */
    function wpcsbd_sanitize_value( $value = '', $sanitize_type = 'text' ){
        switch ( $sanitize_type ) {
            case 'html':
                $allowed_html = wp_kses_allowed_html( 'post' );
                return wp_kses( $value, $allowed_html );
                break;
            default:
                return sanitize_text_field( $value );
                break;
        }
    }

}

new WPCSBD_Admin_Save();
?>