<?php
/*
Title: Components
Post Type: product
Order: 45
Collapse: true
Priority: high
*/


piklist('field',[
    'type' => 'group',
    'field' => 'components',
    
    'description' => __('creates a component in a drop text in overview tab'),
    'add_more' => true,
    'fields' => [
        [
            'type' => 'text',
            'label' => __('Title'),
            'field' => 'component-title',
            'columns' => 12
        ],        
        [    
            'type' => 'editor',
            'field' => 'description',
            'label' => __('Description'),
            'description'=> __('Content for Component')
           
        ]
    
    ]
]);