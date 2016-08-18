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

piklist('field',[
    'type' => 'group',
    'field' => 'document-downloads',
    'label' => __('Document Downloads'),
    'add_more' => true,
    'fields' => [
        [
            'type' => 'text',
            'label' => __('Title'),
            'field' => 'document-download-title',
            'columns' => 12
        ],
        [
            'type' => 'file',
            'field' => 'document-download-image',
            'label' => 'Image',
            'columns' => 12
        ],
        [
            'type' => 'file',
            'field' => 'document-download-file',
            'label' => 'File',
            'columns' => 12,
            'options' => [
                'basic' => true
            ]
        ],
        [
            'type' => 'text',
            'label' => __('Description'),
            'field' => 'document-download-description',
            'columns' => 12
        ]
    ]
]);

piklist('field',[
    'type' => 'group',
    'field' => 'images',
    'label' => __('Images'),
    'add_more' => true,
    'fields' => [
        [
            'type' => 'text',
            'label' => __('Title'),
            'field' => 'image-title',
            'columns' => 12
        ],
        [
            'type' => 'file',
            'field' => 'image-image',
            'label' => 'Image',
            'columns' => 12
        ]
    ]
]);