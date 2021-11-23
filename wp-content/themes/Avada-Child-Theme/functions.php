<?php
function theme_enqueue_styles() {

  wp_enqueue_style( 'avada-stylesheet', Avada::$template_dir_url . '/assets/css/style.min.css', [], false );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );

  // wp_enqueue_style( 'test-style', get_stylesheet_directory_uri() . '/test-style.css');
  wp_enqueue_script(
    'menu-script',
    get_stylesheet_directory_uri() . '/sub-menu.js',
    array( 'jquery' )
);
  /**
   * Load our IE-only stylesheet for all versions of IE 11 and Edge Legacy:
   */
  wp_enqueue_style( 'child-style-ie-legacy', get_stylesheet_directory_uri() . "/ie11up.min.css", array( 'avada-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 1000 );

add_filter( 'rocket_lazyload_excluded_src', 'rocket_lazyload_exclude_src' );

function rocket_lazyload_exclude_class( $attributes ) {
	$attributes[] = 'class="person-img img-responsive"';

	return $attributes;
}
add_filter( 'rocket_lazyload_excluded_attributes', 'rocket_lazyload_exclude_class' );

function avada_lang_setup() {
  $lang = get_stylesheet_directory() . '/languages';
  load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );

add_filter('wpseo_premium_post_redirect_slug_change', '__return_true' );
add_filter('wpseo_premium_term_redirect_slug_change', '__return_true' );

function theme_prefix_setup() {

  add_theme_support( 'custom-logo', array(
      'height'      => 100,
      'width'       => 400,
      'flex-width' => true,
  ) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

function di_menu_arrow($item_output, $item, $depth, $args) {
  if (in_array('menu-item-has-children', $item->classes)) {
      $arrow = '<i class="fa fa-angle-down sub-menu-open"></i>'; 
      $item_output = str_replace('</a>', '</a>'. $arrow .'', $item_output);
  }
  return $item_output;
}
add_filter('walker_nav_menu_start_el', 'di_menu_arrow', 10, 4);

add_action('init', function() {
  $name = 'di-translation';
  $string = 'logga-in';
   pll_register_string($name, $string);

});