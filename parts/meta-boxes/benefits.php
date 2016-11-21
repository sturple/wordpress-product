<?php
/*
Title: Benefits
Post Type: product
Order: 30
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
    'type' => 'editor',
    'field' => 'features',
    'label' => __(''),
    'description' => __('If you need to make headings, start with H3 (H1 and H2 are reserved for the title and subtitle). You will need to manually use paragraph tags as well.'),
    'options' => $piklist_editor_options
]);


