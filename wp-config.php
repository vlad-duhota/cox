<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_billycox_db' );

/** Database username */
define( 'DB_USER', 'wp_billycox_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_billycox_pw' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',		 '.S-DBMC_[c7UW=38St:zYPJoN0t8VUyrbCcqnHUy<4KRAetkI1Zh=N9|Y:JVJMRB');
define('SECURE_AUTH_KEY',  ' z,L,caavTEHQ|8u$Gb)L>g o1/hg`q=4+euyUAxjz9&U5o:h{=KI>DJgHn{g!/F');
define('LOGGED_IN_KEY',	'P=%>WL(8U9;?beO3GYmY6[m^$VgV1 zTW+o/x8!IQA{wk{a[UI0F y9d/MD^URdN');
define('NONCE_KEY',		'zX4YRS1MEW}RNAWjH()|l|4;V^Q8&`2hG$f!/N2YF`[e|_Bzo}k-ISi~-/[2<LMQ');
define('AUTH_SALT',		'46YY}JirP5}dt[K=Y7r(jNCXa6UlcFbK9_<9eK,_cPVc[{@4!A}AWA6@ r+R@no-');
define('SECURE_AUTH_SALT', '!`.W3u=81eqR(hq`y,.vL<d%9@|d&;RDka,§,^JPY(uHr VxC@o@JJc|Q`Y6.:H{');
define('LOGGED_IN_SALT',   '{(§afLs( .§&`htJ_eF3@+d(oq/Ndr!TrPZ@0,}§+.1;E{940SOwP^Z1Z/Cx(MaP');
define('NONCE_SALT',	   '6?+7=B.%WjCu0eU1o |]<KrSC|@Rm|WB1$Y!p]!8YkmzT&&/6Dk6m[ RX}S:EpQG');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
