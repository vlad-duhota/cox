<?php
if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Theme options')
->add_tab( __('Social Media'), array(
    Field::make( 'complex', 'socials', 'Socials' )
    ->set_max(6)
    ->add_fields( array(
       Field::make( 'image', 'socials_img', 'Social icon'),
       Field::make( 'text', 'socials_link', 'Social link'),
     ) ),
) )
->add_tab( __('footer'), array(
    Field::make( 'text', 'footer_text', 'Footer text' ),
    Field::make( 'text', 'footer_title_1', 'Footer title 1' )
    ->set_width(50),
    Field::make( 'text', 'footer_title_2', 'Footer title 2' )
    ->set_width(50),
    Field::make( 'text', 'footer_title_3', 'Footer title 3' )
    ->set_width(50),
    Field::make( 'text', 'footer_title_4', 'Footer title 4' )
    ->set_width(50),
    Field::make( 'text', 'footer_tel', 'Phone number' )
    ->set_width(50),
    Field::make( 'text', 'footer_email', 'Email' )
    ->set_width(50),
) );




