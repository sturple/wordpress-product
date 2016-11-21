<?php
/*
Title: Image Gallery
Post Type: product
Order: 20
Collapse: true
Priority: high
*/


piklist('field',[
    'type' => 'group',
    'field' => 'gallery-images',
    'label' => __(''),
    'description' => _('<span style="margin-bottom: 12px ;display:block" >These images will be arranged into a gallery below the introductory text.  Thumbs are generated automatically. </span> Ideal image size would be <strong>1200px by 800px </strong> for horizontal images.  For vertical images, ideally the height should be maximum 800px.'),
    'add_more' => false,
    'fields' => [
        [
            'type' => 'text',
            'label' => __('Thumbs Per Row'),
            'field' => 'image-thumbs-per-row',
            'attributes' => array('placeholder' => 5)
        ],        
        [
            'type' => 'file',
            'field' => 'gallery-image-ids',
            'label' => 'Images',
            'options' => array('button' => 'Add Image'),
            'columns' => 12
        ]
    ]
]);