<?php
/*
Title: Product Information
Post Type: product
*/

piklist('field',[
    'type' => 'textarea',
    'field' => 'features',
    'label' => __('Features')
]);

piklist('field',[
    'type' => 'group',
    'field' => 'specifications',
    'label' => __('Specifications'),
    'add_more' => true,
    'fields' => [
        [
            'type' => 'text',
            'label' => __('Name'),
            'field' => 'specification-name',
            'columns' => 12
        ],
        [
            'type' => 'text',
            'label' => __('Description'),
            'field' => 'specification-description',
            'columns' => 12
        ]
    ]
]);