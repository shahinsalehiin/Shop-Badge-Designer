<?php


class Wpcsbd_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		$this->include();

	}

	public function include(){
        include(WPCSBD_PATH . 'admin/partials/wpcsbd-admin-save-data.php');
        include(WPCSBD_PATH . 'admin/partials/wpcsbd-admin-setting.php');
        include(WPCSBD_PATH . 'admin/partials/wpcsbd-admin-meta-box.php');
        include(WPCSBD_PATH . 'admin/partials/wpcsbd-preview-meta-box.php');
        include(WPCSBD_PATH . 'admin/partials/wpcsbd-admin-column.php');
		include(WPCSBD_PATH . 'admin/partials/wpcsbd-product-hook.php');
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wpcsbd_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wpcsbd_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( 
			'wpcsbd-preview-style',
			plugin_dir_url( __FILE__ ) . 'css/wpcsbd-preview-style.css',
			array(), 
			$this->version, 
			'all' 
		);

		wp_enqueue_style( 
			$this->plugin_name, 
			plugin_dir_url( __FILE__ ) . 'css/wpcsbd-admin.css',
			array(), 
			$this->version, 
			'all' 
		);

		

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wpcsbd_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wpcsbd_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( 
			'iconpicker', 
			WPCSBD_JS_DIR .'icon-picker.js',
			 array( 'jquery' ),
			  $this->version,
			   //false
			 );
		
		wp_enqueue_script( 
			'wpcsbdcolorpicker',
			plugin_dir_url( __FILE__ ) . 'js/wp-color-picker.min.js',
			array( 'jquery','wp-color-picker'),
			$this->version,
			 //false
			);

		wp_enqueue_script( 
			$this->plugin_name, 
			plugin_dir_url( __FILE__ ) . 'js/wpcsbd-admin.js',
			array( 'jquery','iconpicker'), 
			$this->version, 
			false 
		);

	}

	  


		

}
