<?php
/*
Title: Accessories
Post Type: product
Order: 60
Collapse: true
Priority: high
*/
$choices_array = array(''=>'-- Select Accessories -- ');
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query(array('post_type' => 'product-accessory',
                                          'posts_per_page'=>1000));

foreach ($all_wp_pages as $accessory){ 
    $choices_array[$accessory->ID] =  $accessory->post_title;
}

piklist('field',[
    'type' => 'group',
    'field' => 'accessories-group',
    'description' => __('After you\'ve created a list of accessories, you can drag and drop to reorder them.'),
    'add_more' => true,
    'fields' => [
        [
            'type' => 'select',
            'label' => __('Add Accessory'),
            'field' => 'accessories-product',
            'choices' => $choices_array
        ]       
    ]
]);