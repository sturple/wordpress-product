<?php
/*
Title: Videos
Post Type: product
Order: 50
Collapse: true
Priority: high
*/
piklist('field',[
    'type' => 'group',
    'field' => 'videos',
    
    'description' => __('If you would like to use a custom thumbnail that is different than the default thumbnail supplied by YouTube, you should upload a jpg or png file that is 320px x 180px.'),
    'add_more' => true,
    'fields' => [
        [
            'type' => 'radio',
            'field' => 'video-feature',
            'label' => 'Set as Feature',
            'value' => 0,
            'list' => true,
            'columns' => 6,
            'choices' => array( 1 => 'Enable',  0 => 'Disable'  )            
        ],
        [
            'type' => 'text',
            'label' => __('Video Title'),
            'field' => 'video-title',
            'columns' => 12
        ],
        [
            'type' => 'textarea',
            'label' => __(' Description'),
            'field' => 'video-description',
            'columns' => 12
        ],
        [
            'type' => 'text',
            'label' => __('YouTube Id'),
            'field' => 'video-id',
            'columns' => 12
        ],        
        [
            'type' => 'file',
            'field' => 'video-image',
            'label' => 'Optional Thumbnail',            
            'description' =>'Ideal Size ( x )',
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

 
    ]
]);