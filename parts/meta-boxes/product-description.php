<?php
/*
Title: Product Details
Post Type: product
Order: 10
Collapse: false
Priority: high
*/



piklist('field',
    [
        'type' => 'text',
        'label' => __('Subtitle'),
        'field' => 'subtitle',
        'description' => 'The Subtitle will appear as an H2 just below the primary H1 title for the page. For SEO, key search words or phrases are important here.',
        'columns' => 12
    ]);
piklist('field',
    [
        'type' => 'editor',
        'field' => 'intro-text',
        'label' => __('Introduction'),
        'description'=> __('The Introduction will appear as larger text at the top of the Overview tab.  The introduction should be one sentence highlighting the key feature/value proposition for the product.')
          
    ]);
piklist('field',
    [
        'type' => 'editor',
        'field' => 'description',
        'label' => __('Description'),        
        'description' => __('The Description area is where you provide further details about the product.  This will appear in normal body font size.'),        
        'columns' => 12
    ]);