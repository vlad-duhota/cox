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
   Field::make( 'text', 'hero_title_1', 'Title' ), 
) );