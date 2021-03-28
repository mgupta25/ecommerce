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
define( 'DB_NAME', 'My_New_Database' );

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
define( 'AUTH_KEY',         '&GxzO_w%)K@FNZ##~cpj=IFXrx;Y}w-0g>H%jM?Y}1LOYT?!.%!YnQ.6i{V6e)Iu' );
define( 'SECURE_AUTH_KEY',  'vzA98c>u)jGC/S!<i>B*_D-[jAA8eCHmNEJBV^`0<:x6kXm|PO,M)|{l;*4ykWp<' );
define( 'LOGGED_IN_KEY',    'ebrwL7Ew-OaHGU|A52>-Q9lGucA rhqjS(8M/;?h,rBoHvlC 4T[[9Tb;tVj<Pys' );
define( 'NONCE_KEY',        '-bXT@Q6T$Uy[7QUA_T#) =yU%,$pq--cr],;J&i:VwWI=tqcc_Rh;59nK-I+yH3Y' );
define( 'AUTH_SALT',        'nd%5|$7HN}MygtVg-Ocar&:n vo,WTsaUNwy]{d, rO6HSI}-QW,5FnNYNI#&308' );
define( 'SECURE_AUTH_SALT', 'D=}4g]q7R#,Mk,1!N0?es)9B+N/4|mBWX /DmKol+Pp}dA~@o|8s@VV0!h$bin2Y' );
define( 'LOGGED_IN_SALT',   ' QW]`*!R7g}*_JDj(jmmq{lm6L-h~q_+Fy8%a]1L#=Ik77~>p:wIXt2a5pL&4ua|' );
define( 'NONCE_SALT',       'U]>GA;T/kD9Oy5pTa+Of:oQGh3qxQ7JkB?Dv}l[.cqa4OVOeYSuPZ}^d<#k_|5vx' );

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

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
