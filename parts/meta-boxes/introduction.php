<?php
/*
Title: Introduction
Post Type: product
Order: 10
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

piklist('field',  [
    'type' => 'editor',
    'field' => 'intro-text',
    'label' => __(''),
    'description'=> __('This text will appear just below the title and subtitle.'),
    'options' => $piklist_editor_options
    
    ]
    );