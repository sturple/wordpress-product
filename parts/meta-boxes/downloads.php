<?php
/*
Title: Downloads
Post Type: product
Order: 55
Collapse: true
Priority: high
*/

piklist('field',[
    'type' => 'group',
    'field' => 'document-downloads',
    'description' => __('Ideal document thumb size is 220px x 282px.<br/><br/>Note: if you have a file uploaded, but you also have a download link entered, the download link will take priority.'),
    'add_more' => true,
    'fields' => [
        [
            'type' => 'text',
            'label' => __('Title'),
            'field' => 'document-download-title',
            'columns' => 12
        ],
         [
            'type' => 'text',
            'label' => __('Description'),
            'field' => 'document-download-description',
            'columns' => 12
        ],       
        [
            'type' => 'file',
            'field' => 'document-download-image',
            'label' => 'Image',
            'columns' => 12,
            'options' => array('multiple'=>false,'button' => 'Add Image'),
            'validate' => array(
                array(
                  'type' => 'limit'
                  ,'options' => array(
                    'min' => 1
                    ,'max' => 1
                  )
                  ,'message' => 'Sorry, you can only select one image for this.'
                )
              )
        ],
        [
            'type' => 'text',
            'label' => __('Document Link'),
            'field' => 'document-download-link',
            'columns' => 12,
            
        ],        
        [
            'type' => 'file',
            'field' => 'document-download-file',
            'label' => 'Or Upload File',
            'columns' => 12,
            'options' => [
                'basic' => true
            ]
           
        ]

    ]
]);