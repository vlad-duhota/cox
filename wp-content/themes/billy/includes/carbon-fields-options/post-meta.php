<?php

if (!defined('ABSPATH')) {
   exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// =========== ABOUT PAGE ===========

Container::make('post meta', 'Front Page')
->show_on_template('front-page.php')
->add_tab( __('First block'), array(
   Field::make( 'text', 'hero_text', 'Form text' ), 
   Field::make( 'media_gallery', 'hero_video', 'Background video source' )
    ->set_type( array('video' ) ),
) )
->add_tab( __('Make Money'), array(
   Field::make( 'text', 'make_title', 'Title' ), 
   Field::make( 'text', 'make_btn_1', 'Btn 1 text' )
   ->set_width( 50 ), 
   Field::make( 'text', 'make_btn_2', 'Btn 2 text' )
   ->set_width( 50 ), 
   Field::make( 'text', 'make_btn_3', 'Btn 3 text' )
   ->set_width( 50 ), 
   Field::make( 'text', 'make_btn_4', 'Btn 4 text' )
   ->set_width( 50 ), 
) )
->add_tab( __('About'), array(
   Field::make( 'text', 'about_title', 'Title' ) 
   ->set_help_text( 'Text in span - red text' ),
   Field::make( 'text', 'about_video_url', 'Video Link' ), 
   Field::make( 'text', 'about_uptitle', 'Uptitle' ), 
   Field::make( 'text', 'about_text_1', 'Text 1' ), 
   Field::make( 'text', 'about_text_2', 'Text 2' ), 
) )
->add_tab( __('Logos'), array(
   Field::make( 'complex', 'logos_list', 'Logos' )
   ->set_max(5)
   ->add_fields( array(
      Field::make( 'text', 'logos_url', 'Company link' ),
      Field::make( 'image', 'logos_img', 'Company logo' ),
   ) )
) )
->add_tab( __('Banner 1'), array(
   Field::make( 'media_gallery', 'banner_1_video', 'Background video source' )
    ->set_type( array('video' ) ),
    Field::make( 'text', 'banner_1_text', 'Btn text' ),
) )
->add_tab( __('M V M T School'), array(
   Field::make( 'text', 'stduy_uptitle', 'Uptitle' ), 
   Field::make( 'text', 'study_title', 'Title' ),
   Field::make( 'text', 'study_video_url', 'Video Link' ), 
   Field::make( 'text', 'study_text_1', 'Text 1' ), 
   Field::make( 'text', 'study_text_2', 'Text 2' ), 
   Field::make( 'complex', 'study_list', 'List' )
   ->add_fields( array(
      Field::make( 'text', 'study_item', 'Item' ),
   ) ),
   Field::make( 'text', 'study_btn', 'Btn text' ),
   Field::make( 'text', 'study_btn_url', 'Btn link' )
) )

->add_tab( __('Banner 2'), array(
   Field::make( 'media_gallery', 'banner_2_video', 'Background video source' )
    ->set_type( array('video' ) ),
) )

->add_tab( __('Speaking And Training'), array(
   Field::make( 'text', 'sat_uptitle', 'Uptitle' ), 
   Field::make( 'text', 'sat_title', 'Title' ),
   Field::make( 'separator', 'sat_sep_1', 'Item 1' ),
   Field::make( 'image', 'sat_img_1', 'Item Image' ), 
   Field::make( 'text', 'sat_title_1', 'Item Title' ), 
   Field::make( 'text', 'sat_text_1', 'Item Text' ),  
   Field::make( 'text', 'sat_btn_1', 'Item Btn text' ), 
   Field::make( 'text', 'sat_btn_url_1', 'Item Btn url' )
   ->set_help_text( 'Change this to #podcats if you need scroll down' ), 
   Field::make( 'separator', 'sat_sep_2', 'Item 2' ),
   Field::make( 'image', 'sat_img_2', 'Item Image' ), 
   Field::make( 'text', 'sat_title_2', 'Item Title' ), 
   Field::make( 'text', 'sat_text_2', 'Item Text' ),
   Field::make( 'text', 'sat_btn_2', 'Item Btn text' ), 
   Field::make( 'text', 'sat_btn_url_2', 'Item Btn url' )
   ->set_help_text( 'Change this to #podcats if you need scroll down' ),   
   Field::make( 'separator', 'sat_sep_3', 'Item 3' ),
   Field::make( 'image', 'sat_img_3', 'Item Image' ),
   Field::make( 'text', 'sat_title_3', 'Item Title' ),  
   Field::make( 'text', 'sat_text_3', 'Item Text' ),  
   Field::make( 'text', 'sat_btn_3', 'Item Btn text' ),  
   Field::make( 'text', 'sat_btn_url_3', 'Item Btn url' )
   ->set_help_text( 'Full url' ),
) )
->add_tab( __('Banner 3'), array(
   Field::make( 'media_gallery', 'banner_3_video', 'Background video source' )
    ->set_type( array('video' ) ),
) )
->add_tab( __('Logos 2'), array(
   Field::make( 'text', 'logos_title', 'Title' ),  
   Field::make( 'complex', 'logos_list_2', 'Logos' )
   ->set_max(5)
   ->add_fields( array(
      Field::make( 'text', 'logos_url', 'Company link' ),
      Field::make( 'image', 'logos_img', 'Company logo' ),
   ) )
) )
->add_tab( __('Training System'), array(
   Field::make( 'text', 'training_title', 'Title' ) 
   ->set_help_text( 'Text in span - red text' ),
   Field::make( 'text', 'training_video_url', 'Video Link' ), 
   Field::make( 'text', 'training_uptitle', 'Uptitle' ), 
   Field::make( 'text', 'training_text_1', 'Text 1' ), 
   Field::make( 'text', 'training_text_2', 'Text 2' ), 
   Field::make( 'text', 'training_btn', 'Btn text' ), 
   Field::make( 'text', 'training_btn_url', 'Btn link' ), 
) )
->add_tab( __('Article'), array(
   Field::make( 'image', 'article_bg', 'Article bg' ), 
   Field::make( 'text', 'article_title', 'Article text' ),
   Field::make( 'text', 'article_author', 'Article author' ), 
) )
->add_tab( __('Banner 4'), array(
   Field::make( 'media_gallery', 'banner_4_video', 'Background video source' )
    ->set_type( array('video' ) ),
) )
->add_tab( __('Follow My Facebook'), array(
   Field::make( 'text', 'facebook_uptitle', 'Uptitle' ), 
   Field::make( 'text', 'facebook_title', 'Title' ), 
   Field::make( 'text', 'facebook_video_url', 'Video Link' ), 
   Field::make( 'text', 'facebook_text_1', 'Text 1' ), 
   Field::make( 'text', 'facebook_text_2', 'Text 2' ), 
   Field::make( 'text', 'facebook_btn', 'Btn text' ), 
   Field::make( 'text', 'facebook_btn_url', 'Btn link' ), 
) )
->add_tab( __('Dropping Bombs Podcast'), array(
   Field::make( 'text', 'podcast_uptitle', 'Uptitle' ), 
   Field::make( 'text', 'podcast_title', 'Title' ), 
   Field::make( 'text', 'podcast_video_url', 'Video Link' ), 
   Field::make( 'text', 'podcast_text_1', 'Text 1' ), 
   Field::make( 'text', 'podcast_text_2', 'Text 2' ), 
   Field::make( 'text', 'podcast_btn', 'Btn text' ), 
   Field::make( 'text', 'podcast_btn_url', 'Btn link' ), 
) )
->add_tab( __('Banner 5'), array(
   Field::make( 'media_gallery', 'banner_5_video', 'Background video source' )
    ->set_type( array('video' ) ),
) )
->add_tab( __('Social Media'), array(
   Field::make( 'text', 'social_uptitle', 'Uptitle' ), 
   Field::make( 'text', 'social_title', 'Title' ), 
) )
->add_tab( __('YouTube channel'), array(
   Field::make( 'text', 'youtube_uptitle', 'Uptitle' ), 
   Field::make( 'text', 'youtube_title', 'Title' ), 
   Field::make( 'complex', 'youtube_list', 'Videos' )
   ->set_max(4)
   ->add_fields( array(
      Field::make( 'text', 'youtube_url', 'Video link' ),
   ) )
) )
->add_tab( __('Be On My Podcast'), array(
   Field::make( 'text', 'be_podcast_title', 'Title' ), 
   Field::make( 'text', 'be_podcast_text', 'Text' ), 
) )
->add_tab( __('Banner 6'), array(
   Field::make( 'media_gallery', 'banner_6_video', 'Background video source' )
    ->set_type( array('video' ) ),
) )
->add_tab( __('My book'), array(
   Field::make( 'text', 'book_uptitle', 'Uptitle' ), 
   Field::make( 'text', 'book_title', 'Title' ), 
   Field::make( 'text', 'book_text_1', 'Text 1' ), 
   Field::make( 'text', 'book_text_2', 'Text 2' ), 
   Field::make( 'text', 'book_btn', 'Btn text' ), 
   Field::make( 'text', 'book_url', 'Btn link' ), 
   Field::make( 'image', 'book_img', 'Image' ), 
   Field::make( 'complex', 'book_slider', 'Reviews Slider' )
   ->add_fields( array(
      Field::make( 'text', 'book_slider_text', 'Review Text' ),
      Field::make( 'text', 'book_slider_author', 'Review Author' ),
   ) )
) );

Container::make('post meta', 'Contact page')
->show_on_template('contact-page.php')
->add_fields( array(
   Field::make( 'text', 'contact_title', 'Title' ),
   Field::make( 'text', 'contact_form', 'Form Iframe' ),
) );

Container::make('post meta', 'Speaking Page')
->show_on_template('speaking-page.php')
->add_tab( __('First block'), array(
   Field::make( 'text', 'hero_text', 'Text' ), 
   Field::make( 'media_gallery', 'hero_video', 'Background video source' )
    ->set_type( array('video' ) ),
   Field::make( 'text', 'hero_btn', 'Button Text' ), 
   Field::make( 'file', 'hero_btn_file', 'Button File' )
   ->set_value_type('url'), 
) )
->add_tab( __('What Are The Goals Of Your Next Conference?'), array(
   Field::make( 'text', 'faq_title_1', 'Title 1' ), 
   Field::make( 'text', 'faq_uptitle', 'Uptitle' ), 
   Field::make( 'text', 'faq_title_2', 'Title 2' ), 
   Field::make( 'complex', 'faq_list', 'List' )
   ->add_fields( array(
      Field::make( 'text', 'faq_list_title', 'Question' ),
      Field::make( 'rich_text', 'faq_list_text', 'Text' ),
   ) )
) )
->add_tab( __('Speaking And Training'), array(
   Field::make( 'separator', 'sat_sep_1', 'Item 1' ),
   Field::make( 'image', 'sat_img_1', 'Item Image' ), 
   Field::make( 'text', 'sat_title_1', 'Item Title' ), 
   Field::make( 'rich_text', 'sat_text_1', 'Item Text' ),  
   Field::make( 'separator', 'sat_sep_2', 'Item 2' ),
   Field::make( 'image', 'sat_img_2', 'Item Image' ), 
   Field::make( 'text', 'sat_title_2', 'Item Title' ), 
   Field::make( 'rich_text', 'sat_text_2', 'Item Text' ),
   Field::make( 'separator', 'sat_sep_3', 'Item 3' ),
   Field::make( 'image', 'sat_img_3', 'Item Image' ),
   Field::make( 'text', 'sat_title_3', 'Item Title' ),  
   Field::make( 'rich_text', 'sat_text_3', 'Item Text' ),  
) );