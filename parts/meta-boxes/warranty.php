<?php
/*
Title: Warranty
Post Type: product
Order: 70
Collapse: true
Priority: high
*/

/*
 *Warranties are added by creating a custom twig template prefixed with warranty, ie warranty-standard.twig
 */
$choices_array = array(''=>'-- Select Warranty -- ',
                       'standard'=>'Limited Warranty (Standard)');
piklist('field',[
    'type' => 'select',
    'field' => 'warranty-product',
    'label' => __(''),
    'description' => __('If a warranty content option is not available from the dropdown, contact the marketing department to add a new option.'),
    'choices' => $choices_array
]);