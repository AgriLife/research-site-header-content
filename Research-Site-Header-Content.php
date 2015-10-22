<?php
/**
 * Plugin Name: Research Site Header Content
 * Plugin URI: https://github.com/AgriLife/Research-Site-Header-Content
 * Description: Required header content of research websites using a Genesis child theme.
 * Version: 1.0
 * Author: Zach Watkins
 * Author URI: https://github.com/ZachWatkins
 * Author Email: zachary.watkins@ag.tamu.edu
 * License: GPL2+
**/

// If this file is called directly, abort.
defined( 'ABSPATH' ) or die( 'access denied' );

add_filter( 'genesis_seo_title', 'research_site_title', 10, 3 );

function research_site_title( $title, $inside, $wrap ){
  $logo = '<div class="research-logo"><img src="http://agrilife.org/tracyherbarium/files/2015/10/TAMAgRESwhite_194x74.png" /></div>';
  $inside = sprintf( '<a href="http://example.com/" title="%s">%s</a>', esc_attr( get_bloginfo( 'name' ) ), get_bloginfo( 'name' ) );
  return $logo . sprintf( '<%1$s class="site-title">%2$s</%1$s>', $wrap, $inside );
}

add_action ( 'wp_enqueue_scripts', 'enqueue_research_header_styles' );

function enqueue_research_header_styles() {

  wp_register_style( 'research-site-header-content-styles', plugin_dir_url( __FILE__ ) . 'css/research-site-header-content.css' );
  wp_enqueue_style( 'research-site-header-content-styles' );

}

?>
