<?php
namespace Fgms\Product;
class Controller
{
    private $wp;
    private $post_type;
    private $domain;
    private $posttypes = array();
    public function __construct (\Fgms\WordPress\WordPress $wp)
    {
        $this->posttypes = array(
          array('name'=>'Products',
                'singular_name' =>'Product #',
                'post_type'=>'product',
                'domain'=>'fgms-product',
                'supports'=> array('title','page-attributes','thumbnail')
               
               ),
          array('name'=>'Accessories',
                'singular_name' =>'Accessory #',
                'post_type'=>'product-accessory',
                'domain'=>'fgms-accessory',
                'supports'=> array('title','page-attributes','thumbnail')
               ),
          
          array('name'=>'Service Kits',
                'singular_name' =>'Service Kit #',
                'post_type'=>'service-kit',
                'domain'=>'fgms-service-kit',
                'supports'=> array('title','page-attributes','thumbnail')
               ),          
        );
        $this->wp=$wp;
        //	Attach hooks
        $this->wp->add_action('init',[$this,'registerPostType']);

        // products custom index menu          
        add_filter('manage_product_posts_columns', function($defaults){
            unset($defaults['date']);
             $defaults['fg-partnumber'] = 'Part #';
            return $defaults;
        }, 10);
        add_action('manage_product_posts_custom_column', function($column_name,$post_ID){
           if ($column_name == 'fg-partnumber'){
            //$fpost = get_post($post_ID);
            echo get_post_meta($post_ID, 'partnumber', true);            
          }         
        }, 10, 2);         
         
        // Product Accessory custom index menu
        add_filter('manage_product-accessory_posts_columns', function($defaults){
            unset($defaults['date']);
             $defaults['fg-partnumber'] = 'Part #';
            return $defaults;           
           
        }, 10);
         add_action('manage_product-accessory_posts_custom_column', function($column_name,$post_ID){
           if ($column_name == 'fg-partnumber'){
            //$fpost = get_post($post_ID);
            echo get_post_meta($post_ID, 'partnumber', true);            
          } 
        }, 10, 2);
         
        
        // service kit custom index menu
        add_filter('manage_service-kit_posts_columns', function($defaults){
            $defaults['fg-description'] = 'Description';            
            unset($defaults['date']);
            return $defaults;
        }, 10);
        
        add_action('manage_service-kit_posts_custom_column', function($column_name,$post_ID){            
          if ($column_name == 'fg-description'){
            //$fpost = get_post($post_ID);
            echo get_post_meta($post_ID, 'description', true);            
          }
        }, 10, 2);
        
        
        
        
    }
    public function registerPostType()
    {
        foreach($this->posttypes as $posttype){
          $this->wp->register_post_type($posttype['post_type'],[
              'labels' => [
                  'name' => $this->wp->__($posttype['name'],$posttype['domain']),
                  'singular_name' => $this->wp->__($posttype['singular_name'],$posttype['domain']),
                  'add_new_item' => $this->wp->__('Add New '. $posttype['singular_name'], $posttype['domain']),
                  'edit_item' => $this->wp->__('Edit '. $posttype['singular_name'], $posttype['domain']),
                  'new_item' => $this->wp->__('New '. $posttype['singular_name'], $posttype['domain']),
              ],
              'public' => true,
              'has_archive' => true,
              'hierarchical' => true,
              'supports'=> empty($posttype['supports']) ? array('title','editor','page-attributes','revisions','excerpt','thumbnail') : $posttype['supports']
          ]);          
        }
        
    }
}