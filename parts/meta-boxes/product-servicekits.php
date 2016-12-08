<?php
/*
Title: Service Kit
Post Type: product
Order: 65
Collapse: true
Priority: high
*/
$choices_array = array(''=>'-- Select Service Kit -- ');
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query(array('post_type' => 'service-kit',
                                          'posts_per_page'=>1000));

foreach ($all_wp_pages as $servicekit){ 
    $choices_array[$servicekit->ID] =  $servicekit->post_title;
}

piklist('field',[
    'type' => 'group',
    'field' => 'servicekits-group',
    'description' => __('After you\'ve created a list of Service Kits, you can drag and drop to reorder them.'),
    'add_more' => true,
    'fields' => [
        [
            'type' => 'select',
            'label' => __('Add Service Kit'),
            'field' => 'service-kit',
            'choices' => $choices_array
        ]      
    ]
]);