<?php
/*
Title: Contents
Post Type: service-kit
Order: 20
Collapse: false
Priority: high
*/


piklist('field',[
    'type' => 'group',
    'field' => 'servicekit-contents',
    'label' => __(''),
    'description' => _('Use this area to add the contents to each Service Kit.  Click on the "+" button to create another line entry.<br/></br/>After you\'ve created a list of service kit contents, you can drag and drop to reorder them.'),
    'add_more' => true,
    'fields' => [
        [
            'type' => 'text',
            'label' => __('Quantity'),
            'field' => 'quantity',
            'attributes' => array('placeholder' => ''),
            'columns' => 2,
        ],
        [
            'type' => 'text',
            'label' => __('Part #'),
            'field' => 'part-number',
            'attributes' => array('placeholder' => ''),
            'columns' => 3,
        ],        
        [
            'type' => 'textarea',
            'field' => 'description',
            'label' => 'Description',
            'attributes' => [
                'rows' => 1,
                'cols' => 30,
                'class' => 'large-text'
            ],
            'columns' => 7,
        ]    

    ]
]);