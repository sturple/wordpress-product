<?php
/*
Title: Product Brochure
Post Type: product
Order: 53
Collapse: true
Priority: high
*/

piklist('field',[
    'type' => 'group',
    'field' => 'brochure-downloads',
    'description' => __('Note: if you have a file uploaded, but you also have a download link entered, the download link will take priority.'),
    'add_more' => true,
    'fields' => [
        [
            'type' => 'text',
            'label' => __('Title ie English, Francais, or Espanol'),
            'field' => 'brochure-title',
            'columns' => 3
        ],
        [
            'type' => 'text',
            'label' => __('Document Link'),
            'field' => 'brochure-link',
            'columns' => 4,
            
        ],        
        [
            'type' => 'file',
            'field' => 'brochure-file',
            'label' => 'Or Upload File',
            'columns' => 5,
            'options' => array(
                'modal_title' => 'Add PDF'
                ,'button' => 'Add PDF'
              )
           
        ]

    ]
]);