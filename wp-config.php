<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp4_cash' );
/** Database username */
define( 'DB_USER', 'root' );
/** Database password */
define( 'DB_PASSWORD', '' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
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
define( 'AUTH_KEY',         '^iX,ar5Bym`FWJ.Wq>5>+1)-_<H^R5U,B+|gD=B}?17ap=ogN{1p>| Yon|MsY(-' );
define( 'SECURE_AUTH_KEY',  'xT?FVg([Gs<T7OQukWxefl>U2moHz(q&>d$ /1+*lhf~j)m9(_/=S0D{83>Tt9^M' );
define( 'LOGGED_IN_KEY',    '?^jUsUQm|1XOjL I%.Rf|.c,?2<~SraAkY1Y2C]zUs2?fZB+fS<!< 5v`|>.37t:' );
define( 'NONCE_KEY',        '/Ped>fr1YtLNw{~!oo|LZ#&v0(0vZJ//!1$Q}!awx] LMGNFeeN&pFp,#Pp1]~$3' );
define( 'AUTH_SALT',        '2qpa?T]hoUahau6KF<^=f+Q?Kz*LKEabOMu:2SInCWfUs8*yLNm0T@:[-P}G!@1}' );
define( 'SECURE_AUTH_SALT', '`d@=q{<(hdT6jOpdtaLARV5@#GIh&P(0%@)D6{>b.v%6B_&ngq&, 8D%Yayp,}fS' );
define( 'LOGGED_IN_SALT',   '$/C8y_gD*7x|sNsq!fYG]!LIK%nmDo^t&SD3L}]%E5-?8*i;frG`|*F$kt;i-h-s' );
define( 'NONCE_SALT',       'mpg}^L9Y]r|C?F{`B 1ff+^!.Hd{!f3se8=*ba0YDL60sgswe|L{r^51ryj!kM*M' );
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );
/* Add any custom values between this line and the "stop editing" line. */

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';