<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nizna_3r_maros_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Gl6oPm!};+m7)/;O|#NAFp|<B!@zL+54I;CTA_|&w9&o/c`:cV*(/ci@*48z0Hk7' );
define( 'SECURE_AUTH_KEY',  '6k[j4u(iZdTCk-b8pp{bZ_B{Dey+9(t~,#+U^C5!N01IHqlum;O))>/1?sJ7BhPm' );
define( 'LOGGED_IN_KEY',    '0--_g6fj{t?XV 9[`kX$Inr!S[?S&x=qs-(_2w7Ck?d?f)@~$Ies75nSjTNLf8F)' );
define( 'NONCE_KEY',        'ozJlA}5w*LilIN:s(&yI/$x{<sSUnG]Yt5>ZWAi<:|Je59j2JZKNbmo^s&C6t7RV' );
define( 'AUTH_SALT',        '-IID6LyZ@6wcufBA6NPb!% x!,?C/MHejUI<;].-@lc-<nBi@m]8F_hM{k(Vg$._' );
define( 'SECURE_AUTH_SALT', 'krajnT~=:;,,?x69^yQeEI=M.nuN2_U]l.DM]R8SW{pF|kN?3T]|YO(B6&%1?wT7' );
define( 'LOGGED_IN_SALT',   'eh#QpOL&}r]iah|fX>q-R81?j$3+`b.2x2F;#+Vse` QKaaj5Z*II5{xS3Ip/0<,' );
define( 'NONCE_SALT',       'f2DTW?qCE79QdDMb&ozS69< NB(*WJ@,-P=8d*CpjGoaLzxaim%<DRs&7yxu|i:@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
@ini_set( 'upload_max_filesize' , '150M' );
@ini_set( 'post_max_size', '150M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
