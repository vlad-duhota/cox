<?php
/**
 * Show messages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/notices/notice.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! $notices ) {
	return;
}

?>

<?php foreach ( $notices as $notice ) : ?>
	<div class="woocommerce-info"<?php echo wc_get_notice_data_attr( $notice ); ?>>
	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M9.41839 3.25077C9.6991 2.65912 10.3019 2.25 11.0003 2.25H15.0003C15.6987 2.25 16.3016 2.65912 16.5823 3.25077C17.2658 3.25574 17.7986 3.28712 18.2741 3.47298C18.8423 3.69505 19.3365 4.07255 19.7003 4.5623C20.0672 5.05639 20.2394 5.68968 20.4765 6.56133C20.4887 6.60604 20.501 6.65137 20.5135 6.69735L21.1044 8.86428C21.4919 9.06271 21.8309 9.32993 22.1138 9.6922C22.7358 10.4888 22.8459 11.4377 22.7353 12.5261C22.6279 13.5822 22.2954 14.9122 21.8792 16.577L21.8528 16.6824C21.5896 17.7352 21.376 18.59 21.1218 19.2572C20.8568 19.9527 20.5204 20.5227 19.9658 20.9558C19.4112 21.3888 18.7766 21.5769 18.0375 21.6653C17.3287 21.75 16.4477 21.75 15.3625 21.75H10.6382C9.55303 21.75 8.67196 21.75 7.96315 21.6653C7.22414 21.5769 6.5895 21.3888 6.03488 20.9558C5.48026 20.5227 5.14386 19.9527 4.87889 19.2572C4.62475 18.5901 4.41107 17.7353 4.14789 16.6825L4.12149 16.5769C3.70527 14.9121 3.37278 13.5822 3.26541 12.5261C3.15476 11.4377 3.26491 10.4888 3.88691 9.6922C4.16976 9.32993 4.50883 9.06271 4.89631 8.86428L5.48716 6.69735C5.4997 6.65137 5.51203 6.60604 5.52419 6.56134C5.76126 5.68968 5.93351 5.05639 6.30044 4.5623C6.66415 4.07255 7.15837 3.69505 7.72656 3.47298C8.20211 3.28712 8.73485 3.25574 9.41839 3.25077ZM9.4198 4.75219C8.75796 4.75888 8.49239 4.78416 8.27259 4.87007C7.96664 4.98964 7.70052 5.19291 7.50468 5.45662C7.32857 5.69376 7.22523 6.02508 6.93433 7.09195L6.58075 8.38869C7.61855 8.24996 8.95835 8.24998 10.623 8.25H15.3777C17.0423 8.24998 18.3822 8.24996 19.4199 8.38869L19.0664 7.09194C18.7755 6.02508 18.6721 5.69377 18.496 5.45663C18.3002 5.19291 18.0341 4.98964 17.7281 4.87007C17.5083 4.78416 17.2427 4.75888 16.5809 4.75219C16.2996 5.34225 15.6976 5.75 15.0003 5.75H11.0003C10.3031 5.75 9.70111 5.34225 9.4198 4.75219ZM11.0003 3.75C10.8623 3.75 10.7503 3.86193 10.7503 4C10.7503 4.13807 10.8623 4.25 11.0003 4.25H15.0003C15.1384 4.25 15.2503 4.13807 15.2503 4C15.2503 3.86193 15.1384 3.75 15.0003 3.75H11.0003ZM6.70019 9.88649C5.78902 10.0183 5.34805 10.2582 5.06921 10.6153C4.79038 10.9725 4.6646 11.4584 4.75772 12.3744C4.85282 13.3099 5.15705 14.5345 5.59176 16.2733C5.86902 17.3824 6.06212 18.1496 6.28061 18.7231C6.49193 19.2778 6.69884 19.5711 6.958 19.7735C7.21716 19.9758 7.55188 20.1054 8.14125 20.1759C8.75064 20.2488 9.54182 20.25 10.685 20.25H15.3157C16.4589 20.25 17.2501 20.2488 17.8594 20.1759C18.4488 20.1054 18.7835 19.9758 19.0427 19.7735C19.3019 19.5711 19.5088 19.2778 19.7201 18.7231C19.9386 18.1496 20.1317 17.3824 20.4089 16.2733C20.8436 14.5345 21.1479 13.3099 21.243 12.3744C21.3361 11.4584 21.2103 10.9725 20.9315 10.6153C20.6526 10.2582 20.2117 10.0183 19.3005 9.88649C18.3699 9.75187 17.108 9.75 15.3157 9.75H10.685C8.89266 9.75 7.63083 9.75187 6.70019 9.88649Z" fill="white"/>
</svg>

		<?php echo wc_kses_notice( $notice['notice'] ); ?>
	</div>
<?php endforeach; ?>
