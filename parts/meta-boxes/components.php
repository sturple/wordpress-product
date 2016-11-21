<?php
/*
Title: Components
Post Type: product
Order: 45
Collapse: true
Priority: high
*/
$piklist_editor_options = array( // Pass any option that is accepted by wp_editor()
      'wpautop' => false,
      'media_buttons' => true,
      'shortcode_buttons' => true,
      'teeny' => true,
      'dfw' => false,
      'quicktags' => true,
      'drag_drop_upload' => true,
      'tinymce' => array(
        'resize' => false,
        'wp_autoresize_on' => true
      )
    );

piklist('field',[
    'type' => 'group',
    'field' => 'components',
    
    'description' => __('creates a component in a drop text in overview tab'),
    'add_more' => true,
    'fields' => [
        [
            'type' => 'text',
            'label' => __('Component Title'),
            'field' => 'component-title',
            'columns' => 12
        ],        
        [    
            'type' => 'editor',
            'field' => 'component-text',
            'label' => __(''),
            'description'=> __('Content for Component'),
            'options' => $piklist_editor_options
        ]
    
    ]
]);