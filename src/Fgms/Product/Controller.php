<?php
namespace Fgms\Product;

class Controller
{
    private $wp;

    private $post_type;
    private $domain;

    public function __construct (\Fgms\WordPress\WordPress $wp)
    {
        $this->wp=$wp;
        $this->post_type='product';
        $this->domain='fgms-product';
        //	Attach hooks
        $this->wp->add_action('init',[$this,'registerPostType']);
    }

    public function registerPostType()
    {
        $this->wp->register_post_type($this->post_type,[
            'labels' => [
                'name' => $this->wp->__('Products',$this->domain),
                'singular_name' => $this->wp->__('Product',$this->domain)
            ],
            'public' => true
        ]);
    }

}