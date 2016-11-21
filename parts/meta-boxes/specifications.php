<?php
/*
Title: Specifications
Post Type: product
Order: 40
Collapse: true
Priority: high
*/

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
            'type' => 'textarea',
            'label' => __('Description, add ;; betwen entries to create a multiple items'),
            'field' => 'specification-description',
            'columns' => 12
        ]
    ]
]);