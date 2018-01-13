<?php
/**
@ khai bao hang gia tri
	@THEME_URL = lay duong dan cua thu muc theme
	@ CORE = lay duong dan cua thu muc /core
**/

define( 'THEME_URL', get_stylesheet_directory() );
define("CORE", THEME_URL . "/core");
define("IMG_URL", THEME_URL . "/images");
/**
@ Nhung file /core/init.php
**/
require_once( CORE . "/init.php" );

/**
@ Thiet lap chieu rong noi dung
**/
if(  !isset($content_width)){
	$content_width = 620;
}

/**
@ Khai bao chuc nang cua theme
**/
if( !function_exists('pcbtot_theme_setup') ){
	function pcbtot_theme_setup() {
		/*Thiet lap textdomain*/
		$language_folder = THEME_URL . '/languages';
		load_theme_textdomain( 'pcbtot', $language_folder );
		/*Tu dong them link RSS len <head>*/
		add_theme_support( 'automatic_feed_links' );

		/*Them post thumbnail*/
		add_theme_support( 'post-thumbnails' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		
		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio'
		) );

		/*
		 * Them Custom Background.
		 */
		add_theme_support( 'custom-background' );

		/*
		 * Them menu
		 */
		add_theme_support( 'menus' );
		register_nav_menus(
	        array(
	                'primary-menu' => __('Primary Menu', 'pcbtot'),
	                'pcb-nav' => 'PCB menu'
	        )
		);
		/*
		 * Tao sidebar
		 */
		$sidebar = array(
			'name' => __('Main Sidebar', 'pcbtot'),
			'id' => 'main-sidebar',
			'description' => 'Default sidebar',
			'class' => 'main-sidebar',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
			 );
		register_sidebars( $sidebar );
	}
	add_action( 'init', 'pcbtot_theme_setup' );
}

if( !function_exists('header_left_setup') ){
	function header_left_setup(){
		bloginfo( 'description' );
	}
}

if( !function_exists('header_right_setup') ){
	function header_right_setup(){
		bloginfo( 'url' );
	}
}


/*function filter_wp_nav_menu_slug_items( $items, $args ) { 
    // make filter magic happen here... 
    $items = $items . "<div id='mail_contact'><i class='p-icon'></i>contact@pcbtot.com</div>";
    return $items; 
}; 
         
// add the filter 
add_filter( "wp_nav_menu_primary_items", 'filter_wp_nav_menu_slug_items', 10, 2 ); */


/*Them jQuery*/
/*function jquery_init() {
        // comment out the next two lines to load the local copy of jQuery
	if( !is_admin()){
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.js', false, '1.3.2', true);
        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'jquery_init');*/

/*Them Bootstrap*/
function bootstrap_init() {
        // comment out the next two lines to load the local copy of jQuery
	if( !is_admin()){
        wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', false, false, true);
        wp_enqueue_script('bootstrap');
    }
}
add_action('wp_enqueue_scripts', 'bootstrap_init');
function bootstrap_style_setup(){
	wp_register_style( 'bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', 'all');
	wp_enqueue_style( 'bootstrap-style' );

}
add_action( 'wp_enqueue_scripts', 'bootstrap_style_setup' );
/*Nhung file CSS*/
function pcbtot_style_setup(){
	wp_register_style( 'reset-style', get_template_directory_uri() . "/reset.css", 'bootstrap-style');
	wp_enqueue_style( 'reset-style' );
	wp_register_style( 'main-style', get_template_directory_uri() . "/style.css", 'bootstrap-style');
	wp_enqueue_style( 'main-style' );
}
add_action( 'wp_enqueue_scripts', 'pcbtot_style_setup' );
/*Them javascript function.js*/
function theme_register_scripts() {
    /* Đăng ký file script sẽ có trong theme */
    wp_register_script( 'functions-js', get_template_directory_uri() . '/functions.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'functions-js' );
}
add_action( 'wp_enqueue_scripts', 'theme_register_scripts');

/*Thiet lap menu*/
if( !function_exists('pcbtot_menu_setup') ){
	function pcbtot_menu_setup($menu){
		$menu = array(
			'theme_location' => $menu,
			'menu_class' => 'nav navbar-nav',
			'container' => 'div',
			'container_id' => 'menu',
			'container_class' => $menu. ' navbar-collapse collapse col-md-10'
		);
		wp_nav_menu( $menu );
	}
}
if( !function_exists('pcbtot_menu_child_setup') ){
	function pcbtot_menu_child_setup($menu){
		$menu = array(
			'theme_location' => $menu,
			'menu_class' => 'pcb-menu-ul',
			'menu_id' => "",
			'container' => 'div',
			'container_id' => 'pcb-menu',
			'container_class' => $menu . '-nav'
		);
		wp_nav_menu( $menu );
	}
}


/*Tạo danh sách market-dynamic
$isshow, $date_dynamic, $username_dynamic, $amount_dynamic, $progress
*/
if( !function_exists('make_data_market_dynamic') ){
	function make_data_market_dynamic($date_dynamic, $username_dynamic, $amount_dynamic, $progress_dynamic)
	{
		echo '<div class=\'data row\'>';
		echo '<div class=\'date col-md-2\'>' . $date_dynamic . '</div>';
		echo '<div class=\'username col-md-3\'>' . $username_dynamic . '</div>';
		echo '<div class=\'amount col-md-3\'>' . $amount_dynamic . 'k</div>';
		echo '<div class=\'progressbar col-md-4\'>';
		echo '<div class=\'progress progress-striped active\'>';
		echo '<div class=\'progress-bar\' role=\'progressbar\' aria-valuenow=\''. $progress_dynamic .'\' aria-valuemin=\'0\' aria-valuemax=\'100\' style=\'width: ' . $progress_dynamic . '%;\'> ' . $progress_dynamic . '%';				
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
}