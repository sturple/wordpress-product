<?php
/**
 * Plugin Name: Wordpress Product
 * Plugin URI: https://github.com/sturple/wordpress-product/
 * Description: Wordpress plugin to add products to WordPress
 * Version: 0.0.1
 * Author: Shawn Turple / Robert Leahy
 * Author URI: http://turple.ca
 * License: GPL-3.0
 * Plugin Type: Piklist
 */

if ( file_exists( $composer_autoload = __DIR__ . '/vendor/autoload.php' ) /* check in self */
    || file_exists( $composer_autoload = WP_CONTENT_DIR.'/vendor/autoload.php') /* check in wp-content */
    || file_exists( $composer_autoload = plugin_dir_path( __FILE__ ).'vendor/autoload.php') /* check in plugin directory */
    || file_exists( $composer_autoload = get_stylesheet_directory().'/vendor/autoload.php') /* check in child theme */
    || file_exists( $composer_autoload = get_template_directory().'/vendor/autoload.php') /* check in parent theme */
) {
    require_once $composer_autoload;
}

call_user_func(function () {
    
    add_filter('piklist_pre_render_field',function($field){
        $piklist_editor_options = array( // Pass any option that is accepted by wp_editor()
             'wpautop' => false,
             'media_buttons' => true,
             'shortcode_buttons' => true,
             'teeny' => true,
             'dfw' => false,
             'quicktags' => true,
             'editor_css'=> false,
             'drag_drop_upload' => true,
             'tinymce' => array(
                'resize' => false,
                'wp_autoresize_on' => true
            )
        );       
        if (
            ($field['field'] == 'description') OR 
            ($field['field'] == 'component-text')
            )
        {
          $field['options'] = $piklist_editor_options;          
        }
       
        return $field;        
    },10,4);
    $controller=new \Fgms\Product\Controller(new \Fgms\WordPress\WordPressImpl());
});