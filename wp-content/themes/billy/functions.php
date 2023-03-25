<?php
function base_scripts_styles() {
    $version   = 1;
    $in_footer = true;

    // styles
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans&display=swap', [] );
	wp_enqueue_style('tel-input', get_template_directory_uri() . '/css/intlTelInput.min.css', [] );
    wp_enqueue_style('swiper style', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', [] );
    wp_enqueue_style('main style', get_template_directory_uri() . '/css/style.css', [] );
    if(is_woocommerce() || is_cart() || is_checkout()){
        wp_enqueue_style('shop style', get_template_directory_uri() . '/css/shop.css', [] );
    }
    wp_enqueue_style('theme', get_stylesheet_uri(), [] );

    // scripts
    wp_enqueue_script('swiper script', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', [], $version, $in_footer );
	wp_enqueue_script('int-tel-scripy', get_template_directory_uri() . '/js/intlTelInput.js', [], $version, $in_footer );
    wp_enqueue_script('main script', get_template_directory_uri() . '/js/main.js', [], $version, $in_footer );
}
add_action( 'wp_enqueue_scripts', 'base_scripts_styles' );

// Carbon Fields
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( 'includes/carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields () {
    require_once('includes/carbon-fields-options/theme-options.php');
    require_once('includes/carbon-fields-options/post-meta.php');
}

function my_theme_setup(){
    add_theme_support('post-thumbnails');
	add_theme_support( 'custom-logo' );
}

add_action('after_setup_theme', 'my_theme_setup');

function siteDefPaging( \WP_Query $wp_query=null, $echo=true, $params=[] ){
    if ( null === $wp_query ) {
        global $wp_query;
    }
    $add_args = [];
		$pages = paginate_links( array_merge( [
            'nol'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'format'       => '?paged=%#%',
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'total'        => $wp_query->max_num_pages,
            'type'         => 'array',
            'show_all'     => false,
            'end_size'     => 3,
            'mid_size'     => 1,
            'prev_next'    => true,
			'prev_text'    => '<svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 15L2.0625 9.51235C1.52457 9.14044 1.48252 8.36079 1.97732 7.93318L10 1" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>Previous',
            'next_text'    => 'Next<svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L8.9375 6.48765C9.47543 6.85956 9.51748 7.63921 9.02268 8.06682L1 15" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>',
            'add_args'     => $add_args,
            'add_fragment' => ''
        ], $params )
    );

    if( is_array( $pages ) ) {
        $pagination = '<ul class="pagination">';
	
        foreach ( $pages as $page ) {
            $pagination .= '<li class="pagination-item' . ( strpos( $page, 'next') !== false || strpos( $page, 'prev') ? ' arrow' : '') . ( strpos( $page, 'current') !== false ? ' active' : '') . '"> ' . $page . '</li>';
        }
		$pagination .= "</ul>";
        if ( $echo ) {
            echo $pagination;
        } else {
            return $pagination;
        }
    }

    return null;
}

function wp_custom_trim_words( $text, $num_words = 55, $more = null ) {
	if ( null === $more ) {
		$more = __( '&hellip;' );
	}

	$original_text = $text;
	$num_words     = (int) $num_words;

	/*
	 * translators: If your word count is based on single characters (e.g. East Asian characters),
	 * enter 'characters_excluding_spaces' or 'characters_including_spaces'. Otherwise, enter 'words'.
	 * Do not translate into your own language.
	 */
	if ( strpos( _x( 'words', 'Word count type. Do not translate!' ), 'characters' ) === 0 && preg_match( '/^utf\-?8$/i', get_option( 'blog_charset' ) ) ) {
		$text = trim( preg_replace( "/[\n\r\t ]+/", ' ', $text ), ' ' );
		preg_match_all( '/./u', $text, $words_array );
		$words_array = array_slice( $words_array[0], 0, $num_words + 1 );
		$sep         = '';
	} else {
		$words_array = preg_split( "/[\n\r\t ]+/", $text, $num_words + 1, PREG_SPLIT_NO_EMPTY );
		$sep         = ' ';
	}

	if ( count( $words_array ) > $num_words ) {
		array_pop( $words_array );
		$text = implode( $sep, $words_array );
		$text = $text . $more;
	} else {
		$text = implode( $sep, $words_array );
	}

	/**
	 * Filters the text content after words have been trimmed.
	 *
	 * @since 3.3.0
	 *
	 * @param string $text          The trimmed text.
	 * @param int    $num_words     The number of words to trim the text to. Default 55.
	 * @param string $more          An optional string to append to the end of the trimmed text, e.g. &hellip;.
	 * @param string $original_text The text before it was trimmed.
	 */
	return apply_filters( 'wp_trim_words', $text, $num_words, $more, $original_text );
}

function register_menus() { 
	register_nav_menus(
        array(
            'header-menu' => 'Header Menu',
            'footer-1' => 'Footer Menu 1',
            'footer-2' => 'Footer Menu 2',
			'footer-3' => 'Footer Menu 3',
        )
    ); 
} 
add_action('init', 'register_menus');

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
	add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
    add_theme_support( 'wc-product-gallery-lightbox' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_filter( 'single_product_archive_thumbnail_size', function( $size ) {
	return 'medium';
} );

add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => ' <span class="line"> / </span> ',
            'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">',
            'wrap_after'  => '</nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Books', 'breadcrumb', 'woocommerce' ),
        );
}
add_filter('woocommerce_checkout_fields', 'njengah_override_checkout_fields');

function njengah_override_checkout_fields($fields)

 {

 unset($fields['billing']['billing_address_2']);

 $fields['billing']['billing_company']['placeholder'] = 'Company name (optional)';


 $fields['billing']['billing_first_name']['placeholder'] = 'First Name';

 $fields['shipping']['shipping_first_name']['placeholder'] = 'First Name';

 $fields['shipping']['shipping_last_name']['placeholder'] = 'Last Name';

 $fields['shipping']['shipping_company']['placeholder'] = 'Company Name';

 $fields['billing']['billing_last_name']['placeholder'] = 'Last Name';

 $fields['billing']['billing_email']['placeholder'] = 'Email Address ';
 $fields['billing']['billing_postcode']['placeholder'] = 'Postcode';
 $fields['billing']['billing_city']['placeholder'] = 'Town / City ';
 $fields['billing']['billing_phone']['placeholder'] = 'Phone ';


 return $fields;

 }